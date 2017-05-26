<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tstemplate.php']['includeStaticTypoScriptSources']['user_template'] = 'DmitryDulepov\\SiteTemplate\\Hooks\\IncludeStaticConfiguration->includeStaticConfiguration';

# User TSConfig and page TSConfig are merged, so we can use them iterchangibly
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:user_template/Configuration/TSConfig/PageTSConfig.txt">');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:user_template/Configuration/TSConfig/UserTSConfig.txt">');

/*
// PageNotFound handling
$errorPageId = '6';
$languageGetVar = 'L';
$languageId        = intval(\TYPO3\CMS\Core\Utility\GeneralUtility::_GP($languageGetVar));
$language = '&' . $languageGetVar . '=' . $languageId;
$GLOBALS['TYPO3_CONF_VARS']['FE']['pageNotFound_handling'] = '/index.php?id=' . $errorPageId . $language;

*/