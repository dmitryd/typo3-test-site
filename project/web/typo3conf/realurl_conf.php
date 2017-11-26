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
				'noMatch' => 'bypass',
            ),
        ),
        'pagePath' => array(
            'rootpage_id' => 1,
        ),
		'fileName' => array(
			'acceptHTMLsuffix' => true,
			'defaultToHTMLsuffixOnPrev' => false,
			'index' => array(
				'rss.xml' => array(
						'keyValues' => array(
						'type' => 999,
					),
				),
			),
		),
	),
);
