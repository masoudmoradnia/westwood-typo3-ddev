<?php

declare(strict_types=1);

namespace GG\Wwnews\Controller;


/**
 * This file is part of the "News" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2021 Masoud Moradnia <masoud.moradnia@graphic-group.de>, Graphic Group Mensch und Media
 */

/**
 * NewsItemController
 */
class NewsItemController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * newsItemRepository
     *
     * @var \GG\Wwnews\Domain\Repository\NewsItemRepository
     */
    protected $newsItemRepository = null;

    /**
     * @param \GG\Wwnews\Domain\Repository\NewsItemRepository $newsItemRepository
     */
    public function injectNewsItemRepository(\GG\Wwnews\Domain\Repository\NewsItemRepository $newsItemRepository)
    {
        $this->newsItemRepository = $newsItemRepository;
    }

    /**
     * categoryRepository
     *
     * @var \GG\Wwnews\Domain\Repository\CategoryRepository
     */
    protected $categoryRepository = null;

    /**
     * @param \GG\Wwnews\Domain\Repository\CategoryRepository $categoryRepository
     */
    public function injectCategoryRepository(\GG\Wwnews\Domain\Repository\CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * aplicationAreaRepository
     *
     * @var \GG\Wwnews\Domain\Repository\AplicationAreaRepository
     */
    protected $aplicationAreaRepository = null;

    /**
     * @param \GG\Wwnews\Domain\Repository\AplicationAreaRepository $aplicationAreaRepository
     */
    public function injectAplicationAreaRepository(\GG\Wwnews\Domain\Repository\AplicationAreaRepository $aplicationAreaRepository)
    {
        $this->aplicationAreaRepository = $aplicationAreaRepository;
    }

    /**
     * action list
     *
     * @return string|object|null|void
     */
    public function shortlistAction()
    {
        $newsItems = $this->newsItemRepository->findAll()->getQuery()->setLimit(3)->execute();;
        $this->view->assign('newsItems', $newsItems);
    }

    /**
     * action list
     *
     * @return string|object|null|void
     */
    public function listAction()
    {

        if(isset($_POST['check'])) {

            if($_POST['filterAplicationareas']) {
                $aplicationareas = $_POST['filterAplicationareas'];
            }

            if ($_POST['filterCategories']) {
                $categories = $_POST['filterCategories'];
            }

            if ($_POST['searchterm']) {
                $searchterm = $_POST['searchterm'];
            }

            $newsItems = $this->newsItemRepository->filters($searchterm, $categories, $aplicationareas);
        } else {
            $newsItems = $this->newsItemRepository->findAll();
        }

        $categories = $this->categoryRepository->findAll();
        $aplicationareas = $this->aplicationAreaRepository->findAll();
        $this->view->assign('categories', $categories);
        $this->view->assign('aplicationareas', $aplicationareas);
        $this->view->assign('newsItems', $newsItems);
    }


    /**
     * action show
     *
     * @param \GG\Wwnews\Domain\Model\NewsItem $newsItem
     * @return string|object|null|void
     */
    public function showAction(\GG\Wwnews\Domain\Model\NewsItem $newsItem)
    {
        $this->view->assign('newsItem', $newsItem);
    }
}
