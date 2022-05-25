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
 * PlaceController
 */
class PlaceController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * placeRepository
     *
     * @var \GG\WwSeminars\Domain\Repository\PlaceRepository
     */
    protected $placeRepository = null;

    /**
     * seminarRepository
     *
     * @var \GG\WwSeminars\Domain\Repository\SeminarRepository
     */
    protected $seminarRepository = null;

    /**
     * @param \GG\WwSeminars\Domain\Repository\SeminarRepository $seminarRepository
     */
    public function injectSeminarRepository(\GG\WwSeminars\Domain\Repository\SeminarRepository $seminarRepository)
    {
        $this->seminarRepository = $seminarRepository;
    }

    /**
     * @param \GG\WwSeminars\Domain\Repository\PlaceRepository $placeRepository
     */
    public function injectPlaceRepository(\GG\WwSeminars\Domain\Repository\PlaceRepository $placeRepository)
    {
        $this->placeRepository = $placeRepository;
    }

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
        $places = [];
        $category_id = $this->request->getArgument('category_id');
        
        foreach($this->placeRepository->findAll()->toArray() as $place) {
            // $seminars = $this->seminarRepository->findByPlace($place->getUid())->toArray();
            $seminars = $this->seminarRepository->getCategorizedSeminars($place->getUid() , $category_id)->toArray();

            $place->setSeminar($seminars);
            $places[] = $place;
        }
        
        $this->view->assign('places', $places);
        $this->view->assign('category', $this->categoryRepository->findByUid($category_id));

    }
}
