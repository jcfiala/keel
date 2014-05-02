<?php

// Plugin definition
$plugin = array(
  'title' => t('HTML5 base'),
  'category' => t('Keel'),
  'icon' =>  'keel-html5page.png',
  'theme' => 'keel-html5page',
  'css' =>   'keel-html5page.admin.css',
  'regions' => array(
    'top' => t('Top (<header>)'),
    'top_mobile' => t('Top - Mobile (<header>)'),
    'middle' => t('Middle (role="main")'),
    'bottom' => t('Bottom (<footer>)'),
  ),
);
