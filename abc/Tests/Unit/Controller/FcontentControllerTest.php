<?php
namespace Demo\Abc\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author tanzil <tanzil@gmail.com>
 */
class FcontentControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Demo\Abc\Controller\FcontentController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Demo\Abc\Controller\FcontentController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllFcontentsFromRepositoryAndAssignsThemToView()
    {

        $allFcontents = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $fcontentRepository = $this->getMockBuilder(\Demo\Abc\Domain\Repository\FcontentRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $fcontentRepository->expects(self::once())->method('findAll')->will(self::returnValue($allFcontents));
        $this->inject($this->subject, 'fcontentRepository', $fcontentRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('fcontents', $allFcontents);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenFcontentToView()
    {
        $fcontent = new \Demo\Abc\Domain\Model\Fcontent();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('fcontent', $fcontent);

        $this->subject->showAction($fcontent);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenFcontentToFcontentRepository()
    {
        $fcontent = new \Demo\Abc\Domain\Model\Fcontent();

        $fcontentRepository = $this->getMockBuilder(\Demo\Abc\Domain\Repository\FcontentRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $fcontentRepository->expects(self::once())->method('add')->with($fcontent);
        $this->inject($this->subject, 'fcontentRepository', $fcontentRepository);

        $this->subject->createAction($fcontent);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenFcontentToView()
    {
        $fcontent = new \Demo\Abc\Domain\Model\Fcontent();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('fcontent', $fcontent);

        $this->subject->editAction($fcontent);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenFcontentInFcontentRepository()
    {
        $fcontent = new \Demo\Abc\Domain\Model\Fcontent();

        $fcontentRepository = $this->getMockBuilder(\Demo\Abc\Domain\Repository\FcontentRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $fcontentRepository->expects(self::once())->method('update')->with($fcontent);
        $this->inject($this->subject, 'fcontentRepository', $fcontentRepository);

        $this->subject->updateAction($fcontent);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenFcontentFromFcontentRepository()
    {
        $fcontent = new \Demo\Abc\Domain\Model\Fcontent();

        $fcontentRepository = $this->getMockBuilder(\Demo\Abc\Domain\Repository\FcontentRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $fcontentRepository->expects(self::once())->method('remove')->with($fcontent);
        $this->inject($this->subject, 'fcontentRepository', $fcontentRepository);

        $this->subject->deleteAction($fcontent);
    }
}
