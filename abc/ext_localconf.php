<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Demo.Abc',
            'Xen',
            [
                'Fcontent' => 'list, show, new, create, edit, update, delete'
            ],
            // non-cacheable actions
            [
                'Fcontent' => 'create, update, delete'
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    xen {
                        iconIdentifier = abc-plugin-xen
                        title = LLL:EXT:abc/Resources/Private/Language/locallang_db.xlf:tx_abc_xen.name
                        description = LLL:EXT:abc/Resources/Private/Language/locallang_db.xlf:tx_abc_xen.description
                        tt_content_defValues {
                            CType = list
                            list_type = abc_xen
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'abc-plugin-xen',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:abc/Resources/Public/Icons/user_plugin_xen.svg']
			);
		
    }
);
