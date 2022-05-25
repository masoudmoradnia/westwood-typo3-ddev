<?php
declare(strict_types=1);

namespace GG\Wwnews\Tests\Unit\Domain\Model;

use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 *
 * @author Masoud Moradnia <masoud.moradnia@graphic-group.de>
 */
class NewsItemTest extends UnitTestCase
{
    /**
     * @var \GG\Wwnews\Domain\Model\NewsItem
     */
    protected $subject;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \GG\Wwnews\Domain\Model\NewsItem();
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
    public function getSubtitleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getSubtitle()
        );
    }

    /**
     * @test
     */
    public function setSubtitleForStringSetsSubtitle()
    {
        $this->subject->setSubtitle('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'subtitle',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getImageReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getImage()
        );
    }

    /**
     * @test
     */
    public function setImageForFileReferenceSetsImage()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setImage($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'image',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getIntroductionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getIntroduction()
        );
    }

    /**
     * @test
     */
    public function setIntroductionForStringSetsIntroduction()
    {
        $this->subject->setIntroduction('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'introduction',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTextReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getText()
        );
    }

    /**
     * @test
     */
    public function setTextForStringSetsText()
    {
        $this->subject->setText('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'text',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPdfReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getPdf()
        );
    }

    /**
     * @test
     */
    public function setPdfForFileReferenceSetsPdf()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setPdf($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'pdf',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getApplicationAreaReturnsInitialValueForAplicationArea()
    {
        self::assertEquals(
            null,
            $this->subject->getApplicationArea()
        );
    }

    /**
     * @test
     */
    public function setApplicationAreaForAplicationAreaSetsApplicationArea()
    {
        $applicationAreaFixture = new \GG\Wwnews\Domain\Model\AplicationArea();
        $this->subject->setApplicationArea($applicationAreaFixture);

        self::assertAttributeEquals(
            $applicationAreaFixture,
            'applicationArea',
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
        $categoryFixture = new \GG\Wwnews\Domain\Model\Category();
        $this->subject->setCategory($categoryFixture);

        self::assertAttributeEquals(
            $categoryFixture,
            'category',
            $this->subject
        );
    }
}
