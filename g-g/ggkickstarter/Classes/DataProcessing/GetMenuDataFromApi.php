<?php
namespace GG\Ggkickstarter\DataProcessing;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;
use TYPO3\CMS\Frontend\ContentObject\DataProcessorInterface;
use TYPO3\CMS\Extbase\Domain\Repository\CategoryRepository;
use TYPO3\CMS\Core\Database\ConnectionPool;

class GetMenuDataFromApi implements DataProcessorInterface
{
    public function process(ContentObjectRenderer $cObj, array $contentObjectConfiguration, array $processorConfiguration, array $processedData)
    {

        // $objectManager = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\Object\\ObjectManager');
        // $menuSlufApplicationRepository = $objectManager->get('GG\Wwapi\Domain\Repository\ApplicationRepository');
        // $new_Application = $objectManager->get('GG\Wwapi\Domain\Model\Application');
        // $new_Application -> setTitle('test');
        // $refl = new \ReflectionClass("GG\Wwapi\Domain\Model\Application");
        // $refl->getProperty('uid')->setValue($new_Application, '10101');


        // // $new_Application -> setUid(10);

        // \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($new_Application);





        
        // Set the target variable
        $targetVariableName = $cObj->stdWrapValue('as', $processorConfiguration, $fieldName);
        $url = $cObj->stdWrapValue('url', $processorConfiguration, $fieldName);
        
       
        
        $menu = $this->getContent($url);
        $menu = json_decode($menu, true);

        $objectManager = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\Object\\ObjectManager');

        // fill applications
        $this->fillSlugTables("tx_wwapi_domain_model_application", $menu['applications'], $objectManager->get('GG\Wwapi\Domain\Repository\ApplicationRepository'));
        
        // fill systemgroups
        $this->fillSlugTables("tx_wwapi_domain_model_systemgroup", $menu['systemgroups'], $objectManager->get('GG\Wwapi\Domain\Repository\SystemgroupRepository'));

        // fill productlevels 
        $this->fillSlugTables("tx_wwapi_domain_model_productgroup", $menu['productlevels'], $objectManager->get('GG\Wwapi\Domain\Repository\ProductgroupRepository'));

        // fill systems  
        $this->fillSlugTables("tx_wwapi_domain_model_system", $menu['systems'], $objectManager->get('GG\Wwapi\Domain\Repository\SystemRepository'));

        // \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump( $menu['productlevels']);
        //fill products
        $products = [];
        foreach($menu['productlevels'] as $productLevel) {
            $products = array_merge($products, $productLevel['products']);
        }
        $this->fillSlugTables("tx_wwapi_domain_model_product", $products, $objectManager->get('GG\Wwapi\Domain\Repository\ProductRepository'));


        
        
        $processedData[$targetVariableName] = $menu;
        $processedData['data']['api_url']=$GLOBALS['TYPO3_CONF_VARS']['FE']['api_url'];
        return $processedData;
    }
    private function fillSlugTables($table, $data, $rep)
    {
        $connectionPool=GeneralUtility::makeInstance(ConnectionPool::class);
        $queryBuilder = $connectionPool->getQueryBuilderForTable($table);
        

        $uids = [];
        foreach ($rep->findAll()->toArray() as $repItem) {
            $uids[] = $repItem->getUid();
        }



        foreach ($data as $item) {
            if (! in_array($item['id'], $uids)) {
                $title = $this->sanitizeStringForUrl($item['title']);
                $queryBuilder
                    ->insert($table)
                    ->values([
                        'title' => $title,
                        'crdate' => time(),
                        'pid' => 55,
                        'uid' => $item['id']
                    ])
                    ->execute();
            }
        }
    }
    private function getContent($url)
    {
        $requestFactory = GeneralUtility::makeInstance(\TYPO3\CMS\Core\Http\RequestFactory::class);
        $additionalOptions = [
            'headers' => ['Cache-Control' => 'no-cache'],
            'Content Type' => 'application/json'
         ];
        return $requestFactory->request($url, 'GET', $additionalOptions)->getBody()->getContents();
    }

    private function sanitizeStringForUrl($string)
    {
        $string = strtolower($string);
        $string = html_entity_decode($string);
        $string = str_replace(array('ä','ü','ö','ß'), array('ae','ue','oe','ss'), $string);
        $string = preg_replace('#[^\w\säüöß]#', null, $string);
        $string = preg_replace('#[\s]{2,}#', ' ', $string);
        $string = str_replace(array(' '), array('-'), $string);
        return $string;
    }

}
