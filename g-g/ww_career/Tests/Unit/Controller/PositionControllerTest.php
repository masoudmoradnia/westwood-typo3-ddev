<?php
declare(strict_types=1);

namespace GG\WwCareer\Tests\Unit\Controller;

use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 *
 * @author Masoud Moradnia <masoud.moradnia@graphic-group.de>
 */
class PositionControllerTest extends UnitTestCase
{
    /**
     * @var \GG\WwCareer\Controller\PositionController
     */
    protected $subject;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\GG\WwCareer\Controller\PositionController::class)
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
    public function listActionFetchesAllPositionsFromRepositoryAndAssignsThemToView()
    {
        $allPositions = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $positionRepository = $this->getMockBuilder(\::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $positionRepository->expects(self::once())->method('findAll')->will(self::returnValue($allPositions));
        $this->inject($this->subject, 'positionRepository', $positionRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('positions', $allPositions);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }
}
