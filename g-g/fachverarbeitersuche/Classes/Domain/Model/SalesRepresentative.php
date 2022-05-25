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
 * SalesRepresentative
 */
class SalesRepresentative extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * name
     *
     * @var string
     */
    protected $name = '';

    /**
     * plz
     *
     * @var string
     */
    protected $plz = '';

    /**
     * region
     *
     * @var string
     */
    protected $region = '';

    /**
     * anschreiben
     *
     * @var string
     */
    protected $anschreiben = '';

    /**
     * mobil
     *
     * @var string
     */
    protected $mobil = '';

    /**
     * email
     *
     * @var string
     */
    protected $email = '';

    /**
     * Returns the name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName(string $name)
    {
        $this->name = $name;
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
     * Returns the region
     *
     * @return string $region
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Sets the region
     *
     * @param string $region
     * @return void
     */
    public function setRegion(string $region)
    {
        $this->region = $region;
    }

    /**
     * Returns the anschreiben
     *
     * @return string $anschreiben
     */
    public function getAnschreiben()
    {
        return $this->anschreiben;
    }

    /**
     * Sets the anschreiben
     *
     * @param string $anschreiben
     * @return void
     */
    public function setAnschreiben(string $anschreiben)
    {
        $this->anschreiben = $anschreiben;
    }

    /**
     * Returns the mobil
     *
     * @return string $mobil
     */
    public function getMobil()
    {
        return $this->mobil;
    }

    /**
     * Sets the mobil
     *
     * @param string $mobil
     * @return void
     */
    public function setMobil(string $mobil)
    {
        $this->mobil = $mobil;
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
}
