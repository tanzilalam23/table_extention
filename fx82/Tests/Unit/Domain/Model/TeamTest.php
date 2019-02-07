<?php
namespace F6\Fx82\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author tanzil <md_tanzil@ymail.com>
 */
class TeamTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \F6\Fx82\Domain\Model\Team
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \F6\Fx82\Domain\Model\Team();
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
    public function getPhoneNoReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getPhoneNo()
        );
    }

    /**
     * @test
     */
    public function setPhoneNoForIntSetsPhoneNo()
    {
        $this->subject->setPhoneNo(12);

        self::assertAttributeEquals(
            12,
            'phoneNo',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAddressReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAddress()
        );
    }

    /**
     * @test
     */
    public function setAddressForStringSetsAddress()
    {
        $this->subject->setAddress('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'address',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getCountryReturnsInitialValueForCountry()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getCountry()
        );
    }

    /**
     * @test
     */
    public function setCountryForObjectStorageContainingCountrySetsCountry()
    {
        $country = new \F6\Fx82\Domain\Model\Country();
        $objectStorageHoldingExactlyOneCountry = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneCountry->attach($country);
        $this->subject->setCountry($objectStorageHoldingExactlyOneCountry);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneCountry,
            'country',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addCountryToObjectStorageHoldingCountry()
    {
        $country = new \F6\Fx82\Domain\Model\Country();
        $countryObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $countryObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($country));
        $this->inject($this->subject, 'country', $countryObjectStorageMock);

        $this->subject->addCountry($country);
    }

    /**
     * @test
     */
    public function removeCountryFromObjectStorageHoldingCountry()
    {
        $country = new \F6\Fx82\Domain\Model\Country();
        $countryObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $countryObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($country));
        $this->inject($this->subject, 'country', $countryObjectStorageMock);

        $this->subject->removeCountry($country);
    }
}
