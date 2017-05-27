<?php
/*
 * This file configures factory methods in TYPO3 CMS
 */

namespace PHPSTORM_META {

	/** @noinspection PhpUnusedLocalVariableInspection */
	/** @noinspection PhpIllegalArrayKeyTypeInspection */
	/** @noinspection PhpUnnecessaryFullyQualifiedNameInspection */
    $STATIC_METHOD_TYPES = [
        \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('') => [
            '' == '@',
        ],
        \TYPO3\CMS\Extbase\Object\ObjectManagerInterface::get('') => [
            '' == '@',
        ],
        \TYPO3\CMS\Extbase\Object\ObjectManagerInterface::getEmptyObject('') => [
            '' == '@',
        ],
        \Sozialinfo\SiJobs\Service\CloneService::copy('') => [
            '' == '@',
        ],
    ];
}