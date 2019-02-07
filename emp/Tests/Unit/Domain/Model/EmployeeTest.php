<?php
namespace F6\Emp\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author tanzil <tanzil@gmail.com>
 */
class EmployeeTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \F6\Emp\Domain\Model\Employee
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \F6\Emp\Domain\Model\Employee();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function setNameForStringSetsName()
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'name',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAgeReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getAge()
        );
    }

    /**
     * @test
     */
    public function setAgeForIntSetsAge()
    {
        $this->subject->setAge(12);

        self::assertAttributeEquals(
            12,
            'age',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getSalaryReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getSalary()
        );
    }

    /**
     * @test
     */
    public function setSalaryForIntSetsSalary()
    {
        $this->subject->setSalary(12);

        self::assertAttributeEquals(
            12,
            'salary',
            $this->subject
        );
    }
}
