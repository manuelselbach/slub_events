<?php

$LL = 'LLL:EXT:slub_events/Resources/Private/Language/locallang_db.xlf:';

return [
    'ctrl'      => [
        'title'                    => $LL . 'tx_slubevents_domain_model_location',
        'label'                    => 'name',
        'tstamp'                   => 'tstamp',
        'crdate'                   => 'crdate',
        'cruser_id'                => 'cruser_id',
        'dividers2tabs'            => true,
        'sortby'                   => 'sorting',
        'versioningWS'             => 2,
        'versioning_followPages'   => true,
        'origUid'                  => 't3_origuid',
        'languageField'            => 'sys_language_uid',
        'transOrigPointerField'    => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete'                   => 'deleted',
        'enablecolumns'            => [
            'disabled'  => 'hidden',
            'starttime' => 'starttime',
            'endtime'   => 'endtime',
        ],
        'searchFields'             => 'name,description,link,parent,',
        'iconfile'                 => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('slub_events') . 'Resources/Public/Icons/tx_slubevents_domain_model_location.gif',
        'requestUpdate'            => 'sys_language_uid',
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name, description, link, parent',
    ],
    'types'     => [
        '1' => ['showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, name, description, link, parent,--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access,starttime, endtime'],
    ],
    'palettes'  => [
        '1' => ['showitem' => ''],
    ],
    'columns'   => [
        'sys_language_uid' => [
            'exclude' => 1,
            'label'   => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
            'config'  => [
                'type'                => 'select',
                'foreign_table'       => 'sys_language',
                'foreign_table_where' => 'ORDER BY sys_language.title',
                'items'               => [
                    ['LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1],
                    ['LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0],
                ],
            ],
        ],
        'l10n_parent'      => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude'     => 1,
            'label'       => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config'      => [
                'type'                => 'select',
                'items'               => [
                    ['', 0],
                ],
                'foreign_table'       => 'tx_slubevents_domain_model_location',
                'foreign_table_where' => 'AND tx_slubevents_domain_model_location.pid=###CURRENT_PID### AND tx_slubevents_domain_model_location.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource'  => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        't3ver_label'      => [
            'label'  => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max'  => 255,
            ],
        ],
        'hidden'           => [
            'exclude' => 1,
            'label'   => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config'  => [
                'type' => 'check',
            ],
        ],
        'starttime'        => [
            'exclude'   => 1,
            'l10n_mode' => 'mergeIfNotBlank',
            'label'     => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
            'config'    => [
                'type'     => 'input',
                'size'     => 13,
                'max'      => 20,
                'eval'     => 'datetime',
                'checkbox' => 0,
                'default'  => 0,
                'range'    => [
                    'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y')),
                ],
            ],
        ],
        'endtime'          => [
            'exclude'   => 1,
            'l10n_mode' => 'mergeIfNotBlank',
            'label'     => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
            'config'    => [
                'type'     => 'input',
                'size'     => 13,
                'max'      => 20,
                'eval'     => 'datetime',
                'checkbox' => 0,
                'default'  => 0,
                'range'    => [
                    'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y')),
                ],
            ],
        ],
        'name'             => [
            'exclude' => 0,
            'label'   => $LL . 'tx_slubevents_domain_model_location.name',
            'config'  => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required',
            ],
        ],
        'description'      => [
            'exclude'       => 0,
            'label'         => $LL . 'tx_slubevents_domain_model_location.description',
            'config'        => [
                'type'    => 'text',
                'cols'    => 40,
                'rows'    => 15,
                'eval'    => 'trim',
                'wizards' => [
                    'RTE' => [
                        'icon'          => 'wizard_rte2.gif',
                        'notNewRecords' => 1,
                        'RTEonly'       => 1,
                        'module'        => ['name' => 'wizard_rte'],
                        'title'         => 'LLL:EXT:cms/locallang_ttc.xlf:bodytext.W.RTE',
                    ],
                ],
            ],
            'defaultExtras' => 'richtext:rte_transform[flag=rte_enabled|mode=ts]',
        ],
        'link'             => [
            'exclude' => 0,
            'label'   => $LL . 'tx_slubevents_domain_model_location.link',
            'config'  => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
            ],
        ],
        'parent'           => [
            'exclude' => 0,
            'label'   => $LL . 'tx_slubevents_domain_model_location.parent',
            'config'  => [
                'type'                => 'select',
                'foreign_table'       => 'tx_slubevents_domain_model_location',
                'foreign_table_where' => ' AND (tx_slubevents_domain_model_location.sys_language_uid = 0 OR tx_slubevents_domain_model_location.l10n_parent = 0) AND tx_slubevents_domain_model_location.pid = ###CURRENT_PID### ORDER BY tx_slubevents_domain_model_location.sorting',
                'renderMode' => 'tree',
                'subType'    => 'db',
                'treeConfig' => [
                    'parentField' => 'parent',
                    'appearance'  => [
                        'expandAll'  => true,
                        'showHeader' => false,
                        'width'      => 500,
                    ],
                ],
                'maxitems'   => 2,
            ],
        ],
        'location'         => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
    ],
];
