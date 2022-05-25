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
class SolutionIndexer extends IndexerBase
{
    // Set a key for your indexer configuration.
    // Add this key to the $GLOBALS[...] array in Configuration/TCA/Overrides/tx_kesearch_indexerconfig.php, too!
    // It is recommended (but no must) to use the name of the table you are going to index as a key because this
    // gives you the "original row" to work with in the result list template.
    const KEY = 'api_solution';

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
            'Solution-indexer',
            SolutionIndexer::KEY,
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
        
        $solutions = file_get_contents("https://api.westwood.de/public/api/solution/application");
        $solutions = json_decode($solutions , true);
        $counter = 0;
        foreach($solutions as $record) {


            // Compile the information, which should go into the index.
                // The field names depend on the table you want to index!
                $title    = strip_tags($record['title']);
                $subtitle    = strip_tags($record['subtitle']);
                $category    = strip_tags($record['category']);
                $legende    = strip_tags($record['legende']);
                $abstract = strip_tags($record['legende']);
                

                $fullContent = $title . "\n" . $subtitle . "\n" . $category . "\n" .$legende;

                // Link to detail view
                $params = '&sid='.$record['id'];

                // Tags
                // If you use Sphinx, use "_" instead of "#" (configurable in the extension manager).
                $tags = '';

                // Additional information
                $additionalFields = array(
                    'orig_uid' => $record['id'],
                    'orig_pid' => 52,
                    'sortdate' => strtotime($record['created_at']),
                );

                // set custom sorting
                $additionalFields['mysorting'] = $counter;

                // Add something to the title, just to identify the entries
                // in the frontend.
                //$title = '[CUSTOM INDEXER] ' . $title;

                // ... and store the information in the index
                $indexerObject->storeInIndex(
                    $indexerConfig['storagepid'],   // storage PID
                    $title,                         // record title
                    SolutionIndexer::KEY,            // content type
                    // $indexerConfig['targetpid'],    // target PID: where is the single view?
                    52,
                    $fullContent,                   // indexed content, includes the title (linebreak after title)
                    $tags,                          // tags for faceted search
                    $params,                        // typolink params for singleview
                    $abstract,                      // abstract; shown in result list if not empty
                    0,                              // language uid
                    $record['starttime'],           // starttime
                    $record['endtime'],             // endtime
                    $record['fe_group'],            // fe_group
                    false,                          // debug only?
                    $additionalFields               // additionalFields
                );
                
                $counter++;
        }

        
        return '';
    }
}