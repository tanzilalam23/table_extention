<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'F6.Emp',
            'Emp',
            [
                'Employee' => 'list, show, new, create, edit, update, delete'
            ],
            // non-cacheable actions
            [
                'Employee' => 'create, update, delete'
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    emp {
                        iconIdentifier = emp-plugin-emp
                        title = LLL:EXT:emp/Resources/Private/Language/locallang_db.xlf:tx_emp_emp.name
                        description = LLL:EXT:emp/Resources/Private/Language/locallang_db.xlf:tx_emp_emp.description
                        tt_content_defValues {
                            CType = list
                            list_type = emp_emp
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'emp-plugin-emp',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:emp/Resources/Public/Icons/user_plugin_emp.svg']
			);
		
    }
);
