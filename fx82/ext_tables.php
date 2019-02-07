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

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'F6.Fx82',
            'Fx83',
            'pubg'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('fx82', 'Configuration/TypoScript', 'Team');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_fx82_domain_model_team', 'EXT:fx82/Resources/Private/Language/locallang_csh_tx_fx82_domain_model_team.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_fx82_domain_model_team');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_fx82_domain_model_country', 'EXT:fx82/Resources/Private/Language/locallang_csh_tx_fx82_domain_model_country.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_fx82_domain_model_country');

    }
);
