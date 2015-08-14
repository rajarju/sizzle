<?php
/**
 * @file
 * Theme and preprocess functions for menu.
 */

/**
 * Implements template_preprocess_node_menu().
 */
function sizzle_preprocess_node_menu(&$variables) {
  $node = $variables['node'];
  $metadata = entity_metadata_wrapper('node', $node);
  // Add the featured ribbon.
  if (!empty($node->field_menu_featured)) {
    if ($metadata->field_menu_featured->value()) {
      $variables['classes_array'][] = 'featured';
      $variables['content']['featured'] = array(
        '#markup' => '<span class="ribbon ribbon--primary">' . t('Featured') . '</span>',
      );
    }
  }
}