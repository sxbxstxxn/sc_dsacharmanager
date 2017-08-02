<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'DSACharManager.' . $_EXTKEY,
	'Pi',
	'DSA Character Manager'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'DSA Character Manager');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_scdsacharmanager_domain_model_character', 'EXT:sc_dsacharmanager/Resources/Private/Language/locallang_csh_tx_scdsacharmanager_domain_model_character.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_scdsacharmanager_domain_model_character');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_scdsacharmanager_domain_model_race', 'EXT:sc_dsacharmanager/Resources/Private/Language/locallang_csh_tx_scdsacharmanager_domain_model_race.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_scdsacharmanager_domain_model_race');
