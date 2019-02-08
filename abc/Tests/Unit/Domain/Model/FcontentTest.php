<?php
namespace Demo\Abc\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author tanzil <tanzil@gmail.com>
 */
class FcontentTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Demo\Abc\Domain\Model\Fcontent
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Demo\Abc\Domain\Model\Fcontent();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getTitleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTitle()
        );
    }

    /**
     * @test
     */
    public function setTitleForStringSetsTitle()
    {
        $this->subject->setTitle('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'title',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getSubtitleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getSubtitle()
        );
    }

    /**
     * @test
     */
    public function setSubtitleForStringSetsSubtitle()
    {
        $this->subject->setSubtitle('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'subtitle',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPriorityReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getPriority()
        );
    }

    /**
     * @test
     */
    public function setPriorityForIntSetsPriority()
    {
        $this->subject->setPriority(12);

        self::assertAttributeEquals(
            12,
            'priority',
            $this->subject
        );
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
}
