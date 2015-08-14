<?php
/**
 * @file
 * Theme and preprocess functions for views
 */

/**
 * Implements template_preprocess_semanticviews_view_unformatted().
 */
function sizzle_preprocess_semanticviews_view_unformatted(&$variables) {
  $view = $variables['view'];

  if ($view->current_display == 'all_menus') {
    // Add custom class to h3.
    $variables['group_attributes']['class'] = 'ribbon ribbon--secondary';

    // Render the Menu category on top of the rows.
    if (count($variables['rows'])) {
      // Get the current view mode.
      $view_mode = $view->style_plugin->row_plugin->options['view_mode'];
      $bundles = entity_view_mode_get_enabled_bundles('taxonomy_term', $view_mode);

      // Get the first result.
      $results = $view->result;
      reset($variables['rows']);
      $first_row = key($variables['rows']);
      $result = $results[$first_row];

      // Check if this vocabulary has the required view mode.
      if (!empty($result->taxonomy_term_data_node__taxonomy_vocabulary_machine_name) && !empty($bundles[$result->taxonomy_term_data_node__taxonomy_vocabulary_machine_name])) {
        // Get the menu category for this result.
        $term = taxonomy_term_load($result->taxonomy_term_data_node_tid);

        // Render the category and prepend it to rows.
        array_unshift($variables['rows'], drupal_render(taxonomy_term_view($term, $view_mode)));
      }
    }
  }
}