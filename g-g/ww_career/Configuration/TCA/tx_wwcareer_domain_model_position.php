<?php
// return [
//     'ctrl' => [
//         'title' => 'LLL:EXT:ww_career/Resources/Private/Language/locallang_db.xlf:tx_wwcareer_domain_model_position',
//         'label' => 'uid',
//         'tstamp' => 'tstamp',
//         'crdate' => 'crdate',
//         'cruser_id' => 'cruser_id',
//         'versioningWS' => true,
//         'languageField' => 'sys_language_uid',
//         'transOrigPointerField' => 'l10n_parent',
//         'transOrigDiffSourceField' => 'l10n_diffsource',
//         'enablecolumns' => [
//         ],
//         'searchFields' => '',
//         'iconfile' => 'EXT:ww_career/Resources/Public/Icons/tx_wwcareer_domain_model_position.gif'
//     ],
//     'types' => [
//         '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, '],
//     ],
//     'columns' => [
//         'sys_language_uid' => [
//             'exclude' => true,
//             'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
//             'config' => [
//                 'type' => 'select',
//                 'renderType' => 'selectSingle',
//                 'special' => 'languages',
//                 'items' => [
//                     [
//                         'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
//                         -1,
//                         'flags-multiple'
//                     ]
//                 ],
//                 'default' => 0,
//             ],
//         ],
//         'l10n_parent' => [
//             'displayCond' => 'FIELD:sys_language_uid:>:0',
//             'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
//             'config' => [
//                 'type' => 'select',
//                 'renderType' => 'selectSingle',
//                 'default' => 0,
//                 'items' => [
//                     ['', 0],
//                 ],
//                 'foreign_table' => 'tx_wwcareer_domain_model_position',
//                 'foreign_table_where' => 'AND {#tx_wwcareer_domain_model_position}.{#pid}=###CURRENT_PID### AND {#tx_wwcareer_domain_model_position}.{#sys_language_uid} IN (-1,0)',
//             ],
//         ],
//         'l10n_diffsource' => [
//             'config' => [
//                 'type' => 'passthrough',
//             ],
//         ],

//     ],
// ];
