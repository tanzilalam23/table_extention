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
 * CountryController
 */
class CountryController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * countryRepository
     *
     * @var \F6\Fx82\Domain\Repository\CountryRepository
     * @inject
     */
    protected $countryRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $countries = $this->countryRepository->findAll();
        $this->view->assign('countries', $countries);
    }

    /**
     * action show
     *
     * @param \F6\Fx82\Domain\Model\Country $country
     * @return void
     */
    public function showAction(\F6\Fx82\Domain\Model\Country $country)
    {
        $this->view->assign('country', $country);
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
     * @param \F6\Fx82\Domain\Model\Country $newCountry
     * @return void
     */
    public function createAction(\F6\Fx82\Domain\Model\Country $newCountry)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->countryRepository->add($newCountry);
        $this->redirect('list');
    }

    /**
     * action edit
     *
     * @param \F6\Fx82\Domain\Model\Country $country
     * @ignorevalidation $country
     * @return void
     */
    public function editAction(\F6\Fx82\Domain\Model\Country $country)
    {
        $this->view->assign('country', $country);
    }

    /**
     * action update
     *
     * @param \F6\Fx82\Domain\Model\Country $country
     * @return void
     */
    public function updateAction(\F6\Fx82\Domain\Model\Country $country)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->countryRepository->update($country);
        $this->redirect('list');
    }

    /**
     * action delete
     *
     * @param \F6\Fx82\Domain\Model\Country $country
     * @return void
     */
    public function deleteAction(\F6\Fx82\Domain\Model\Country $country)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->countryRepository->remove($country);
        $this->redirect('list');
    }
}
