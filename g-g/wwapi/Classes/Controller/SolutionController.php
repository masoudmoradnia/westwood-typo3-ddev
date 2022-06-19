<?php

declare(strict_types=1);

namespace GG\Wwapi\Controller;

use GG\Wwapi\Domain\Model\Systemgroup;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Database\ConnectionPool;

/**
 * SystemGroupController
 */
class SolutionController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
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
        $application = $_GET['application'];
        $category = $_GET['category'];        
        $solutions = $this->getContent($this->api_url."api/solution/application/$application?category=$category");
        $solutions= json_decode($solutions, true);

        $this->view->assign('solutions', $solutions);
        $this->view->assign('category', $category);
        $this->view->assign('api_url', $this->api_url);
        $this->view->assign('filesRepo', $this->files_repo);

    }
    /**
     * action show
     *
     * @return string|object|null|void
     */
    public function ShowAction()
    {
        $solution = $_GET['sid'];
        $solution =  $this->getContent($this->api_url."api/solution/$solution");
        $solution = json_decode($solution, true);
        $this->view->assign('solution', $solution);
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