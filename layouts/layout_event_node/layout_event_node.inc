<?php
// Plugin definition
$plugin = array(
  'title' => t('Event node'),
  'icon' => 'layout_event_node.png',
  'category' => t('Restaurant Radix'),
  'theme' => 'layout__event__node',
  'regions' => array(
    'slideshow' => t('Slideshow'),
    'top' => t('Top'),
    'contentmain' => t('Content'),
    'bottom_left' => t('Bottom left'),
    'bottom_right' => t('Bottom right'),
  ),
);
