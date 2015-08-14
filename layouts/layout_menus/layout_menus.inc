<?php
// Plugin definition
$plugin = array(
  'title' => t('Menus'),
  'icon' => 'layout_menus.png',
  'category' => t('Restaurant Radix'),
  'theme' => 'layout__menus',
  'regions' => array(
    'slideshow' => t('Slideshow'),
    'top' => t('Top'),
    'left' => t('Left sidebar'),
    'contentmain' => t('Content'),
    'bottom' => t('Bottom'),
  ),
);
