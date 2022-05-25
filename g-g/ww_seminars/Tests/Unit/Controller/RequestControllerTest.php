<?php
declare(strict_types=1);

namespace GG\WwSeminars\Tests\Unit\Controller;

use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 *
 * @author Masoud Moradnia <masoud.moradnia@graphic-group.de>
 */
class RequestControllerTest extends UnitTestCase
{
    /**
     * @var \GG\WwSeminars\Controller\RequestController
     */
    protected $subject;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\GG\WwSeminars\Controller\RequestController::class)
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
    public function createActionAddsTheGivenRequestToRequestRepository()
    {
        $request = new \GG\WwSeminars\Domain\Model\Request();

        $requestRepository = $this->getMockBuilder(\GG\WwSeminars\Domain\Repository\RequestRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $requestRepository->expects(self::once())->method('add')->with($request);
        $this->inject($this->subject, 'requestRepository', $requestRepository);

        $this->subject->createAction($request);
    }
}
