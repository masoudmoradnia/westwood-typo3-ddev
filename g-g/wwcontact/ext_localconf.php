<?php
defined('TYPO3_MODE') || die();

call_user_func(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Wwcontact',
        'Form',
        [
            \GG\Wwcontact\Controller\RequestController::class => 'new, create, validate'
        ],
        // non-cacheable actions
        [
            \GG\Wwcontact\Controller\RequestController::class => 'new, create, validate'
        ]
    );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    form {
                        iconIdentifier = wwcontact-plugin-form
                        title = LLL:EXT:wwcontact/Resources/Private/Language/locallang_db.xlf:tx_wwcontact_form.name
                        description = LLL:EXT:wwcontact/Resources/Private/Language/locallang_db.xlf:tx_wwcontact_form.description
                        tt_content_defValues {
                            CType = list
                            list_type = wwcontact_form
                        }
                    }
                }
                show = *
            }
       }'
    );

    $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
    $iconRegistry->registerIcon(
        'wwcontact-plugin-form',
        \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        ['source' => 'EXT:wwcontact/Resources/Public/Icons/user_plugin_form.svg']
    );
});
