<?php

declare(strict_types=1);

namespace GG\Wwapi\Controller;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Database\ConnectionPool;

/**
 * ApiRefController
 */
class ApiRefController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
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
    public function sliderAction()
    {
        echo 1;
    }
}