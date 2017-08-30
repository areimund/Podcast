<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	$_EXTKEY,
	'Display',
	array(
		'Podcast' => 'index,show',
	),
	array(
		'Podcast' => '',
	)
);

require \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/RealURL/default.php';

$GLOBALS ['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass']['podcast'] = 'EXT:podcast/Classes/Utilities/Backend/EpisodePostProcessor.php:Tx_Podcast_Utilities_EpisodePostProcessor';

?>