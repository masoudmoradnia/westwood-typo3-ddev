<?php

declare(strict_types=1);

namespace GG\Wwapi\Controller;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Database\ConnectionPool;

/**
 * ApplicationController
 */
class ApplicationController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
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
    public function IndexAction()
    {
        $applicationId = $_GET['tx_wwapi_api']['application_id'];
        $download_category_id = $this->settings['dlCatsegories'];

        // $elements = $menu->applications->$cid;
        $application = $this->getContent($this->api_url . 'api/applications/' . $applicationId . '?load[]=systems&load[]=referencesmm');
        $application = json_decode($application, true);
        // \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($application);
        //get download limited by download category id flex form

        $downloads = json_decode($this->getContent($this->api_url . "api/downloads?c=$download_category_id&m=applications&id=$applicationId"));
        // $elements->applications = $this->findApplicationForProduct($menu->applications, $cid); Idont know why it was here!!

        $solution_categories =  [
            "Upstands_and_edges" => "Auf- und Abkantungen",
            "Penetrations" => "Durchdringungen",
            "Joints" => "Fugen",
        ];

        foreach ($solution_categories as $key => $value) {
            $check_sizof_solution_categories = $this->getContent($this->api_url . "api/solution/application/$applicationId?category=$key");
            $check_sizof_solution_categories = json_decode($check_sizof_solution_categories, true);
            if (!sizeof($check_sizof_solution_categories)) {
                unset($solution_categories[$key]);
            }
        }
        $this->view->assign('application', $application);
        $this->view->assign('downloads', $downloads);
        $this->view->assign('solution_categories', $solution_categories);
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
