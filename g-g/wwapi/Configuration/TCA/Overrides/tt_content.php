<?php
defined('TYPO3_MODE') || die();

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'Wwapi',
    'Api',
    'Api'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'Wwapi',
    'Api__ref_slider',
    'Referenzenkarussell'
);


$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['wwapi_api'] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    // plugin signature: <extension key without underscores> '_' <plugin name in lowercase>
    'wwapi_api',
    // Flexform configuration schema file
    'FILE:EXT:wwapi/Configuration/FlexForms/Registration.xml'
);
