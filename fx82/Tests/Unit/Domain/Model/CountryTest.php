<?php
namespace F6\Fx82\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author tanzil <md_tanzil@ymail.com>
 */
class CountryTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \F6\Fx82\Domain\Model\Country
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \F6\Fx82\Domain\Model\Country();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getCountryReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getCountry()
        );
    }

    /**
     * @test
     */
    public function setCountryForStringSetsCountry()
    {
        $this->subject->setCountry('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'country',
            $this->subject
        );
    }
}
