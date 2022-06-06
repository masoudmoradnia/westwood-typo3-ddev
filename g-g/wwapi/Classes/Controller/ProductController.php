<?php

declare(strict_types=1);

namespace GG\Wwapi\Controller;

use GG\Wwapi\Domain\Model\Systemgroup;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Database\ConnectionPool;

/**
 * ProductController
 */
class ProductController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
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
        $productId =  $_GET['tx_wwapi_api']['prid'];
        $download_category_id = $this->settings['dlCatsegories'];        


        $product =  $this->getContent($this->api_url . 'api/products/' . $productId . '?with[]=colors&with[]=referencesmm');
        $product = json_decode($product, true);

        $productLevels =  $this->getContent($this->api_url . 'api/productlevels/');
        $productLevels = json_decode($productLevels, true);

        $downloads = json_decode(file_get_contents($this->api_url . "api/downloads?c=$download_category_id&m=products&id=$productId"));
        $download_category_id = $this->settings['dlCatsegories'];        

        $this->view->assign('product', $product);
        $this->view->assign('productLevels', $productLevels);
        $this->view->assign('downloads', $downloads);
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
