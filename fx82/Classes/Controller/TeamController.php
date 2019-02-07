<?php
namespace F6\Fx82\Controller;

/***
 *
 * This file is part of the "Team" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 tanzil <md_tanzil@ymail.com>, F6
 *
 ***/

/**
 * TeamController
 */
class TeamController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * teamRepository
     *
     * @var \F6\Fx82\Domain\Repository\TeamRepository
     * @inject
     */
    protected $teamRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $teams = $this->teamRepository->findAll();
        $this->view->assign('teams', $teams);
    }

    /**
     * action show
     *
     * @param \F6\Fx82\Domain\Model\Team $team
     * @return void
     */
    public function showAction(\F6\Fx82\Domain\Model\Team $team)
    {
        $this->view->assign('team', $team);
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
     * @param \F6\Fx82\Domain\Model\Team $newTeam
     * @return void
     */
    public function createAction(\F6\Fx82\Domain\Model\Team $newTeam)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->teamRepository->add($newTeam);
        $this->redirect('list');
    }

    /**
     * action edit
     *
     * @param \F6\Fx82\Domain\Model\Team $team
     * @ignorevalidation $team
     * @return void
     */
    public function editAction(\F6\Fx82\Domain\Model\Team $team)
    {
        $this->view->assign('team', $team);
    }

    /**
     * action update
     *
     * @param \F6\Fx82\Domain\Model\Team $team
     * @return void
     */
    public function updateAction(\F6\Fx82\Domain\Model\Team $team)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->teamRepository->update($team);
        $this->redirect('list');
    }

    /**
     * action delete
     *
     * @param \F6\Fx82\Domain\Model\Team $team
     * @return void
     */
    public function deleteAction(\F6\Fx82\Domain\Model\Team $team)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->teamRepository->remove($team);
        $this->redirect('list');
    }
}
