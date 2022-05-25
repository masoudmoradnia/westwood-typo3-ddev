<?php
defined('TYPO3_MODE') || die();

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'Wwnews',
    'Shortlist',
    'News Short List'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'Wwnews',
    'List',
    'News List'
);


$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['wwnews_list'] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    // plugin signature: <extension key without underscores> '_' <plugin name in lowercase>
    'wwnews_list',
    // Flexform configuration schema file
    'FILE:EXT:wwnews/Configuration/FlexForms/newsList.xml'
);