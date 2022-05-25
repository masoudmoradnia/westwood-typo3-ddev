<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:ww_seminars/Resources/Private/Language/locallang_db.xlf:tx_wwseminars_domain_model_request',
        'label' => 'firma',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
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
        'searchFields' => 'firma,strasse,plz,ort,telefon,telefax,email,ansprechpartner,personen',
        'iconfile' => 'EXT:ww_seminars/Resources/Public/Icons/tx_wwseminars_domain_model_request.gif'
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, firma, strasse, plz, ort, telefon, telefax, email, ansprechpartner, personen, seminar, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
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
                'foreign_table' => 'tx_wwseminars_domain_model_request',
                'foreign_table_where' => 'AND {#tx_wwseminars_domain_model_request}.{#pid}=###CURRENT_PID### AND {#tx_wwseminars_domain_model_request}.{#sys_language_uid} IN (-1,0)',
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

        'firma' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ww_seminars/Resources/Private/Language/locallang_db.xlf:tx_wwseminars_domain_model_request.firma',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'strasse' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ww_seminars/Resources/Private/Language/locallang_db.xlf:tx_wwseminars_domain_model_request.strasse',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'plz' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ww_seminars/Resources/Private/Language/locallang_db.xlf:tx_wwseminars_domain_model_request.plz',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'ort' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ww_seminars/Resources/Private/Language/locallang_db.xlf:tx_wwseminars_domain_model_request.ort',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'telefon' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ww_seminars/Resources/Private/Language/locallang_db.xlf:tx_wwseminars_domain_model_request.telefon',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'telefax' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ww_seminars/Resources/Private/Language/locallang_db.xlf:tx_wwseminars_domain_model_request.telefax',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'email' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ww_seminars/Resources/Private/Language/locallang_db.xlf:tx_wwseminars_domain_model_request.email',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'ansprechpartner' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ww_seminars/Resources/Private/Language/locallang_db.xlf:tx_wwseminars_domain_model_request.ansprechpartner',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'personen' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ww_seminars/Resources/Private/Language/locallang_db.xlf:tx_wwseminars_domain_model_request.personen',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'seminar' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ww_seminars/Resources/Private/Language/locallang_db.xlf:tx_wwseminars_domain_model_request.seminar',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_wwseminars_domain_model_seminar',
                'default' => 0,
                'minitems' => 0,
                'maxitems' => 1,
            ],
            
        ],
    
    ],
];
