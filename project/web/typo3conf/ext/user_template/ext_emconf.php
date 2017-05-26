<?php

$EM_CONF[$_EXTKEY] = array(
    'title' => 'Site template',
    'description' => 'Provides site template',
    'category' => 'services',
    'version' => '1.0.0',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'modify_tables' => '',
    'clearcacheonload' => 1,
    'author' => 'Dmitry Dulepov',
    'author_email' => 'dmitry.dulepov@gmail.com',
    'author_company' => '',
    'constraints' => array(
        'depends' => array(
            'typo3' => '6.2.0-8.7.999',
            'php' => '5.4.0-7.1.999',
            'scheduler' => '6.2.0-8.7.999',
        ),
        'conflicts' => array(),
        'suggests' => array(),
    ),
);
