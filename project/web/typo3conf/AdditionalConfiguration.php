<?php
/*
 * set various caches to a null-backend so you shouldn't need to clear caches all the time during development.
 */
$cacheConfigurations = &$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations'];
//$cacheConfigurations['cache_hash']['backend'] = 'TYPO3\CMS\Core\Cache\Backend\NullBackend';
//$cacheConfigurations['cache_pages']['backend'] = 'TYPO3\CMS\Core\Cache\Backend\NullBackend';
//$cacheConfigurations['cache_pagesection']['backend'] = 'TYPO3\CMS\Core\Cache\Backend\NullBackend';
$cacheConfigurations['cache_phpcode']['backend'] = 'TYPO3\CMS\Core\Cache\Backend\NullBackend';
$cacheConfigurations['cache_rootline']['backend'] = 'TYPO3\CMS\Core\Cache\Backend\NullBackend';
$cacheConfigurations['extbase_datamapfactory_datamap']['backend'] = 'TYPO3\CMS\Core\Cache\Backend\NullBackend';
$cacheConfigurations['extbase_object']['backend'] = 'TYPO3\CMS\Core\Cache\Backend\NullBackend';
$cacheConfigurations['extbase_reflection']['backend'] = 'TYPO3\CMS\Core\Cache\Backend\NullBackend';
$cacheConfigurations['extbase_typo3dbbackend_queries']['backend'] = 'TYPO3\CMS\Core\Cache\Backend\NullBackend';
$cacheConfigurations['extbase_typo3dbbackend_tablecolumns']['backend'] = 'TYPO3\CMS\Core\Cache\Backend\NullBackend';
$cacheConfigurations['l10n']['backend'] = 'TYPO3\CMS\Core\Cache\Backend\NullBackend';

$GLOBALS['TYPO3_CONF_VARS']['FE']['cHashExcludedParameters'] .= ', gclid';

$GLOBALS['TYPO3_CONF_VARS']['LOG']['DmitryDulepov']['Realurl'] = array(
	'writerConfiguration' => array(
		\TYPO3\CMS\Core\Log\LogLevel::NOTICE => array(
			\TYPO3\CMS\Core\Log\Writer\FileWriter::class => array(
				'logFile' => 'typo3temp/logs/tx_realurl_' . date('Ymd') . '.log'
			)
		)
	)
);
