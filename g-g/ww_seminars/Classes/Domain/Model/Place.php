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
 * Place
 */
class Place extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * city
     *
     * @var string
     */
    protected $city = '';

    /**
     * address
     *
     * @var string
     */
    protected $address = '';

    /**
     * tel
     *
     * @var string
     */
    protected $tel = '';

    /**
     * fax
     *
     * @var string
     */
    protected $fax = '';

    /**
     * email
     *
     * @var string
     */
    protected $email = '';

    /**
     * seminar
     *
     * @var array
     */
    protected $seminar = null;


    /**
     * Returns the city
     *
     * @return string $city
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Sets the city
     *
     * @param string $city
     * @return void
     */
    public function setCity(string $city)
    {
        $this->city = $city;
    }

    /**
     * Returns the address
     *
     * @return string $address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets the address
     *
     * @param string $address
     * @return void
     */
    public function setAddress(string $address)
    {
        $this->address = $address;
    }

    /**
     * Returns the tel
     *
     * @return string $tel
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Sets the tel
     *
     * @param string $tel
     * @return void
     */
    public function setTel(string $tel)
    {
        $this->tel = $tel;
    }

    /**
     * Returns the fax
     *
     * @return string $fax
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Sets the fax
     *
     * @param string $fax
     * @return void
     */
    public function setFax(string $fax)
    {
        $this->fax = $fax;
    }

    /**
     * Returns the email
     *
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets the email
     *
     * @param string $email
     * @return void
     */
    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    /**
     * Returns the Seminar
     *
     * @return array
     */
    public function getSeminar()
    {
        return $this->seminar;
    }

    /**
     * Sets the seminar
     *
     * @param array $seminar
     * @return void
     */
    public function setSeminar(array $seminar)
    {
        $this->seminar = $seminar;
    }
}
