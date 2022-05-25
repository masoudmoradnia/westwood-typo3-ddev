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
 * AplicationAreaController
 */
class AplicationAreaController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

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
    public function listAction()
    {
        $aplicationAreas = $this->aplicationAreaRepository->findAll();
        $this->view->assign('aplicationAreas', $aplicationAreas);
    }
}
