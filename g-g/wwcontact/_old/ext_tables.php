<?php
defined('TYPO3_MODE') || die();

call_user_func(static function() {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wwcontact_domain_model_request', 'EXT:wwcontact/Resources/Private/Language/locallang_csh_tx_wwcontact_domain_model_request.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wwcontact_domain_model_request');
});
