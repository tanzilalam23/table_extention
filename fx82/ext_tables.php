<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'F6.Fx82',
            'Fx82',
            'IGI'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('fx82', 'Configuration/TypoScript', 'Team');

    }
);
