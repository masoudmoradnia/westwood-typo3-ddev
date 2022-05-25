<?php
declare(strict_types=1);

namespace GG\Fachverarbeitersuche\Tests\Unit\Domain\Model;

use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 *
 * @author Masoud Moradnia <masoud.moradnia@graphic-group.de>
 */
class RequestsTest extends UnitTestCase
{
    /**
     * @var \GG\Fachverarbeitersuche\Domain\Model\Requests
     */
    protected $subject;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \GG\Fachverarbeitersuche\Domain\Model\Requests();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getAddressReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAddress()
        );
    }

    /**
     * @test
     */
    public function setAddressForStringSetsAddress()
    {
        $this->subject->setAddress('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'address',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getApplicationReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getApplication()
        );
    }

    /**
     * @test
     */
    public function setApplicationForStringSetsApplication()
    {
        $this->subject->setApplication('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'application',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getRampReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getRamp()
        );
    }

    /**
     * @test
     */
    public function setRampForStringSetsRamp()
    {
        $this->subject->setRamp('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'ramp',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getStairwayReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getStairway()
        );
    }

    /**
     * @test
     */
    public function setStairwayForStringSetsStairway()
    {
        $this->subject->setStairway('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'stairway',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getParkingReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getParking()
        );
    }

    /**
     * @test
     */
    public function setParkingForStringSetsParking()
    {
        $this->subject->setParking('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'parking',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTopdeckReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTopdeck()
        );
    }

    /**
     * @test
     */
    public function setTopdeckForStringSetsTopdeck()
    {
        $this->subject->setTopdeck('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'topdeck',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getBetweendeckReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getBetweendeck()
        );
    }

    /**
     * @test
     */
    public function setBetweendeckForStringSetsBetweendeck()
    {
        $this->subject->setBetweendeck('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'betweendeck',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAreaReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getArea()
        );
    }

    /**
     * @test
     */
    public function setAreaForStringSetsArea()
    {
        $this->subject->setArea('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'area',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getEmailReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getEmail()
        );
    }

    /**
     * @test
     */
    public function setEmailForStringSetsEmail()
    {
        $this->subject->setEmail('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'email',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getFirstnameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getFirstname()
        );
    }

    /**
     * @test
     */
    public function setFirstnameForStringSetsFirstname()
    {
        $this->subject->setFirstname('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'firstname',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getLastnameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getLastname()
        );
    }

    /**
     * @test
     */
    public function setLastnameForStringSetsLastname()
    {
        $this->subject->setLastname('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'lastname',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTelReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTel()
        );
    }

    /**
     * @test
     */
    public function setTelForStringSetsTel()
    {
        $this->subject->setTel('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'tel',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getMessageReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getMessage()
        );
    }

    /**
     * @test
     */
    public function setMessageForStringSetsMessage()
    {
        $this->subject->setMessage('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'message',
            $this->subject
        );
    }
}
