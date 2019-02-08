<?php
namespace Netzrezepte\Kidsregio\Controller;

/***
 *
 * This file is part of the "speaker" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 aftab <aftab2512@gmail.com>, Fortress 6
 *
 ***/

/**
 * SpeakerController
 */
class SpeakerController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * speakerRepository
     *
     * @var \Netzrezepte\Kidsregio\Domain\Repository\SpeakerRepository
     * @inject
     */
    protected $speakerRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $speakers = $this->speakerRepository->findAll();
        $this->view->assign('speakers', $speakers);
    }

    /**
     * action show
     *
     * @param \Netzrezepte\Kidsregio\Domain\Model\Speaker $speaker
     * @return void
     */
    public function showAction(\Netzrezepte\Kidsregio\Domain\Model\Speaker $speaker)
    {
        $this->view->assign('speaker', $speaker);
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
     * @param \Netzrezepte\Kidsregio\Domain\Model\Speaker $newSpeaker
     * @return void
     */
    public function createAction(\Netzrezepte\Kidsregio\Domain\Model\Speaker $newSpeaker)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->speakerRepository->add($newSpeaker);
        $this->redirect('list');
    }

    /**
     * action edit
     *
     * @param \Netzrezepte\Kidsregio\Domain\Model\Speaker $speaker
     * @ignorevalidation $speaker
     * @return void
     */
    public function editAction(\Netzrezepte\Kidsregio\Domain\Model\Speaker $speaker)
    {
        $this->view->assign('speaker', $speaker);
    }

    /**
     * action update
     *
     * @param \Netzrezepte\Kidsregio\Domain\Model\Speaker $speaker
     * @return void
     */
    public function updateAction(\Netzrezepte\Kidsregio\Domain\Model\Speaker $speaker)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->speakerRepository->update($speaker);
        $this->redirect('list');
    }

    /**
     * action delete
     *
     * @param \Netzrezepte\Kidsregio\Domain\Model\Speaker $speaker
     * @return void
     */
    public function deleteAction(\Netzrezepte\Kidsregio\Domain\Model\Speaker $speaker)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->speakerRepository->remove($speaker);
        $this->redirect('list');
    }
}
