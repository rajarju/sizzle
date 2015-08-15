<?php
// Plugin definition
$plugin = array(
  'title' => t('News'),
  'icon' => 'layout_news.png',
  'category' => t('Sizzle'),
  'theme' => 'layout__news',
  'regions' => array(
    'slideshow' => t('Slideshow'),
    'top' => t('Top'),
    'contentmain' => t('Content'),
    'bottom' => t('Bottom'),
  ),
);