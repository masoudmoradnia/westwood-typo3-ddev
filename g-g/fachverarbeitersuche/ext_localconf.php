<?php
defined('TYPO3_MODE') || die();

call_user_func(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Fachverarbeitersuche',
        'Form',
        [
            \GG\Fachverarbeitersuche\Controller\RequestsController::class => 'new, create, validate',
            \GG\Fachverarbeitersuche\Controller\SalesRepresentativeController::class => 'list'
        ],
        // non-cacheable actions
        [
            \GG\Fachverarbeitersuche\Controller\RequestsController::class => 'new, create, validate',
            \GG\Fachverarbeitersuche\Controller\SalesRepresentativeController::class => 'list'
        ]
    );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    form {
                        iconIdentifier = fachverarbeitersuche-plugin-form
                        title = LLL:EXT:fachverarbeitersuche/Resources/Private/Language/locallang_db.xlf:tx_fachverarbeitersuche_form.name
                        description = LLL:EXT:fachverarbeitersuche/Resources/Private/Language/locallang_db.xlf:tx_fachverarbeitersuche_form.description
                        tt_content_defValues {
                            CType = list
                            list_type = fachverarbeitersuche_form
                        }
                    }
                }
                show = *
            }
       }'
    );

    $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
    $iconRegistry->registerIcon(
        'fachverarbeitersuche-plugin-form',
        \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        ['source' => 'EXT:fachverarbeitersuche/Resources/Public/Icons/user_plugin_form.svg']
    );
});
