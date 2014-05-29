<?php
/**
 * Metadata version
 */
$sMetadataVersion = '1.0';

/**
 * Module information
 */
$aModule = array
(
    'id' => 'aho_infinitescroll',
    'title' => '[AHO] Infinite Scrolling List',
    'description' => 'Infinite Scrolling for article list',
    'thumbnail' => 'picture.jpg',
    'version' => '1.0.0',
    'author' => 'anhhothai@gmail.com',
    'url' => '',
    'email' => 'anhhothai@gmail.com',

    'extend' => array(
        'alist' => 'aho_infinitescroll/controllers/aho_infinitescroll_alist'
    ),
    'templates' => array(
        'aho_infinitescroll_list.tpl' => 'aho_infinitescroll/views/page/list/aho_infinitescroll_list.tpl'
    ),

    'settings' => array(
        array(
            'group' => 'aho_infinitescroll',
            'name' => 'sInfiniteScrollListType',
            'type' => 'str',
            'value' => 'line'
        )
    )
);