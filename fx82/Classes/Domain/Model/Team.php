<?php
namespace F6\Fx82\Domain\Model;

/***
 *
 * This file is part of the "Team" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 tanzil <md_tanzil@ymail.com>, F6
 *
 ***/

/**
 * Team
 */
class Team extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * name
     *
     * @var string
     */
    protected $name = '';

    /**
     * age
     *
     * @var int
     */
    protected $age = 0;

    /**
     * phoneNo
     *
     * @var int
     */
    protected $phoneNo = 0;

    /**
     * address
     *
     * @var string
     */
    protected $address = '';

    /**
     * country
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\F6\Fx82\Domain\Model\Country>
     */
    protected $country = null;

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
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Returns the age
     *
     * @return int $age
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Sets the age
     *
     * @param int $age
     * @return void
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * Returns the phoneNo
     *
     * @return int $phoneNo
     */
    public function getPhoneNo()
    {
        return $this->phoneNo;
    }

    /**
     * Sets the phoneNo
     *
     * @param int $phoneNo
     * @return void
     */
    public function setPhoneNo($phoneNo)
    {
        $this->phoneNo = $phoneNo;
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
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->country = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Country
     *
     * @param \F6\Fx82\Domain\Model\Country $country
     * @return void
     */
    public function addCountry(\F6\Fx82\Domain\Model\Country $country)
    {
        $this->country->attach($country);
    }

    /**
     * Removes a Country
     *
     * @param \F6\Fx82\Domain\Model\Country $countryToRemove The Country to be removed
     * @return void
     */
    public function removeCountry(\F6\Fx82\Domain\Model\Country $countryToRemove)
    {
        $this->country->detach($countryToRemove);
    }

    /**
     * Returns the country
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\F6\Fx82\Domain\Model\Country> $country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets the country
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\F6\Fx82\Domain\Model\Country> $country
     * @return void
     */
    public function setCountry(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $country)
    {
        $this->country = $country;
    }
}
