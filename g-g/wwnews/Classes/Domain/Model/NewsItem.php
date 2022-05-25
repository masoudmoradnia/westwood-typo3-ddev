<?php

declare(strict_types=1);

namespace GG\Wwnews\Domain\Model;


/**
 * This file is part of the "News" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2021 Masoud Moradnia <masoud.moradnia@graphic-group.de>, Graphic Group Mensch und Media
 */

/**
 * NewsItem
 */
class NewsItem extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * title
     *
     * @var string
     */
    protected $title = '';

    /**
     * subtitle
     *
     * @var string
     */
    protected $subtitle = '';

    /**
     * image
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $image = null;

    /**
     * cover
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $cover = null;

    /**
     * refplace
     *
     * @var string
     */
    protected $refplace = '';

    /**
     * reftype
     *
     * @var string
     */
    protected $reftype = '';



    /**
     * introduction
     *
     * @var string
     */
    protected $introduction = '';

    /**
     * text
     *
     * @var string
     */
    protected $text = '';

    /**
     * pdf
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $pdf = null;

    /**
     * applicationArea
     *
     * @var \GG\Wwnews\Domain\Model\AplicationArea
     */
    protected $applicationArea = null;

    /**
     * category
     *
     * @var \GG\Wwnews\Domain\Model\Category
     */
    protected $category = null;

    /**
     * Returns the title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     *
     * @param string $title
     * @return void
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    /**
     * Returns the subtitle
     *
     * @return string $subtitle
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * Sets the subtitle
     *
     * @param string $subtitle
     * @return void
     */
    public function setSubtitle(string $subtitle)
    {
        $this->subtitle = $subtitle;
    }

    /**
     * Returns the refplace
     *
     * @return string $refplace
     */
    public function getRefplace()
    {
        return $this->refplace;
    }

    /**
     * Sets the refplace
     *
     * @param string $refplace
     * @return void
     */
    public function setRefplace(string $refplace)
    {
        $this->refplace = $refplace;
    }

    /**
     * Returns the reftype
     *
     * @return string $reftype
     */
    public function getRefType()
    {
        return $this->reftype;
    }

    /**
     * Sets the reftype
     *
     * @param string $reftype
     * @return void
     */
    public function setRefType(string $reftype)
    {
        $this->reftype = $reftype;
    }

    /**
     * Returns the image
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Sets the image
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     * @return void
     */
    public function setImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image)
    {
        $this->image = $image;
    }

    /**
     * Returns the cover
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $cover
     */
    public function getCover()
    {
        return $this->cover;
    }

    /**
     * Sets the cover
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $cover
     * @return void
     */
    public function setCover(\TYPO3\CMS\Extbase\Domain\Model\FileReference $cover)
    {
        $this->cover = $cover;
    }

    /**
     * Returns the introduction
     *
     * @return string $introduction
     */
    public function getIntroduction()
    {
        return $this->introduction;
    }

    /**
     * Sets the introduction
     *
     * @param string $introduction
     * @return void
     */
    public function setIntroduction(string $introduction)
    {
        $this->introduction = $introduction;
    }

    /**
     * Returns the text
     *
     * @return string $text
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets the text
     *
     * @param string $text
     * @return void
     */
    public function setText(string $text)
    {
        $this->text = $text;
    }

    /**
     * Returns the pdf
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $pdf
     */
    public function getPdf()
    {
        return $this->pdf;
    }

    /**
     * Sets the pdf
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $pdf
     * @return void
     */
    public function setPdf(\TYPO3\CMS\Extbase\Domain\Model\FileReference $pdf)
    {
        $this->pdf = $pdf;
    }

    /**
     * Returns the applicationArea
     *
     * @return \GG\Wwnews\Domain\Model\AplicationArea $applicationArea
     */
    public function getApplicationArea()
    {
        return $this->applicationArea;
    }

    /**
     * Sets the applicationArea
     *
     * @param \GG\Wwnews\Domain\Model\AplicationArea $applicationArea
     * @return void
     */
    public function setApplicationArea(\GG\Wwnews\Domain\Model\AplicationArea $applicationArea)
    {
        $this->applicationArea = $applicationArea;
    }

    /**
     * Returns the category
     *
     * @return \GG\Wwnews\Domain\Model\Category $category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets the category
     *
     * @param \GG\Wwnews\Domain\Model\Category $category
     * @return void
     */
    public function setCategory(\GG\Wwnews\Domain\Model\Category $category)
    {
        $this->category = $category;
    }

    /**
     * @var \DateTime
     */
    protected $crdate = null;


    /**
     * Returns the creation date
     *
     * @return \DateTime $crdate
     */
    public function getCrdate()
    {
        return $this->crdate;
    }
}
