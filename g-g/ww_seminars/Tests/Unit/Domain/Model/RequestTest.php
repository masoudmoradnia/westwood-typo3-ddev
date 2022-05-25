<?php
declare(strict_types=1);

namespace GG\WwSeminars\Tests\Unit\Domain\Model;

use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 *
 * @author Masoud Moradnia <masoud.moradnia@graphic-group.de>
 */
class RequestTest extends UnitTestCase
{
    /**
     * @var \GG\WwSeminars\Domain\Model\Request
     */
    protected $subject;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \GG\WwSeminars\Domain\Model\Request();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getTitleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTitle()
        );
    }

    /**
     * @test
     */
    public function setTitleForStringSetsTitle()
    {
        $this->subject->setTitle('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'title',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getVornameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getVorname()
        );
    }

    /**
     * @test
     */
    public function setVornameForStringSetsVorname()
    {
        $this->subject->setVorname('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'vorname',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getNachnameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getNachname()
        );
    }

    /**
     * @test
     */
    public function setNachnameForStringSetsNachname()
    {
        $this->subject->setNachname('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'nachname',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getSeminarReturnsInitialValueForSeminar()
    {
        self::assertEquals(
            null,
            $this->subject->getSeminar()
        );
    }

    /**
     * @test
     */
    public function setSeminarForSeminarSetsSeminar()
    {
        $seminarFixture = new \GG\WwSeminars\Domain\Model\Seminar();
        $this->subject->setSeminar($seminarFixture);

        self::assertAttributeEquals(
            $seminarFixture,
            'seminar',
            $this->subject
        );
    }
}
