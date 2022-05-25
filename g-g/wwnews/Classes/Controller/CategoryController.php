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
 * CategoryController
 */
class CategoryController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

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
     * action list
     *
     * @return string|object|null|void
     */
    public function listAction()
    {
        $categories = $this->categoryRepository->findAll();
        $this->view->assign('categories', $categories);
    }
}
