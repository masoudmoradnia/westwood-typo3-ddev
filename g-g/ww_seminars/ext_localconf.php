<?php
defined('TYPO3_MODE') || die();

call_user_func(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'WwSeminars',
        'Seminars',
        [
            \GG\WwSeminars\Controller\CategoryController::class => 'index',
            \GG\WwSeminars\Controller\PlaceController::class => 'index',
            \GG\WwSeminars\Controller\SeminarController::class => 'index',
            \GG\WwSeminars\Controller\RequestController::class => 'new, create'
        ],
        // non-cacheable actions
        [
            \GG\WwSeminars\Controller\CategoryController::class => 'index',
            \GG\WwSeminars\Controller\PlaceController::class => 'index',
            \GG\WwSeminars\Controller\SeminarController::class => 'index',
            \GG\WwSeminars\Controller\RequestController::class => 'new, create'
        ]
    );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    seminars {
                        iconIdentifier = ww_seminars-plugin-seminars
                        title = LLL:EXT:ww_seminars/Resources/Private/Language/locallang_db.xlf:tx_ww_seminars_seminars.name
                        description = LLL:EXT:ww_seminars/Resources/Private/Language/locallang_db.xlf:tx_ww_seminars_seminars.description
                        tt_content_defValues {
                            CType = list
                            list_type = wwseminars_seminars
                        }
                    }
                }
                show = *
            }
       }'
    );

    $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
    $iconRegistry->registerIcon(
        'ww_seminars-plugin-seminars',
        \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        ['source' => 'EXT:ww_seminars/Resources/Public/Icons/user_plugin_seminars.svg']
    );
});
