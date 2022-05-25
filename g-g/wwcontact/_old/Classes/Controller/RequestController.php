<?php

declare(strict_types=1);

namespace GG\Wwcontact\Controller;

/**
 * This file is part of the "Kontakt Formular" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2021 Masoud Moradnia <masoud.moradnia@graphic-group.de>, Graphic Group Mensch und Media GmbH
 */

/**
 * RequestController
 */
class RequestController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * requestRepository
     *
     * @var \GG\Wwcontact\Domain\Repository\RequestRepository
     */
    protected $requestRepository = null;

    /**
     * @param \GG\Wwcontact\Domain\Repository\RequestRepository $requestRepository
     */
    public function injectRequestRepository(\GG\Wwcontact\Domain\Repository\RequestRepository $requestRepository)
    {
        $this->requestRepository = $requestRepository;
    }

    /**
     * action new
     *
     * @return string|object|null|void
     */
    public function newAction()
    {
        $filesProcessor = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Frontend\DataProcessing\FilesProcessor::class);
        $image = $filesProcessor->process(
            $this->configurationManager->getContentObject(),
            [],
            [
                'references.' => [
                    'fieldName' => 'image',
                    'table' => 'tt_content',
                ],
                'as' => 'image',
            ],
            []
        );
        $this->view->assign('image', $image);
    }

    public function validateAction()
    {
        $a = [1,2,3];
        return json_encode($a);
    }

    /**
     * action create
     *
     * @param \GG\Wwcontact\Domain\Model\Request $newRequest
     * @return string|object|null|void
     */
    public function createAction(\GG\Wwcontact\Domain\Model\Request $newRequest)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/p/friendsoftypo3/extension-builder/master/en-us/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->requestRepository->add($newRequest);
        $this->redirect('list');
    }
}
