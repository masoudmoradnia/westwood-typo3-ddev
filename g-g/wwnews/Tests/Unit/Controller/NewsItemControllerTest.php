<?php
declare(strict_types=1);

namespace GG\Wwnews\Tests\Unit\Controller;

use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 *
 * @author Masoud Moradnia <masoud.moradnia@graphic-group.de>
 */
class NewsItemControllerTest extends UnitTestCase
{
    /**
     * @var \GG\Wwnews\Controller\NewsItemController
     */
    protected $subject;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\GG\Wwnews\Controller\NewsItemController::class)
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
    public function listActionFetchesAllNewsItemsFromRepositoryAndAssignsThemToView()
    {
        $allNewsItems = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $newsItemRepository = $this->getMockBuilder(\GG\Wwnews\Domain\Repository\NewsItemRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $newsItemRepository->expects(self::once())->method('findAll')->will(self::returnValue($allNewsItems));
        $this->inject($this->subject, 'newsItemRepository', $newsItemRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('newsItems', $allNewsItems);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenNewsItemToView()
    {
        $newsItem = new \GG\Wwnews\Domain\Model\NewsItem();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('newsItem', $newsItem);

        $this->subject->showAction($newsItem);
    }
}
