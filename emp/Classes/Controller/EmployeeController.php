<?php
namespace F6\Emp\Controller;

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
 * EmployeeController
 */
class EmployeeController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * employeeRepository
     *
     * @var \F6\Emp\Domain\Repository\EmployeeRepository
     * @inject
     */
    protected $employeeRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $employees = $this->employeeRepository->findAll();
        $this->view->assign('employees', $employees);
    }

    /**
     * action show
     *
     * @param \F6\Emp\Domain\Model\Employee $employee
     * @return void
     */
    public function showAction(\F6\Emp\Domain\Model\Employee $employee)
    {
        $this->view->assign('employee', $employee);
    }

    /**
     * action new
     *
     * @return void
     */
    public function newAction()
    {

    }

    /**
     * action create
     *
     * @param \F6\Emp\Domain\Model\Employee $newEmployee
     * @return void
     */
    public function createAction(\F6\Emp\Domain\Model\Employee $newEmployee)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->employeeRepository->add($newEmployee);
        $this->redirect('list');
    }

    /**
     * action edit
     *
     * @param \F6\Emp\Domain\Model\Employee $employee
     * @ignorevalidation $employee
     * @return void
     */
    public function editAction(\F6\Emp\Domain\Model\Employee $employee)
    {
        $this->view->assign('employee', $employee);
    }

    /**
     * action update
     *
     * @param \F6\Emp\Domain\Model\Employee $employee
     * @return void
     */
    public function updateAction(\F6\Emp\Domain\Model\Employee $employee)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->employeeRepository->update($employee);
        $this->redirect('list');
    }

    /**
     * action delete
     *
     * @param \F6\Emp\Domain\Model\Employee $employee
     * @return void
     */
    public function deleteAction(\F6\Emp\Domain\Model\Employee $employee)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->employeeRepository->remove($employee);
        $this->redirect('list');
    }
}
