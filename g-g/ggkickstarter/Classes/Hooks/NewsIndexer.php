<?php
// Set you own vendor name.
// Adjust the extension name part of the namespace to your extension key.
namespace GG\Ggkickstarter\Hooks;

use Tpwd\KeSearch\Indexer\IndexerBase;
use Tpwd\KeSearch\Indexer\IndexerRunner;
use TYPO3\CMS\Core\Database\Connection;
use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Database\Query\Restriction\DeletedRestriction;
use TYPO3\CMS\Core\Database\Query\Restriction\HiddenRestriction;
use TYPO3\CMS\Core\Utility\GeneralUtility;

// Set you own class name.
class NewsIndexer extends IndexerBase
{
    // Set a key for your indexer configuration.
    // Add this key to the $GLOBALS[...] array in Configuration/TCA/Overrides/tx_kesearch_indexerconfig.php, too!
    // It is recommended (but no must) to use the name of the table you are going to index as a key because this
    // gives you the "original row" to work with in the result list template.
    const KEY = 'tx_wwnews_domain_model_newsitem';

    /**
     * Adds the custom indexer to the TCA of indexer configurations, so that
     * it's selectable in the backend as an indexer type, when you create a
     * new indexer configuration.
     *
     * @param array $params
     * @param object $pObj
     */
    public function registerIndexerConfiguration(&$params, $pObj)
    {
        // Set a name and an icon for your indexer.
        $customIndexer = array(
            '[CUSTOM] News-Indexer',
            NewsIndexer::KEY,
            'EXT:ke_search_hooks/customnews-indexer-icon.gif'
        );
        $params['items'][] = $customIndexer;
    }

    /**
     * Custom indexer for ke_search.
     *
     * @param   array $indexerConfig Configuration from TYPO3 Backend.
     * @param   IndexerRunner $indexerObject Reference to indexer class.
     * @return  string Message containing indexed elements.
     */
    public function customIndexer(array &$indexerConfig, IndexerRunner &$indexerObject): string
    {
            $table = 'tx_wwnews_domain_model_newsitem';
            
            // Doctrine DBAL using Connection Pool.
            /** @var Connection $connection */
            $connection = GeneralUtility::makeInstance(ConnectionPool::class)->getConnectionForTable($table);
            $queryBuilder = $connection->createQueryBuilder();
            
            // Handle restrictions.
            // Don't fetch hidden or deleted elements, but the elements
            // with frontend user group access restrictions or time (start / stop)
            // restrictions in order to copy those restrictions to the index.
            $queryBuilder
                ->getRestrictions()
                ->removeAll()
                ->add(GeneralUtility::makeInstance(DeletedRestriction::class))
                ->add(GeneralUtility::makeInstance(HiddenRestriction::class));

            // $folders = GeneralUtility::trimExplode(',', htmlentities($indexerConfig['sysfolder']));
            $statement = $queryBuilder
            ->select('tx_wwnews_domain_model_newsitem.*' , 'c.title as catTitle' , 'a.title as appTitle')
            ->from('tx_wwnews_domain_model_newsitem')
            ->join(
                'tx_wwnews_domain_model_newsitem',
                'tx_wwnews_domain_model_category',
                'c',
                $queryBuilder->expr()->eq('tx_wwnews_domain_model_newsitem.category', $queryBuilder->quoteIdentifier('c.uid'))
             )
             ->join(
                'tx_wwnews_domain_model_newsitem',
                'tx_wwnews_domain_model_aplicationarea',
                'a',
                $queryBuilder->expr()->eq('tx_wwnews_domain_model_newsitem.category', $queryBuilder->quoteIdentifier('a.uid'))
             )
            ->execute();

            // Loop through the records and write them to the index.
            $counter = 0;
                
            while ($record = $statement->fetch()) {
                // Compile the information, which should go into the index.
                // The field names depend on the table you want to index!
                $title = strip_tags($record['title']);
                $subtitle = strip_tags($record['subtitle']);
                $introduction = strip_tags($record['introduction']);
                $text = strip_tags($record['text']);
                $refplace = strip_tags($record['refplace']);
                $reftype = strip_tags($record['reftype']);
                $abstract = strip_tags($record['introduction']);
                $appTitle = strip_tags($record['appTitle']);
                $catTitle = strip_tags($record['catTitle']);

                $fullContent = 
                    $title . "\n" . 
                    $text . "\n" . 
                    $subtitle . "\n" .     
                    $catTitle . "\n" .     
                    $appTitle . "\n" .     
                    $introduction . "\n" .     
                    $introduction . "\n" .     
                    $refplace . "\n" .     
                    $reftype;

                // Link to detail view
                $params = 'tx_wwnews_list[action]=show&tx_wwnews_list[controller]=NewsItem&tx_wwnews_list[newsItem]='.$record['uid'];

                // Tags
                // If you use Sphinx, use "_" instead of "#" (configurable in the extension manager).
                $tags = '';

                // Additional information
                $additionalFields = array(
                    'orig_uid' => $record['uid'],
                    'orig_pid' => $record['pid'],
                    'sortdate' => $record['datetime'],
                );

                // set custom sorting
                $additionalFields['mysorting'] = $counter;

                // Add something to the title, just to identify the entries
                // in the frontend.
                // $title = '[CUSTOM INDEXER] ' . $title;

                // ... and store the information in the index
                $indexerObject->storeInIndex(
                    $indexerConfig['storagepid'],   // storage PID
                    $title,                         // record title
                    NewsIndexer::KEY,            // content type
                    $indexerConfig['targetpid'],    // target PID: where is the single view?
                    $fullContent,                   // indexed content, includes the title (linebreak after title)
                    $tags,                          // tags for faceted search
                    $params,                        // typolink params for singleview
                    $abstract,                      // abstract; shown in result list if not empty
                    $record['sys_language_uid'],    // language uid
                    $record['starttime'],           // starttime
                    $record['endtime'],             // endtime
                    $record['fe_group'],            // fe_group
                    false,                          // debug only?
                    $additionalFields               // additionalFields
                );
                
                $counter++;
            }

            $content = $counter . ' Elements have been indexed.';
            return $content;
        
    return '';
    }
}