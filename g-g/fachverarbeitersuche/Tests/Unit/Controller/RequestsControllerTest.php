<?php
declare(strict_types=1);

namespace GG\Fachverarbeitersuche\Tests\Unit\Controller;

use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 *
 * @author Masoud Moradnia <masoud.moradnia@graphic-group.de>
 */
class RequestsControllerTest extends UnitTestCase
{
    /**
     * @var \GG\Fachverarbeitersuche\Controller\RequestsController
     */
    protected $subject;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\GG\Fachverarbeitersuche\Controller\RequestsController::class)
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
    public function createActionAddsTheGivenRequestsToRequestsRepository()
    {
        $requests = new \GG\Fachverarbeitersuche\Domain\Model\Requests();

        $requestsRepository = $this->getMockBuilder(\GG\Fachverarbeitersuche\Domain\Repository\RequestsRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $requestsRepository->expects(self::once())->method('add')->with($requests);
        $this->inject($this->subject, 'requestsRepository', $requestsRepository);

        $this->subject->createAction($requests);
    }
}
