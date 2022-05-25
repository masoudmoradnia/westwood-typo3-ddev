<?php
declare(strict_types=1);

namespace GG\WwSeminars\Tests\Unit\Domain\Model;

use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 *
 * @author Masoud Moradnia <masoud.moradnia@graphic-group.de>
 */
class SeminarTest extends UnitTestCase
{
    /**
     * @var \GG\WwSeminars\Domain\Model\Seminar
     */
    protected $subject;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \GG\WwSeminars\Domain\Model\Seminar();
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
    public function getDescriptionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDescription()
        );
    }

    /**
     * @test
     */
    public function setDescriptionForStringSetsDescription()
    {
        $this->subject->setDescription('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'description',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDateReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getDate()
        );
    }

    /**
     * @test
     */
    public function setDateForDateTimeSetsDate()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setDate($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'date',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAgendaReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getAgenda()
        );
    }

    /**
     * @test
     */
    public function setAgendaForFileReferenceSetsAgenda()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setAgenda($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'agenda',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getApplicationReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getApplication()
        );
    }

    /**
     * @test
     */
    public function setApplicationForFileReferenceSetsApplication()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setApplication($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'application',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPlaceReturnsInitialValueForPlace()
    {
        self::assertEquals(
            null,
            $this->subject->getPlace()
        );
    }

    /**
     * @test
     */
    public function setPlaceForPlaceSetsPlace()
    {
        $placeFixture = new \GG\WwSeminars\Domain\Model\Place();
        $this->subject->setPlace($placeFixture);

        self::assertAttributeEquals(
            $placeFixture,
            'place',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getCategoryReturnsInitialValueForCategory()
    {
        self::assertEquals(
            null,
            $this->subject->getCategory()
        );
    }

    /**
     * @test
     */
    public function setCategoryForCategorySetsCategory()
    {
        $categoryFixture = new \GG\WwSeminars\Domain\Model\Category();
        $this->subject->setCategory($categoryFixture);

        self::assertAttributeEquals(
            $categoryFixture,
            'category',
            $this->subject
        );
    }
}
