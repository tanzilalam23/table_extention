<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'F6.Emp',
            'Emp',
            'table'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('emp', 'Configuration/TypoScript', 'fx_employee');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_emp_domain_model_employee', 'EXT:emp/Resources/Private/Language/locallang_csh_tx_emp_domain_model_employee.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_emp_domain_model_employee');

    }
);
