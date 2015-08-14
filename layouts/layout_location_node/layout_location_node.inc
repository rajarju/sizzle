<?php
// Plugin definition
$plugin = array(
  'title' => t('Location node'),
  'icon' => 'layout_location_node.png',
  'category' => t('Restaurant Radix'),
  'theme' => 'layout__location__node',
  'regions' => array(
    'slideshow' => t('Slideshow'),
    'top' => t('Top'),
    'contentmain' => t('Content'),
    'bottom_left' => t('Bottom left'),
    'bottom_right' => t('Bottom right'),
  ),
);
