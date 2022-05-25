<?php
declare(strict_types=1);

namespace GG\Wwnews\Tests\Unit\Controller;

use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 *
 * @author Masoud Moradnia <masoud.moradnia@graphic-group.de>
 */
class AplicationAreaControllerTest extends UnitTestCase
{
    /**
     * @var \GG\Wwnews\Controller\AplicationAreaController
     */
    protected $subject;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\GG\Wwnews\Controller\AplicationAreaController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllAplicationAreasFromRepositoryAndAssignsThemToView()
    {
        $allAplicationAreas = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $aplicationAreaRepository = $this->getMockBuilder(\GG\Wwnews\Domain\Repository\AplicationAreaRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $aplicationAreaRepository->expects(self::once())->method('findAll')->will(self::returnValue($allAplicationAreas));
        $this->inject($this->subject, 'aplicationAreaRepository', $aplicationAreaRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('aplicationAreas', $allAplicationAreas);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }
}
