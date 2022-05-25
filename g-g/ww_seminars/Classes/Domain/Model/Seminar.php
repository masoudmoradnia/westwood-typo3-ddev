<?php

declare(strict_types=1);

namespace GG\WwSeminars\Domain\Model;


/**
 * This file is part of the "Seminare" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2021 Masoud Moradnia <masoud.moradnia@graphic-group.de>, Graphic Group Mensch&Medien GmbH
 */

/**
 * Seminar
 */
class Seminar extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * title
     *
     * @var string
     */
    protected $title = '';

    /**
     * description
     *
     * @var string
     */
    protected $description = '';

    /**
     * date
     *
     * @var \DateTime
     */
    protected $date = null;

    /**
     * agenda
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $agenda = null;

    /**
     * application
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $application = null;

    /**
     * place
     *
     * @var \GG\WwSeminars\Domain\Model\Place
     */
    protected $place = null;

    /**
     * category
     *
     * @var \GG\WwSeminars\Domain\Model\Category
     */
    protected $category = null;

    /**
     * bookedup
     *
     * @var int bookedup
     */
    protected $bookedup = false;


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
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    /**
     * Returns the date
     *
     * @return \DateTime $date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets the date
     *
     * @param \DateTime $date
     * @return void
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;
    }

    /**
     * Returns the agenda
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $agenda
     */
    public function getAgenda()
    {
        return $this->agenda;
    }

    /**
     * Sets the agenda
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $agenda
     * @return void
     */
    public function setAgenda(\TYPO3\CMS\Extbase\Domain\Model\FileReference $agenda)
    {
        $this->agenda = $agenda;
    }

    /**
     * Returns the application
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $application
     */
    public function getApplication()
    {
        return $this->application;
    }

    /**
     * Sets the application
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $application
     * @return void
     */
    public function setApplication(\TYPO3\CMS\Extbase\Domain\Model\FileReference $application)
    {
        $this->application = $application;
    }

    /**
     * Returns the place
     *
     * @return \GG\WwSeminars\Domain\Model\Place $place
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Sets the place
     *
     * @param \GG\WwSeminars\Domain\Model\Place $place
     * @return void
     */
    public function setPlace(\GG\WwSeminars\Domain\Model\Place $place)
    {
        $this->place = $place;
    }

    /**
     * Returns the category
     *
     * @return \GG\WwSeminars\Domain\Model\Category $category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets the category
     *
     * @param \GG\WwSeminars\Domain\Model\Category $category
     * @return void
     */
    public function setCategory(\GG\WwSeminars\Domain\Model\Category $category)
    {
        $this->category = $category;
    }

     /**
     * Returns the bookedup
     *
     * @return int $bookedup
     */
    public function getBookedup()
    {
        return $this->bookedup;
    }

    /**
     * Sets the bookedup
     *
     * @param string $bookedup
     * @return void
     */
    public function setBookedup(int $bookedup)
    {
        $this->bookedup = $bookedup;
    }
}
