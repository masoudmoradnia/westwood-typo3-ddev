<?php
defined('TYPO3_MODE') || die();

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'Wwcontact',
    'Form',
    'Kontakt Formular'
);

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['wwcontact_form'] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    // plugin signature: <extension key without underscores> '_' <plugin name in lowercase>
    'wwcontact_form',
    // Flexform configuration schema file
    'FILE:EXT:wwcontact/Configuration/FlexForms/form.xml'
);
