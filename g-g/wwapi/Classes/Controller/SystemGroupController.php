<?php

declare(strict_types=1);

namespace GG\Wwapi\Controller;

use GG\Wwapi\Domain\Model\Systemgroup;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Database\ConnectionPool;

/**
 * SystemGroupController
 */
class SystemGroupController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
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
        $systemgroupId =  $_GET['tx_wwapi_api']['sid'];
        $systemgroup =  $this->getContent($this->api_url . 'api/systemgroups/' . $systemgroupId . '?load[]=systems');
        $systemgroup = json_decode($systemgroup , true);
        $this->view->assign('systemgroup', $systemgroup);
        $this->view->assign('api_url', $this->api_url);
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