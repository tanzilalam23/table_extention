<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Netzrezepte.Kidsregio',
            'Kids',
            'speaker'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('kidsregio', 'Configuration/TypoScript', 'speaker');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_kidsregio_domain_model_speaker', 'EXT:kidsregio/Resources/Private/Language/locallang_csh_tx_kidsregio_domain_model_speaker.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_kidsregio_domain_model_speaker');

    }
);
