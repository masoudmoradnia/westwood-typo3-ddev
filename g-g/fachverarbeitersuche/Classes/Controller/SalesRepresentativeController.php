<?php

declare(strict_types=1);

namespace GG\Fachverarbeitersuche\Controller;


/**
 * This file is part of the "Fachverarbeitersuche" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2021 Masoud Moradnia <masoud.moradnia@graphic-group.de>, Graphic Group Mensch und Media GmbH
 */

/**
 * SalesRepresentativeController
 */
class SalesRepresentativeController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * salesRepresentativeRepository
     *
     * @var \GG\Fachverarbeitersuche\Domain\Repository\SalesRepresentativeRepository
     */
    protected $salesRepresentativeRepository = null;

    /**
     * @param \GG\Fachverarbeitersuche\Domain\Repository\SalesRepresentativeRepository $salesRepresentativeRepository
     */
    public function injectSalesRepresentativeRepository(\GG\Fachverarbeitersuche\Domain\Repository\SalesRepresentativeRepository $salesRepresentativeRepository)
    {
        $this->salesRepresentativeRepository = $salesRepresentativeRepository;
    }

    /**
     * action list
     *
     * @return string|object|null|void
     */
    public function listAction()
    {
        $salesRepresentatives = $this->salesRepresentativeRepository->findAll();
        $this->view->assign('salesRepresentatives', $salesRepresentatives);
    }
}
