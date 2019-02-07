<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'F6.Fx82',
            'Fx82',
            [
                'Team' => 'list, show, new, create, edit, update, delete',
                'Country' => 'list, show, new, create, edit, update, delete'
            ],
            // non-cacheable actions
            [
                'Team' => 'create, update, delete',
                'Country' => 'create, update, delete'
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    fx82 {
                        iconIdentifier = fx82-plugin-fx82
                        title = LLL:EXT:fx82/Resources/Private/Language/locallang_db.xlf:tx_fx82_fx82.name
                        description = LLL:EXT:fx82/Resources/Private/Language/locallang_db.xlf:tx_fx82_fx82.description
                        tt_content_defValues {
                            CType = list
                            list_type = fx82_fx82
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'fx82-plugin-fx82',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:fx82/Resources/Public/Icons/user_plugin_fx82.svg']
			);
		
    }
);
