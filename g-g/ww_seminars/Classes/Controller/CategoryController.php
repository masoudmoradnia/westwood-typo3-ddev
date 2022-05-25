<?php

declare(strict_types=1);

namespace GG\WwSeminars\Controller;


/**
 * This file is part of the "Seminare" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2021 Masoud Moradnia <masoud.moradnia@graphic-group.de>, Graphic Group Mensch&Medien GmbH
 */

/**
 * CategoryController
 */
class CategoryController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * categoryRepository
     *
     * @var \GG\WwSeminars\Domain\Repository\CategoryRepository
     */
    protected $categoryRepository = null;

    /**
     * @param \GG\WwSeminars\Domain\Repository\CategoryRepository $categoryRepository
     */
    public function injectCategoryRepository(\GG\WwSeminars\Domain\Repository\CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * action index
     *
     * @return string|object|null|void
     */
    public function indexAction()
    {
        $this->view->assign('categories', $this->categoryRepository->findAll());
    }
}
