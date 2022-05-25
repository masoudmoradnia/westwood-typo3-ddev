<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:fachverarbeitersuche/Resources/Private/Language/locallang_db.xlf:tx_fachverarbeitersuche_domain_model_salesrepresentative',
        'label' => 'plz',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'sortby' => 'sorting',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'name,plz,region,anschreiben,mobil,email',
        'iconfile' => 'EXT:fachverarbeitersuche/Resources/Public/Icons/tx_fachverarbeitersuche_domain_model_salesrepresentative.gif'
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name, plz, region, anschreiben, mobil, email, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ]
                ],
                'default' => 0,
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_fachverarbeitersuche_domain_model_salesrepresentative',
                'foreign_table_where' => 'AND {#tx_fachverarbeitersuche_domain_model_salesrepresentative}.{#pid}=###CURRENT_PID### AND {#tx_fachverarbeitersuche_domain_model_salesrepresentative}.{#sys_language_uid} IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                        'invertStateDisplay' => true
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],

        'name' => [
            'exclude' => false,
            'label' => 'LLL:EXT:fachverarbeitersuche/Resources/Private/Language/locallang_db.xlf:tx_fachverarbeitersuche_domain_model_salesrepresentative.name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'plz' => [
            'exclude' => true,
            'label' => 'LLL:EXT:fachverarbeitersuche/Resources/Private/Language/locallang_db.xlf:tx_fachverarbeitersuche_domain_model_salesrepresentative.plz',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'region' => [
            'exclude' => true,
            'label' => 'LLL:EXT:fachverarbeitersuche/Resources/Private/Language/locallang_db.xlf:tx_fachverarbeitersuche_domain_model_salesrepresentative.region',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'anschreiben' => [
            'exclude' => true,
            'label' => 'LLL:EXT:fachverarbeitersuche/Resources/Private/Language/locallang_db.xlf:tx_fachverarbeitersuche_domain_model_salesrepresentative.anschreiben',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'mobil' => [
            'exclude' => true,
            'label' => 'LLL:EXT:fachverarbeitersuche/Resources/Private/Language/locallang_db.xlf:tx_fachverarbeitersuche_domain_model_salesrepresentative.mobil',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'email' => [
            'exclude' => true,
            'label' => 'LLL:EXT:fachverarbeitersuche/Resources/Private/Language/locallang_db.xlf:tx_fachverarbeitersuche_domain_model_salesrepresentative.email',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
    
    ],
];
