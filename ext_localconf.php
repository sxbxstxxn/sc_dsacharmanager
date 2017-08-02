<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'DSACharManager.' . $_EXTKEY,
	'Pi',
	array(
		'Character' => 'list, show, new, create, edit, update, delete',
		'Race' => 'list, show',
		
	),
	// non-cacheable actions
	array(
		'Character' => 'create, update, delete',
		'Race' => '',
		
	)
);
