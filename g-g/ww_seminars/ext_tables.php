<?php
defined('TYPO3_MODE') || die();

call_user_func(static function() {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wwseminars_domain_model_category', 'EXT:ww_seminars/Resources/Private/Language/locallang_csh_tx_wwseminars_domain_model_category.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wwseminars_domain_model_category');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wwseminars_domain_model_place', 'EXT:ww_seminars/Resources/Private/Language/locallang_csh_tx_wwseminars_domain_model_place.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wwseminars_domain_model_place');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wwseminars_domain_model_seminar', 'EXT:ww_seminars/Resources/Private/Language/locallang_csh_tx_wwseminars_domain_model_seminar.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wwseminars_domain_model_seminar');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wwseminars_domain_model_request', 'EXT:ww_seminars/Resources/Private/Language/locallang_csh_tx_wwseminars_domain_model_request.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wwseminars_domain_model_request');
});
