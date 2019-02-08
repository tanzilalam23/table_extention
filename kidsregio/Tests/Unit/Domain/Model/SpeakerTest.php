<?php
namespace Netzrezepte\Kidsregio\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author aftab <aftab2512@gmail.com>
 */
class SpeakerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Netzrezepte\Kidsregio\Domain\Model\Speaker
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Netzrezepte\Kidsregio\Domain\Model\Speaker();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getImageReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getImage()
        );
    }

    /**
     * @test
     */
    public function setImageForFileReferenceSetsImage()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setImage($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'image',
            $this->subject
        );
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
    public function getDescriptionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDescription()
        );
    }

    /**
     * @test
     */
    public function setDescriptionForStringSetsDescription()
    {
        $this->subject->setDescription('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'description',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getCountryReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getCountry()
        );
    }

    /**
     * @test
     */
    public function setCountryForFileReferenceSetsCountry()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setCountry($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'country',
            $this->subject
        );
    }
}
