<?php
declare(strict_types=1);

namespace GG\WwSeminars\Tests\Unit\Domain\Model;

use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 *
 * @author Masoud Moradnia <masoud.moradnia@graphic-group.de>
 */
class CategoryTest extends UnitTestCase
{
    /**
     * @var \GG\WwSeminars\Domain\Model\Category
     */
    protected $subject;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \GG\WwSeminars\Domain\Model\Category();
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
    public function getDownloadsReturnsInitialValueForFileReference()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getDownloads()
        );
    }

    /**
     * @test
     */
    public function setDownloadsForFileReferenceSetsDownloads()
    {
        $download = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $objectStorageHoldingExactlyOneDownloads = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneDownloads->attach($download);
        $this->subject->setDownloads($objectStorageHoldingExactlyOneDownloads);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneDownloads,
            'downloads',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addDownloadToObjectStorageHoldingDownloads()
    {
        $download = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $downloadsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $downloadsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($download));
        $this->inject($this->subject, 'downloads', $downloadsObjectStorageMock);

        $this->subject->addDownload($download);
    }

    /**
     * @test
     */
    public function removeDownloadFromObjectStorageHoldingDownloads()
    {
        $download = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $downloadsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $downloadsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($download));
        $this->inject($this->subject, 'downloads', $downloadsObjectStorageMock);

        $this->subject->removeDownload($download);
    }
}
