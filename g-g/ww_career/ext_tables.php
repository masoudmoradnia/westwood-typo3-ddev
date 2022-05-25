<?php
defined('TYPO3_MODE') || die();

call_user_func(static function() {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wwcareer_domain_model_position', 'EXT:ww_career/Resources/Private/Language/locallang_csh_tx_wwcareer_domain_model_position.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wwcareer_domain_model_position');
});
