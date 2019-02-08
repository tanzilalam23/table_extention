<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Netzrezepte.Kidsregio',
            'Kids',
            [
                'Speaker' => 'list, show, new, create, edit, update, delete'
            ],
            // non-cacheable actions
            [
                'Speaker' => 'create, update, delete'
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    kids {
                        iconIdentifier = kidsregio-plugin-kids
                        title = LLL:EXT:kidsregio/Resources/Private/Language/locallang_db.xlf:tx_kidsregio_kids.name
                        description = LLL:EXT:kidsregio/Resources/Private/Language/locallang_db.xlf:tx_kidsregio_kids.description
                        tt_content_defValues {
                            CType = list
                            list_type = kidsregio_kids
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'kidsregio-plugin-kids',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:kidsregio/Resources/Public/Icons/user_plugin_kids.svg']
			);
		
    }
);
