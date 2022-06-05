<?php

declare(strict_types=1);

namespace GG\Wwapi\Controller;

use GG\Wwapi\Domain\Model\Systemgroup;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Database\ConnectionPool;

/**
 * SystemController
 */
class SystemController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    public $api_url;
    public $files_repo;

    public function __construct()
    {
        $this->api_url = $GLOBALS['TYPO3_CONF_VARS']['FE']['api_url'];
        $this->files_repo = "storage";
    }
    /**
     * action index
     *
     * @return string|object|null|void
     */
    public function IndexAction()
    {
        $download_category_id = $this->settings['dlCatsegories'];        
        $systemgroupId =  $_GET['tx_wwapi_apisystemgroups']['group'];
        $systemId =  $_GET['tx_wwapi_apisystemgroups']['system_id'];

        $system =  $this->getContent($this->api_url . 'api/systems/' . $systemId . '?load[]=applications&load[]=products&load[]=referencesmm&load[]=downloads');
        $system = json_decode($system , true);

        $systemgroups = $this->getContent($this->api_url . 'api/systemgroups/');
        $systemgroups = json_decode($systemgroups , true);

        $downloads = json_decode($this->getContent($this->api_url."api/downloads?c=$download_category_id&m=systems&id=$systemId"));


        $this->view->assign('system', $system);
        $this->view->assign('downloads', $downloads);
        $this->view->assign('systemgroups', $systemgroups);

        $this->view->assign('api_url', $this->api_url);
        $this->view->assign('systemgroupId', $systemgroupId);
        $this->view->assign('filesRepo', $this->files_repo);
        

    }
    private function getContent($url)
    { 

        $requestFactory = GeneralUtility::makeInstance(\TYPO3\CMS\Core\Http\RequestFactory::class);
        $additionalOptions = [
            'headers' => ['Cache-Control' => 'no-cache'],
            'Content Type' => 'application/json',
         ];
        return $requestFactory->request($url, 'GET', $additionalOptions)->getBody()->getContents();
    }
}