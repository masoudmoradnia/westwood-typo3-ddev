<?php
defined('TYPO3_MODE') || die();

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'Fachverarbeitersuche',
    'Form',
    'Fachverarbeitersuche'
);
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['fachverarbeitersuche_form'] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    // plugin signature: <extension key without underscores> '_' <plugin name in lowercase>
    'fachverarbeitersuche_form',
    // Flexform configuration schema file
    'FILE:EXT:wwcontact/Configuration/FlexForms/form.xml'
);
