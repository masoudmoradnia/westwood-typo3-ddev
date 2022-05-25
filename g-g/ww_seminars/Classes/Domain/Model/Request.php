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
 * Request
 */
class Request extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * seminar
     *
     * @var \GG\WwSeminars\Domain\Model\Seminar
     */
    protected $seminar = null;

    /**
     * firma
     *
     * @var string
     */
    protected $firma = '';

    /**
     * strasse
     *
     * @var string
     */
    protected $strasse = '';

    /**
     * plz
     *
     * @var string
     */
    protected $plz = '';

    /**
     * ort
     *
     * @var string
     */
    protected $ort = '';

    /**
     * telefon
     *
     * @var string
     */
    protected $telefon = '';

    /**
     * telefax
     *
     * @var string
     */
    protected $telefax = '';

    /**
     * email
     *
     * @var string
     */
    protected $email = '';

    /**
     * ansprechpartner
     *
     * @var string
     */
    protected $ansprechpartner = '';

    /**
     * personen
     *
     * @var string
     */
    protected $personen = '';

    /**
     * Returns the seminar
     *
     * @return \GG\WwSeminars\Domain\Model\Seminar $seminar
     */
    public function getSeminar()
    {
        return $this->seminar;
    }

    /**
     * Sets the seminar
     *
     * @param \GG\WwSeminars\Domain\Model\Seminar $seminar
     * @return void
     */
    public function setSeminar(\GG\WwSeminars\Domain\Model\Seminar $seminar)
    {
        $this->seminar = $seminar;
    }

    /**
     * Returns the firma
     *
     * @return string $firma
     */
    public function getFirma()
    {
        return $this->firma;
    }

    /**
     * Sets the firma
     *
     * @param string $firma
     * @return void
     */
    public function setFirma(string $firma)
    {
        $this->firma = $firma;
    }

    /**
     * Returns the strasse
     *
     * @return string $strasse
     */
    public function getStrasse()
    {
        return $this->strasse;
    }

    /**
     * Sets the strasse
     *
     * @param string $strasse
     * @return void
     */
    public function setStrasse(string $strasse)
    {
        $this->strasse = $strasse;
    }

    /**
     * Returns the plz
     *
     * @return string $plz
     */
    public function getPlz()
    {
        return $this->plz;
    }

    /**
     * Sets the plz
     *
     * @param string $plz
     * @return void
     */
    public function setPlz(string $plz)
    {
        $this->plz = $plz;
    }

    /**
     * Returns the ort
     *
     * @return string $ort
     */
    public function getOrt()
    {
        return $this->ort;
    }

    /**
     * Sets the ort
     *
     * @param string $ort
     * @return void
     */
    public function setOrt(string $ort)
    {
        $this->ort = $ort;
    }

    /**
     * Returns the telefon
     *
     * @return string $telefon
     */
    public function getTelefon()
    {
        return $this->telefon;
    }

    /**
     * Sets the telefon
     *
     * @param string $telefon
     * @return void
     */
    public function setTelefon(string $telefon)
    {
        $this->telefon = $telefon;
    }

    /**
     * Returns the telefax
     *
     * @return string $telefax
     */
    public function getTelefax()
    {
        return $this->telefax;
    }

    /**
     * Sets the telefax
     *
     * @param string $telefax
     * @return void
     */
    public function setTelefax(string $telefax)
    {
        $this->telefax = $telefax;
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
     * Returns the ansprechpartner
     *
     * @return string $ansprechpartner
     */
    public function getAnsprechpartner()
    {
        return $this->ansprechpartner;
    }

    /**
     * Sets the ansprechpartner
     *
     * @param string $ansprechpartner
     * @return void
     */
    public function setAnsprechpartner(string $ansprechpartner)
    {
        $this->ansprechpartner = $ansprechpartner;
    }

    /**
     * Returns the personen
     *
     * @return string $personen
     */
    public function getPersonen()
    {
        return $this->personen;
    }

    /**
     * Sets the personen
     *
     * @param string $personen
     * @return void
     */
    public function setPersonen(string $personen)
    {
        $this->personen = $personen;
    }
}
