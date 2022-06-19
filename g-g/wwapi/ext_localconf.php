<?php
defined('TYPO3_MODE') || die();

call_user_func(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Wwapi',
        'Api',
        [
            \GG\Wwapi\Controller\ItemController::class => 'list'
        ],
        // non-cacheable actions
        [
            \GG\Wwapi\Controller\ItemController::class => 'list'
        ]
    );

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Wwapi',
        'Api__ref_slider',
        [
            \GG\Wwapi\Controller\ApiRefController::class => 'slider'
        ],
        // non-cacheable actions
        [
            \GG\Wwapi\Controller\ApiRefController::class => 'slider'
        ]
    );

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Wwapi',
        'ApiApplications',
        [
            \GG\Wwapi\Controller\ApplicationController::class => 'index'
        ],
        // non-cacheable actions
        [
            \GG\Wwapi\Controller\ApplicationController::class => 'index'
        ]
    );

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Wwapi',
        'ApiSystemGroups',
        [
            \GG\Wwapi\Controller\SystemGroupController::class => 'index'
        ],
        // non-cacheable actions
        [
            \GG\Wwapi\Controller\SystemGroupController::class => 'index'
            
        ]
    );
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Wwapi',
        'ApiSystems',
        [
            \GG\Wwapi\Controller\SystemController::class => 'index'
        ],
        // non-cacheable actions
        [
            \GG\Wwapi\Controller\SystemController::class => 'index'
            
        ]
    );

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Wwapi',
        'ApiProductLevel',
        [
            \GG\Wwapi\Controller\ProductLevelController::class => 'index'
        ],
        // non-cacheable actions
        [
            \GG\Wwapi\Controller\ProductLevelController::class => 'index'
            
        ]
    );
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Wwapi',
        'ApiProduct',
        [
            \GG\Wwapi\Controller\ProductController::class => 'index'
        ],
        // non-cacheable actions
        [
            \GG\Wwapi\Controller\ProductController::class => 'index'
            
        ]
    );
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Wwapi',
        'ApiSolution',
        [
            \GG\Wwapi\Controller\SolutionController::class => 'index,show'
        ],
        // non-cacheable actions
        [
            \GG\Wwapi\Controller\SolutionController::class => 'index,show'
            
        ]
    );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    api {
                        iconIdentifier = wwapi-plugin-api
                        title = LLL:EXT:wwapi/Resources/Private/Language/locallang_db.xlf:tx_wwapi_api.name
                        description = LLL:EXT:wwapi/Resources/Private/Language/locallang_db.xlf:tx_wwapi_api.description
                        tt_content_defValues {
                            CType = list
                            list_type = wwapi_api
                        }
                    }
                }
                show = *
            }
       }'
    );

    $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
    $iconRegistry->registerIcon(
        'wwapi-plugin-api',
        \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        ['source' => 'EXT:wwapi/Resources/Public/Icons/user_plugin_api.svg']
    );
});
