<?php
defined('TYPO3_MODE') || die();

call_user_func(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'WwCareer',
        'Career',
        [
            \GG\WwCareer\Controller\PositionController::class => 'list,show'
        ],
        // non-cacheable actions
        [
            \GG\WwCareer\Controller\PositionController::class => 'list,show'
        ]
    );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    career {
                        iconIdentifier = ww_career-plugin-career
                        title = LLL:EXT:ww_career/Resources/Private/Language/locallang_db.xlf:tx_ww_career_career.name
                        description = LLL:EXT:ww_career/Resources/Private/Language/locallang_db.xlf:tx_ww_career_career.description
                        tt_content_defValues {
                            CType = list
                            list_type = wwcareer_career
                        }
                    }
                }
                show = *
            }
       }'
    );

    $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
    $iconRegistry->registerIcon(
        'ww_career-plugin-career',
        \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        ['source' => 'EXT:ww_career/Resources/Public/Icons/user_plugin_career.svg']
    );
});
