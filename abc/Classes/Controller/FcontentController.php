<?php
namespace Demo\Abc\Controller;

/***
 *
 * This file is part of the "fx_content" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 tanzil <tanzil@gmail.com>, F6
 *
 ***/

/**
 * FcontentController
 */
class FcontentController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * fcontentRepository
     *
     * @var \Demo\Abc\Domain\Repository\FcontentRepository
     * @inject
     */
    protected $fcontentRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $fcontents = $this->fcontentRepository->findAll();
        $this->view->assign('fcontents', $fcontents);
    }

    /**
     * action show
     *
     * @param \Demo\Abc\Domain\Model\Fcontent $fcontent
     * @return void
     */
    public function showAction(\Demo\Abc\Domain\Model\Fcontent $fcontent)
    {
        $this->view->assign('fcontent', $fcontent);
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
     * @param \Demo\Abc\Domain\Model\Fcontent $newFcontent
     * @return void
     */
    public function createAction(\Demo\Abc\Domain\Model\Fcontent $newFcontent)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->fcontentRepository->add($newFcontent);
        $this->redirect('list');
    }

    /**
     * action edit
     *
     * @param \Demo\Abc\Domain\Model\Fcontent $fcontent
     * @ignorevalidation $fcontent
     * @return void
     */
    public function editAction(\Demo\Abc\Domain\Model\Fcontent $fcontent)
    {
        $this->view->assign('fcontent', $fcontent);
    }

    /**
     * action update
     *
     * @param \Demo\Abc\Domain\Model\Fcontent $fcontent
     * @return void
     */
    public function updateAction(\Demo\Abc\Domain\Model\Fcontent $fcontent)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->fcontentRepository->update($fcontent);
        $this->redirect('list');
    }

    /**
     * action delete
     *
     * @param \Demo\Abc\Domain\Model\Fcontent $fcontent
     * @return void
     */
    public function deleteAction(\Demo\Abc\Domain\Model\Fcontent $fcontent)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->fcontentRepository->remove($fcontent);
        $this->redirect('list');
    }
}
