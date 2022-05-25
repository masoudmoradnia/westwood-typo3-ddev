<?php
defined('TYPO3_MODE') || die();

call_user_func(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'Fachverarbeitersuche',
        'system',
        'bereq',
        '',
        [
            \GG\Fachverarbeitersuche\Controller\RequestsController::class => 'export',
        ],
        [
            'access' => 'user,group',
            'icon'   => 'EXT:fachverarbeitersuche/Resources/Public/Icons/user_mod_bereq.svg',
            'labels' => 'LLL:EXT:fachverarbeitersuche/Resources/Private/Language/locallang_bereq.xlf',
        ]
    );
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_fachverarbeitersuche_domain_model_requests', 'EXT:fachverarbeitersuche/Resources/Private/Language/locallang_csh_tx_fachverarbeitersuche_domain_model_requests.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_fachverarbeitersuche_domain_model_requests');

     \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_fachverarbeitersuche_domain_model_salesrepresentative', 'EXT:fachverarbeitersuche/Resources/Private/Language/locallang_csh_tx_fachverarbeitersuche_domain_model_salesrepresentative.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_fachverarbeitersuche_domain_model_salesrepresentative');

});
