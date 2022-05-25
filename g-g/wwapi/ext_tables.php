<?php
defined('TYPO3_MODE') || die();

call_user_func(static function() {
// backend module
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
    'Wwapi',
    'system',
    'setUrl',
    '',
    [
        \GG\wwapi\Controller\ItemController::class => 'setUrl',
    ],
    [
        'access' => 'user,group',
        'icon'   => 'EXT:wwapi/Resources/Public/Icons/user_mod_setUrl.svg',
        'labels' => 'LLL:EXT:wwapi/Resources/Private/Language/locallang_setUrl.xlf',
    ]
);


    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wwapi_domain_model_item', 'EXT:wwapi/Resources/Private/Language/locallang_csh_tx_wwapi_domain_model_item.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wwapi_domain_model_item');
});
