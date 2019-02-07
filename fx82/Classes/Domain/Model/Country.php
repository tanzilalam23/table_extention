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
 * Country
 */
class Country extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * country
     *
     * @var string
     */
    protected $country = '';

    /**
     * Returns the country
     *
     * @return string $country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets the country
     *
     * @param string $country
     * @return void
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }
}
