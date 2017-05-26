<?php
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['realurl'] = array(
    '_DEFAULT' => array(
        'preVars' => array(
            array(
                'GETvar' => 'L',
                'valueMap' => array(
                    'en' => 0,
                    'ru' => 1,
                ),
            ),
        ),
        'pagePath' => array(
            'rootpage_id' => 1,
        ),
    ),
);
