<?php

declare(strict_types=1);

namespace GG\Fachverarbeitersuche\Domain\Model;

/**
 * This file is part of the "Fachverarbeitersuche" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2021 Masoud Moradnia <masoud.moradnia@graphic-group.de>, Graphic Group Mensch und Media GmbH
 */

/**
 * Requests
 */
class Requests extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * address
     *
     * @var string
     */
    protected $address = '';

    /**
     * zip
     *
     * @var string
     */
    protected $zip = '';

    /**
     * contactperson
     *
     * @var  \GG\Fachverarbeitersuche\Domain\Model\SalesRepresentative
     */
    protected $contactperson = null;

 

    /**
     * applicationarea
     *
     * @var string
     */
    protected $applicationarea = '';

    /**
     * ramp
     *
     * @var string
     */
    protected $ramp = '';

    /**
     * stairway
     *
     * @var string
     */
    protected $stairway = '';

    /**
     * parking
     *
     * @var string
     */
    protected $parking = '';

    /**
     * topdeck
     *
     * @var string
     */
    protected $topdeck = '';

    /**
     * betweendeck
     *
     * @var string
     */
    protected $betweendeck = '';

    /**
     * balkon
     *
     * @var string
     */
    protected $balkon = '';

    /**
     * arcade
     *
     * @var string
     */
    protected $arcade  = '';

    /**
     * terrasse
     *
     * @var string
     */
    protected $terrasse  = '';

    /**
     * dachkuppel
     *
     * @var string
     */
    protected $dachkuppel  = '';

    /**
     * flachdach
     *
     * @var string
     */
    protected $flachdach  = '';

    /**
     * dachterasse
     *
     * @var string
     */
    protected $dachterasse  = '';

    /**
     * keller
     *
     * @var string
     */
    protected $keller  = '';

    /**
     * konstruktion
     *
     * @var string
     */
    protected $konstruktion  = '';

    /**
     * sonder
     *
     * @var string
     */
    protected $sonder  = '';

    /**
     * betonfuge
     *
     * @var string
     */
    protected $betonfuge  = '';

    /**
     * betonfahrbahntafel
     *
     * @var string
     */
    protected $betonfahrbahntafel  = '';

    /**
     * brueckenkappe
     *
     * @var string
     */
    protected $brueckenkappe  = '';

    /**
     * stahlbruecke
     *
     * @var string
     */
    protected $stahlbruecke  = '';

    /**
     * trogbauwerk
     *
     * @var string
     */
    protected $trogbauwerk  = '';

    /**
     * area
     *
     * @var string
     */
    protected $area = '';

    /**
     * email
     *
     * @var string
     */
    protected $email = '';

    /**
     * title
     *
     * @var string
     */
    protected $title = '';

    /**
     * firstname
     *
     * @var string
     */
    protected $firstname = '';

    /**
     * lastname
     *
     * @var string
     */
    protected $lastname = '';

    /**
     * tel
     *
     * @var string
     */
    protected $tel = '';

    /**
     * message
     *
     * @var string
     */
    protected $message = '';

    /**
     * @var \DateTime
     */
    protected $crdate = null;




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
     * Returns the zip
     *
     * @return string $zip
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Sets the zip
     *
     * @param string $zip
     * @return void
     */
    public function setZip(string $zip)
    {
        $this->zip = $zip;
    }


    /**
     * Returns the contactperson
     *
     * @return \ GG\Fachverarbeitersuche\Domain\Model\SalesRepresentative $contactperson
     */
    public function getContactperson()
    {
        return $this->contactperson;
    }

    /**
     * Sets the contactperson
     *
     * @param \ GG\Fachverarbeitersuche\Domain\Model\SalesRepresentative $contactperson
     * @return void
     */
    public function setContactperson(\ GG\Fachverarbeitersuche\Domain\Model\SalesRepresentative $contactperson)
    {
        $this->contactperson = $contactperson;
    }

    

    /**
     * Returns the applicationarea
     *
     * @return string $applicationarea
     */
    public function getApplicationarea()
    {
        return $this->applicationarea;
    }

    /**
     * Sets the applicationarea
     *
     * @param string $applicationarea
     * @return void
     */
    public function setApplicationarea(string $applicationarea)
    {
        $this->applicationarea = $applicationarea;
    }

    /**
     * Returns the ramp
     *
     * @return string $ramp
     */
    public function getRamp()
    {
        return $this->ramp;
    }

    /**
     * Sets the ramp
     *
     * @param string $ramp
     * @return void
     */
    public function setRamp(string $ramp)
    {
        $this->ramp = $ramp;
    }

    /**
     * Returns the stairway
     *
     * @return string $stairway
     */
    public function getStairway()
    {
        return $this->stairway;
    }

    /**
     * Sets the stairway
     *
     * @param string $stairway
     * @return void
     */
    public function setStairway(string $stairway)
    {
        $this->stairway = $stairway;
    }

    /**
     * Returns the parking
     *
     * @return string $parking
     */
    public function getParking()
    {
        return $this->parking;
    }

    /**
     * Sets the parking
     *
     * @param string $parking
     * @return void
     */
    public function setParking(string $parking)
    {
        $this->parking = $parking;
    }

    /**
     * Returns the topdeck
     *
     * @return string $topdeck
     */
    public function getTopdeck()
    {
        return $this->topdeck;
    }

    /**
     * Sets the topdeck
     *
     * @param string $topdeck
     * @return void
     */
    public function setTopdeck(string $topdeck)
    {
        $this->topdeck = $topdeck;
    }

    /**
     * Returns the betweendeck
     *
     * @return string $betweendeck
     */
    public function getBetweendeck()
    {
        return $this->betweendeck;
    }

    /**
     * Sets the betweendeck
     *
     * @param string $betweendeck
     * @return void
     */
    public function setBetweendeck(string $betweendeck)
    {
        $this->betweendeck = $betweendeck;
    }

    /**
     * Returns the Balkon
     *
     * @return string $balkon
     */
    public function getBalkon()
    {
        return $this->balkon;
    }

    /**
     * Sets the Balkon
     *
     * @param string $balkon
     * @return void
     */
    public function setBalkon(string $balkon)
    {
        $this->balkon = $balkon;
    }

    /**
     * Returns the Arcade
     *
     * @return string $arcade
     */
    public function getArcade()
    {
        return $this->arcade;
    }

    /**
     * Sets the arcade
     *
     * @param string $arcade
     * @return void
     */
    public function setArcade(string $arcade)
    {
        $this->arcade = $arcade;
    }
    /**
     * Returns the Terrasse
     *
     * @return string $terrasse
     */
    public function getTerrasse()
    {
        return $this->terrasse;
    }

    /**
     * Sets the terrasse
     *
     * @param string $terrasse
     * @return void
     */
    public function setTerrasse(string $terrasse)
    {
        $this->terrasse = $terrasse;
    }

    /**
     * Returns the betonfahrbahntafel
     *
     * @return string $betonfahrbahntafel
     */
    public function getBetonfahrbahntafel()
    {
        return $this->betonfahrbahntafel;
    }

    /**
     * Sets the betonfahrbahntafel
     *
     * @param string $betonfahrbahntafel
     * @return void
     */
    public function setBetonfahrbahntafel(string $betonfahrbahntafel)
    {
        $this->betonfahrbahntafel = $betonfahrbahntafel;
    }


    /**
     * Returns the brueckenkappe
     *
     * @return string $brueckenkappe
     */
    public function getBrueckenkappe()
    {
        return $this->brueckenkappe;
    }

    /**
     * Sets the brueckenkappe
     *
     * @param string $brueckenkappe
     * @return void
     */
    public function setBrueckenkappe(string $brueckenkappe)
    {
        $this->brueckenkappe = $brueckenkappe;
    }

    /**
     * Returns the stahlbruecke
     *
     * @return string $stahlbruecke
     */
    public function getStahlbruecke()
    {
        return $this->stahlbruecke;
    }

    /**
     * Sets the stahlbruecke
     *
     * @param string $stahlbruecke
     * @return void
     */
    public function setStahlbruecke(string $stahlbruecke)
    {
        $this->stahlbruecke = $stahlbruecke;
    }

    /**
     * Returns the trogbauwerk
     *
     * @return string $trogbauwerk
     */
    public function getTrogbauwerk()
    {
        return $this->trogbauwerk;
    }

    /**
     * Sets the trogbauwerk
     *
     * @param string $trogbauwerk
     * @return void
     */
    public function setTrogbauwerk(string $trogbauwerk)
    {
        $this->trogbauwerk = $trogbauwerk;
    }

    /**
     * Returns the area
     *
     * @return string $area
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Sets the area
     *
     * @param string $area
     * @return void
     */
    public function setArea(string $area)
    {
        $this->area = $area;
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
     * Returns the firstname
     *
     * @return string $firstname
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Sets the firstname
     *
     * @param string $firstname
     * @return void
     */
    public function setFirstname(string $firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * Returns the lastname
     *
     * @return string $lastname
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Sets the lastname
     *
     * @param string $lastname
     * @return void
     */
    public function setLastname(string $lastname)
    {
        $this->lastname = $lastname;
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
     * Returns the message
     *
     * @return string $message
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Sets the message
     *
     * @param string $message
     * @return void
     */
    public function setMessage(string $message)
    {
        $this->message = $message;
    }
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
     * Returns the dachkuppel
     *
     * @return string $dachkuppel
     */
    public function getDachkuppel()
    {
        return $this->dachkuppel;
    }

    /**
     * Sets the dachkuppel
     *
     * @param string $dachkuppel
     * @return void
     */
    public function setDachkuppel(string $dachkuppel)
    {
        $this->dachkuppel = $dachkuppel;
    }

    /**
     * Returns the flachdach
     *
     * @return string $flachdach
     */
    public function getFlachdach()
    {
        return $this->flachdach;
    }

    /**
     * Sets the flachdach
     *
     * @param string $flachdach
     * @return void
     */
    public function setFlachdach(string $flachdach)
    {
        $this->flachdach = $flachdach;
    }

    /**
     * Returns the dachterasse
     *
     * @return string $dachterasse
     */
    public function getDachterasse()
    {
        return $this->dachterasse;
    }

    /**
     * Sets the dachterasse
     *
     * @param string $dachterasse
     * @return void
     */
    public function setDachterasse(string $dachterasse)
    {
        $this->dachterasse = $dachterasse;
    }

    /**
     * Returns the keller
     *
     * @return string $keller
     */
    public function getKeller()
    {
        return $this->keller;
    }

    /**
     * Sets the keller
     *
     * @param string $keller
     * @return void
     */
    public function setKeller(string $keller)
    {
        $this->keller = $keller;
    }

    /**
     * Returns the konstruktion
     *
     * @return string $konstruktion
     */
    public function getKonstruktion()
    {
        return $this->konstruktion;
    }

    /**
     * Sets the konstruktion
     *
     * @param string $konstruktion
     * @return void
     */
    public function setKonstruktion(string $konstruktion)
    {
        $this->konstruktion = $konstruktion;
    }

    /**
     * Returns the sonder
     *
     * @return string $sonder
     */
    public function getSonder()
    {
        return $this->sonder;
    }

    /**
     * Sets the sonder
     *
     * @param string $sonder
     * @return void
     */
    public function setSonder(string $sonder)
    {
        $this->sonder = $sonder;
    }

    /**
     * Returns the betonfuge
     *
     * @return string $betonfuge
     */
    public function getBetonfuge()
    {
        return $this->betonfuge;
    }

    /**
     * Sets the betonfuge
     *
     * @param string $betonfuge
     * @return void
     */
    public function setBetonfuge(string $betonfuge)
    {
        $this->betonfuge = $betonfuge;
    }

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
