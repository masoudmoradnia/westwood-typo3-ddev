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
 * SeminarController
 */
class SeminarController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

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
     * action index
     *
     * @return string|object|null|void
     */
    public function indexAction()
    {
        $this->view->assign('seminars', $this->seminarRepository->findAll());

    }
}
