<?php
namespace F6\Emp\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author tanzil <tanzil@gmail.com>
 */
class EmployeeControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \F6\Emp\Controller\EmployeeController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\F6\Emp\Controller\EmployeeController::class)
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
    public function listActionFetchesAllEmployeesFromRepositoryAndAssignsThemToView()
    {

        $allEmployees = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $employeeRepository = $this->getMockBuilder(\F6\Emp\Domain\Repository\EmployeeRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $employeeRepository->expects(self::once())->method('findAll')->will(self::returnValue($allEmployees));
        $this->inject($this->subject, 'employeeRepository', $employeeRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('employees', $allEmployees);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenEmployeeToView()
    {
        $employee = new \F6\Emp\Domain\Model\Employee();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('employee', $employee);

        $this->subject->showAction($employee);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenEmployeeToEmployeeRepository()
    {
        $employee = new \F6\Emp\Domain\Model\Employee();

        $employeeRepository = $this->getMockBuilder(\F6\Emp\Domain\Repository\EmployeeRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $employeeRepository->expects(self::once())->method('add')->with($employee);
        $this->inject($this->subject, 'employeeRepository', $employeeRepository);

        $this->subject->createAction($employee);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenEmployeeToView()
    {
        $employee = new \F6\Emp\Domain\Model\Employee();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('employee', $employee);

        $this->subject->editAction($employee);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenEmployeeInEmployeeRepository()
    {
        $employee = new \F6\Emp\Domain\Model\Employee();

        $employeeRepository = $this->getMockBuilder(\F6\Emp\Domain\Repository\EmployeeRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $employeeRepository->expects(self::once())->method('update')->with($employee);
        $this->inject($this->subject, 'employeeRepository', $employeeRepository);

        $this->subject->updateAction($employee);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenEmployeeFromEmployeeRepository()
    {
        $employee = new \F6\Emp\Domain\Model\Employee();

        $employeeRepository = $this->getMockBuilder(\F6\Emp\Domain\Repository\EmployeeRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $employeeRepository->expects(self::once())->method('remove')->with($employee);
        $this->inject($this->subject, 'employeeRepository', $employeeRepository);

        $this->subject->deleteAction($employee);
    }
}
