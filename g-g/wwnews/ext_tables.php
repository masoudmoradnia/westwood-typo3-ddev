<?php
defined('TYPO3_MODE') || die();

call_user_func(static function() {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wwnews_domain_model_category', 'EXT:wwnews/Resources/Private/Language/locallang_csh_tx_wwnews_domain_model_category.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wwnews_domain_model_category');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wwnews_domain_model_aplicationarea', 'EXT:wwnews/Resources/Private/Language/locallang_csh_tx_wwnews_domain_model_aplicationarea.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wwnews_domain_model_aplicationarea');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wwnews_domain_model_newsitem', 'EXT:wwnews/Resources/Private/Language/locallang_csh_tx_wwnews_domain_model_newsitem.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wwnews_domain_model_newsitem');
});
