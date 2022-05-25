<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:fachverarbeitersuche/Resources/Private/Language/locallang_db.xlf:tx_fachverarbeitersuche_domain_model_requests',
        'label' => 'address',
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
        'searchFields' => 'address,zip,contactperson,applicationarea,ramp,stairway,parking,topdeck,betweendeck,balkon,arcade,terrasse,dachkuppel,flachdach,dachterasse,keller,konstruktion,sonder,betonfuge,betonfahrbahntafel, brueckenkappe, stahlbruecke, trogbauwerk, area,title,email,firstname,lastname,tel,message',
        'iconfile' => 'EXT:fachverarbeitersuche/Resources/Public/Icons/tx_fachverarbeitersuche_domain_model_requests.gif'
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, address, zip, contactperson, applicationarea, ramp, stairway, parking, topdeck, betweendeck, balkon, arcade, terrasse, dachkuppel,flachdach,dachterasse,keller,konstruktion,sonder,betonfuge,betonfahrbahntafel, brueckenkappe, stahlbruecke, trogbauwerk, area, title, email, firstname, lastname, tel, message, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
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
                'foreign_table' => 'tx_fachverarbeitersuche_domain_model_requests',
                'foreign_table_where' => 'AND {#tx_fachverarbeitersuche_domain_model_requests}.{#pid}=###CURRENT_PID### AND {#tx_fachverarbeitersuche_domain_model_requests}.{#sys_language_uid} IN (-1,0)',
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

        'address' => [
            'exclude' => true,
            'label' => 'LLL:EXT:fachverarbeitersuche/Resources/Private/Language/locallang_db.xlf:tx_fachverarbeitersuche_domain_model_requests.address',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'zip' => [
            'exclude' => true,
            'label' => 'plz',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'contactperson' => [
            'exclude' => true,
            'label' => 'Contact Person',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_fachverarbeitersuche_domain_model_salesrepresentative',
                'default' => 0,
                'minitems' => 0,
                'maxitems' => 1,
            ],
            
        ],
        'applicationarea' => [
            'exclude' => true,
            'label' => 'LLL:EXT:fachverarbeitersuche/Resources/Private/Language/locallang_db.xlf:tx_fachverarbeitersuche_domain_model_requests.application',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'ramp' => [
            'exclude' => true,
            'label' => 'LLL:EXT:fachverarbeitersuche/Resources/Private/Language/locallang_db.xlf:tx_fachverarbeitersuche_domain_model_requests.ramp',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'stairway' => [
            'exclude' => true,
            'label' => 'LLL:EXT:fachverarbeitersuche/Resources/Private/Language/locallang_db.xlf:tx_fachverarbeitersuche_domain_model_requests.stairway',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'parking' => [
            'exclude' => true,
            'label' => 'LLL:EXT:fachverarbeitersuche/Resources/Private/Language/locallang_db.xlf:tx_fachverarbeitersuche_domain_model_requests.parking',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'topdeck' => [
            'exclude' => true,
            'label' => 'LLL:EXT:fachverarbeitersuche/Resources/Private/Language/locallang_db.xlf:tx_fachverarbeitersuche_domain_model_requests.topdeck',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'betweendeck' => [
            'exclude' => true,
            'label' => 'LLL:EXT:fachverarbeitersuche/Resources/Private/Language/locallang_db.xlf:tx_fachverarbeitersuche_domain_model_requests.betweendeck',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'area' => [
            'exclude' => true,
            'label' => 'LLL:EXT:fachverarbeitersuche/Resources/Private/Language/locallang_db.xlf:tx_fachverarbeitersuche_domain_model_requests.area',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'balkon' => [
            'exclude' => true,
            'label' => 'Balkon',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'arcade' => [
            'exclude' => true,
            'label' => 'Laubengang',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'terrasse' => [
            'exclude' => true,
            'label' => 'Terrasse',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],

    'dachkuppel' => [
                'exclude' => true,
                'label' => 'dachkuppel',
                'config' => [
                    'type' => 'input',
                    'size' => 30,
                    'eval' => 'trim'
                ],
            ],
    'flachdach' => [
                'exclude' => true,
                'label' => 'flachdach',
                'config' => [
                    'type' => 'input',
                    'size' => 30,
                    'eval' => 'trim'
                ],
            ],
    'dachterasse' => [
                'exclude' => true,
                'label' => 'dachterasse',
                'config' => [
                    'type' => 'input',
                    'size' => 30,
                    'eval' => 'trim'
                ],
            ],
    'keller' => [
                'exclude' => true,
                'label' => 'keller',
                'config' => [
                    'type' => 'input',
                    'size' => 30,
                    'eval' => 'trim'
                ],
            ],
    'konstruktion' => [
                'exclude' => true,
                'label' => 'konstruktion',
                'config' => [
                    'type' => 'input',
                    'size' => 30,
                    'eval' => 'trim'
                ],
            ],
    'sonder' => [
                'exclude' => true,
                'label' => 'sonder',
                'config' => [
                    'type' => 'input',
                    'size' => 30,
                    'eval' => 'trim'
                ],
            ],
    'betonfuge' => [
                'exclude' => true,
                'label' => 'Betonfuge',
                'config' => [
                    'type' => 'input',
                    'size' => 30,
                    'eval' => 'trim'
                ],
            ],
            'trogbauwerk' => [
                'exclude' => true,
                'label' => 'Trogbauwerk',
                'config' => [
                    'type' => 'input',
                    'size' => 30,
                    'eval' => 'trim'
                ],
            ],

            'betonfahrbahntafel' => [
                'exclude' => true,
                'label' => 'Betonfahrbahntafel',
                'config' => [
                    'type' => 'input',
                    'size' => 30,
                    'eval' => 'trim'
                ],
            ],

            'brueckenkappe' => [
                'exclude' => true,
                'label' => 'Brückenkappe',
                'config' => [
                    'type' => 'input',
                    'size' => 30,
                    'eval' => 'trim'
                ],
            ],
            'stahlbruecke' => [
                'exclude' => true,
                'label' => 'Stahlbrücke',
                'config' => [
                    'type' => 'input',
                    'size' => 30,
                    'eval' => 'trim'
                ],
            ],




        'title' => [
            'exclude' => true,
            'label' => 'Title',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'firstname' => [
            'exclude' => true,
            'label' => 'LLL:EXT:fachverarbeitersuche/Resources/Private/Language/locallang_db.xlf:tx_fachverarbeitersuche_domain_model_requests.firstname',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'lastname' => [
            'exclude' => true,
            'label' => 'LLL:EXT:fachverarbeitersuche/Resources/Private/Language/locallang_db.xlf:tx_fachverarbeitersuche_domain_model_requests.lastname',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'email' => [
            'exclude' => true,
            'label' => 'E-Mail',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'tel' => [
            'exclude' => true,
            'label' => 'LLL:EXT:fachverarbeitersuche/Resources/Private/Language/locallang_db.xlf:tx_fachverarbeitersuche_domain_model_requests.tel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'message' => [
            'exclude' => true,
            'label' => 'LLL:EXT:fachverarbeitersuche/Resources/Private/Language/locallang_db.xlf:tx_fachverarbeitersuche_domain_model_requests.message',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim'
            ]
        ],
        'crdate' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
    
    ],
];
