<?php

declare(strict_types=1);

namespace GG\Wwapi\Controller;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Database\ConnectionPool;



/**
 * This file is part of the "api" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2021 Masoud Moradnia <masoud.moradnia@graphic-group.de>, Graphic Group Mensch und Media
 */

/**
 * ItemController
 */
class ItemController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    public $api_url;
    public $files_repo;

    public function __construct()
    {
        $this->api_url = $GLOBALS['TYPO3_CONF_VARS']['FE']['api_url'];
        $this->files_repo = "storage";
    }


    /**
     * action list
     *
     * @return string|object|null|void
     */
    public function listAction()
    {
        $download_category_id = $this->settings['dlCatsegories'];
		
        
        $url = $GLOBALS['TYPO3_CONF_VARS']['FE']['api_url'].'api/';
        $menu = file_get_contents($url."menu");
        //fluid cannot work with stdclass properly. so change to Array!
        $all_info = json_decode($menu, true);
        $menu = json_decode($menu);
        $render = $this->settings['renderType'];
        $cid = $_GET['cid'];
        
        // related system systemgroup
        foreach ($menu->systemgroups as $systemgroup) {
            foreach ($systemgroup->systems as $system) {
                $related_system_systemgroup_array[$system->id] = $systemgroup->id;
            }
        }


        switch ($this->settings['renderType']) {
            case 'applications':
                $cid = $this->request->getArgument('application_id');
                $elements = $menu->applications->$cid;
                $downloads = json_decode(file_get_contents($url."downloads?c=$download_category_id&m=applications&id=$cid"));
                $elements->applications = $this->findApplicationForProduct($menu->applications, $cid);

                $solution_categories =  [
                    "Upstands_and_edges" => "Auf- und Abkantungen",
                    "Penetrations" => "Durchdringungen",
                    "Joints" => "Fugen",
                ];

                foreach ($solution_categories as $key=>$value) {
                    $check_sizof_solution_categories = file_get_contents($url."solution/application/$cid?category=$key");
                    $check_sizof_solution_categories = json_decode($check_sizof_solution_categories, true);
                    if (!sizeof($check_sizof_solution_categories)) {
                        unset($solution_categories[$key]);
                    }
                }
    
                $this->view->assign('downloads', $downloads);
                $this->view->assign('solution_categories', $solution_categories);

                break;

                case 'solutions':
               
                $application = $_GET['application'];
                $category = $_GET['category'];
                $elements = file_get_contents($url."solution/application/$application?category=$category");
                $elements= json_decode($elements, true);
                $this->view->assign('category', $category);
                
                break;

                case 'solution':
               
                $solution = $_GET['sid'];
                $elements = file_get_contents($url."solution/$solution");
                $elements= json_decode($elements, true);
                
                break;

            case 'systemgroups':
                $cid = $this->request->getArgument('sid');
                $elements = $menu->systemgroups->$cid;


                break;
            case 'system':
                $cid = $this->request->getArgument('system_id');
                $elements = $menu->systems->$cid;
                $elements->applications = $this->findApplicationForSystem($menu->applications, $cid);
                $elements->group = $this->request->getArgument('group');
                $downloads = json_decode(file_get_contents($url."downloads?c=$download_category_id&m=systems&id=$cid"));
                $this->view->assign('downloads', $downloads);


                break;

            case 'references':

                $elements = $menu->$render->$cid;
                $elements->systems = $this->findsystemForRefrence($menu->systems, $cid);


                 break;

            case 'productlevels':
                $cid = $this->request->getArgument('productlevel_id');
                $elements = $menu->$render->$cid;
     

                break;
            case 'product':
                $cid = $this->request->getArgument('prid');
                $elements = $menu->$render->$cid;
                $elements = $this->findProductInProductLevels($menu->productlevels, $cid);
                $downloads = json_decode(file_get_contents($url."downloads?c=$download_category_id&m=products&id=$cid"));
                $this->view->assign('downloads', $downloads);


                break;

            case 'media':
				
				if(isset($_GET['tx_wwapi_api']['dl'])) {
					header("Location: https://api.westwood.de/storage/".$this->request->getArgument('dl'));
					die();
				}
				
                // **** nothing is here all data loaded with Vue. look here \ext\ggkickstarter\Resources\Public\components\media\media.js
                // $categories = file_get_contents($url."categories");
                // $categories= json_decode($categories, true);
                // $this->view->assign('categories', $categories);

                break;

            case 'carousel ':
                $elements="";


                break;

            default:
                $elements = $menu->$render->$cid;

                break;
        }
        
        
        
        $referencesByPrioDescending = $all_info['references'];
        usort($referencesByPrioDescending, function ($a, $b) {
            if ($a['prio'] === $b['prio']) {
                return 0;
            } else {
                return ($a['prio'] < $b['prio'] ? 1:-1);
            }
        });
      
        $this->view->assign('elements', $elements);
        $this->view->assign('all_info', $all_info);
        $this->view->assign('menu', $menu);
        $this->view->assign('api_url', $this->api_url);
        $this->view->assign('filesRepo', $this->files_repo);

        $this->view->assign('references', $referencesByPrioDescending);
        $this->view->assign('related_system_systemgroup_array', $related_system_systemgroup_array);
    }

       /**
     * action setUrl
     *
     * @return string|object|null|void
     */
    public function setUrlAction()
    {
        if($_POST['export']) {
            $objectManager = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\Object\\ObjectManager');
            $url = $GLOBALS['TYPO3_CONF_VARS']['FE']['api_url'].'api/';
            $menu = $this->getContent($url."menu");
            $menu = json_decode($menu, true);

            
            // fill applications
            $this->fillSlugTables("tx_wwapi_domain_model_application", $menu['applications'], $objectManager->get('GG\Wwapi\Domain\Repository\ApplicationRepository'));
            
            // fill systemgroups
            $this->fillSlugTables("tx_wwapi_domain_model_systemgroup", $menu['systemgroups'], $objectManager->get('GG\Wwapi\Domain\Repository\SystemgroupRepository'));

            // fill productlevels 
            $this->fillSlugTables("tx_wwapi_domain_model_productgroup", $menu['productlevels'], $objectManager->get('GG\Wwapi\Domain\Repository\ProductgroupRepository'));

            // fill systems  
            $this->fillSlugTables("tx_wwapi_domain_model_system", $menu['systems'], $objectManager->get('GG\Wwapi\Domain\Repository\SystemRepository'));

            //fill products
            $products = [];
            foreach($menu['productlevels'] as $productLevel) {
                $products = array_merge($products, $productLevel['products']);
            }
            $this->fillSlugTables("tx_wwapi_domain_model_product", $products, $objectManager->get('GG\Wwapi\Domain\Repository\ProductRepository'));
            $this->view->assign('message' , 'alle API-Url sind aktualisiert.');
        }
        

    }

    private function deleteExtraDownloadElements($elements, $download_category_id)
    {
        $download_category_id = explode(',', $download_category_id);
        $downloadsGroupedByCategory = [];
        
        foreach ($elements->downloads as $dlKey => $download) {
            $check = false;
            foreach ($download->categories as $category) {
                if (in_array($category->id, $download_category_id)) {
                    $check = true;
                    $downloadsGroupedByCategory[$category->id]['title'] = $category->title;
                    $downloadsGroupedByCategory[$category->id]['data'][] = $download;
                }
            }
            if (!$check) {
                unset($elements->downloads[$dlKey]);
            }
        }
        $elements->downloadsGroupedByCategory = $downloadsGroupedByCategory;
        return $elements;
    }
    private function findProductInProductLevels($productLevels, $product_id)
    {
        foreach ($productLevels as $productLevel) {
            foreach ($productLevel->products as $product) {
                if ($product->id == $product_id) {
                    return $product;
                }
            }
        }
    }

    private function findApplicationForSystem($applications, $system_id)
    {
        $applicationsForThisSystem = [];
        foreach ($applications as $application) {
            foreach ($application->systems as $system) {
                if ($system->id == $system_id) {
                    $applicationsForThisSystem[]=$application;
                }
            }
        }
        return $applicationsForThisSystem;
    }
    private function findApplicationForProduct($applications, $product_id)
    {
        $applicationsForThisProduct = [];
        foreach ($applications as $application) {
            foreach ($application->products as $product) {
                if ($product->id == $product_id) {
                    $applicationsForThisProduct[]=$application;
                }
            }
        }
        return $applicationsForThisProduct;
    }

    
    private function findsystemForRefrence($systems, $ref_id)
    {
        $refsForThisSystem = [];
        foreach ($systems as $system) {
            foreach ($system->referencesmm as $reference) {
                if ($reference->id == $ref_id) {
                    $refsForThisSystem[]=$system;
                }
            }
        }
        return $refsForThisSystem;
    }


    private function fillSlugTables($table, $data, $rep)
    {
        $connectionPool=GeneralUtility::makeInstance(ConnectionPool::class);
        $queryBuilder = $connectionPool->getQueryBuilderForTable($table);
        

        $uids = [];
        foreach ($rep->findAll()->toArray() as $repItem) {
            $uid = $repItem->getUid();
            $uids[] = $uid;
            $titles[$uid] = $repItem->getTitle();            

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
            } else {
                if($this->sanitizeStringForUrl($item['title']) != $titles[$item['id']]) {
                    echo $item['title'];
                    $id = $item['id'];
                    GeneralUtility::makeInstance(ConnectionPool::class)->getConnectionForTable($table)
                    ->update(
                        $table,
                        [ 'title' => $this->sanitizeStringForUrl($item['title']) ], // set
                        [ 'uid' => $id ] // where
                    );
                }
            }
        }
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

    private function getContent($url)
    {
        $requestFactory = GeneralUtility::makeInstance(\TYPO3\CMS\Core\Http\RequestFactory::class);
        $additionalOptions = [
            'headers' => ['Cache-Control' => 'no-cache'],
            'Content Type' => 'application/json'
         ];
        return $requestFactory->request($url, 'GET', $additionalOptions)->getBody()->getContents();
    }
}
