<?php
// Plugin definition
$plugin = array(
  'title' => t('Blog post node'),
  'icon' => 'layout_blog_post_node.png',
  'category' => t('Restaurant Radix'),
  'theme' => 'layout__blog_post__node',
  'regions' => array(
    'slideshow' => t('Slideshow'),
    'top' => t('Top'),
    'contentmain' => t('Content'),
    'bottom_left' => t('Bottom left'),
    'bottom_right' => t('Bottom right'),
  ),
);
