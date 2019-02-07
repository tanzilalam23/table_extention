<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Demo.Abc',
            'Xen',
            'tab11'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('abc', 'Configuration/TypoScript', 'fx_content');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_abc_domain_model_fcontent', 'EXT:abc/Resources/Private/Language/locallang_csh_tx_abc_domain_model_fcontent.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_abc_domain_model_fcontent');

    }
);
