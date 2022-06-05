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

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'Wwapi',
    'ApiApplications',
    'Einsatzgebiete'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'Wwapi',
    'ApiSystemGroups',
    'System-Gruppen'
);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'Wwapi',
    'ApiSystems',
    'Systeme'
);


$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['wwapi_api'] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    // plugin signature: <extension key without underscores> '_' <plugin name in lowercase>
    'wwapi_api',
    // Flexform configuration schema file
    'FILE:EXT:wwapi/Configuration/FlexForms/Registration.xml'
);

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['wwapi_apiapplications'] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    // plugin signature: <extension key without underscores> '_' <plugin name in lowercase>
    'wwapi_apiapplications',
    // Flexform configuration schema file
    'FILE:EXT:wwapi/Configuration/FlexForms/RegistrationApplication.xml'
);

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['wwapi_apisystems'] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    // plugin signature: <extension key without underscores> '_' <plugin name in lowercase>
    'wwapi_apisystems',
    // Flexform configuration schema file
    'FILE:EXT:wwapi/Configuration/FlexForms/RegistrationSystem.xml'
);