<?php
namespace F6\Emp\Domain\Model;

/***
 *
 * This file is part of the "fx_employee" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 tanzil <tanzil@gmail.com>, F6
 *
 ***/

/**
 * Employee
 */
class Employee extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
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
     * salary
     *
     * @var int
     */
    protected $salary = 0;

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
     * Returns the salary
     *
     * @return int $salary
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * Sets the salary
     *
     * @param int $salary
     * @return void
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
}
