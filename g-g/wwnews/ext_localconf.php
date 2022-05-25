<?php
defined('TYPO3_MODE') || die();

call_user_func(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Wwnews',
        'Shortlist',
        [
            \GG\Wwnews\Controller\NewsItemController::class => 'shortlist, show',
            \GG\Wwnews\Controller\CategoryController::class => 'list',
            \GG\Wwnews\Controller\AplicationAreaController::class => 'list'
        ],
        // non-cacheable actions
        [
            \GG\Wwnews\Controller\NewsItemController::class => 'shortlist, show',
            \GG\Wwnews\Controller\CategoryController::class => 'list',
            \GG\Wwnews\Controller\AplicationAreaController::class => 'list'
        ]
    );

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Wwnews',
        'List',
        [
            \GG\Wwnews\Controller\NewsItemController::class => 'list, show',
            \GG\Wwnews\Controller\CategoryController::class => 'list',
            \GG\Wwnews\Controller\AplicationAreaController::class => 'list'
        ],
        // non-cacheable actions
        [
            \GG\Wwnews\Controller\NewsItemController::class => 'list, show',
            \GG\Wwnews\Controller\CategoryController::class => '',
            \GG\Wwnews\Controller\AplicationAreaController::class => ''
        ]
    );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    shortlist {
                        iconIdentifier = wwnews-plugin-shortlist
                        title = LLL:EXT:wwnews/Resources/Private/Language/locallang_db.xlf:tx_wwnews_shortlist.name
                        description = LLL:EXT:wwnews/Resources/Private/Language/locallang_db.xlf:tx_wwnews_shortlist.description
                        tt_content_defValues {
                            CType = list
                            list_type = wwnews_shortlist
                        }
                    }
                    list {
                        iconIdentifier = wwnews-plugin-list
                        title = LLL:EXT:wwnews/Resources/Private/Language/locallang_db.xlf:tx_wwnews_list.name
                        description = LLL:EXT:wwnews/Resources/Private/Language/locallang_db.xlf:tx_wwnews_list.description
                        tt_content_defValues {
                            CType = list
                            list_type = wwnews_list
                        }
                    }
                }
                show = *
            }
       }'
    );

    $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
    $iconRegistry->registerIcon(
        'wwnews-plugin-shortlist',
        \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        ['source' => 'EXT:wwnews/Resources/Public/Icons/user_plugin_shortlist.svg']
    );
    $iconRegistry->registerIcon(
        'wwnews-plugin-list',
        \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        ['source' => 'EXT:wwnews/Resources/Public/Icons/user_plugin_list.svg']
    );
});
