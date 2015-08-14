<?php
/**
 * @file
 * Theme functions
 */

// Theme path.
$theme_path = drupal_get_path('theme', 'sizzle');

// Include all files from the includes directory.
$includes_path = dirname(__FILE__) . '/includes/*.inc';
foreach (glob($includes_path) as $filename) {
  require_once dirname(__FILE__) . '/includes/' . basename($filename);
}

/**
 * Implements hook_css_alter().
 */
function sizzle_css_alter(&$css) {
  $radix_path = drupal_get_path('theme', 'radix');

  // Radix now includes compiled stylesheets for demo purposes.
  // We remove these from our subtheme since they are already included 
  // in compass_radix.
  unset($css[$radix_path . '/assets/stylesheets/radix-style.css']);
  unset($css[$radix_path . '/assets/stylesheets/radix-print.css']);
}

/**
 * Implements template_preprocess_html().
 */
function sizzle_preprocess_html(&$variables, $hook) {
  // Add site width to classes for theming.
  $variables['classes_array'][] = theme_get_setting('site_width');
}

/**
 * Implements template_preprocess_page().
 */
function sizzle_preprocess_page(&$variables) {
  // Add a menu link.
  $variables['menu_link'] = l(t('Menu'), 'menu', array(
    'attributes' => array(
      'class' => array('btn'),
    ),
  ));

  // Add a reservation link.
  $variables['reservation_link'] = '';
  if (module_exists('restaurant_reservation')) {
    $variables['reservation_link'] = l(t('Book a Table'), 'reservation', array(
      'attributes' => array(
        'class' => array('btn'),
      ),
    ));
  }

  // Add the footer menu to the template.
  $show_footer_nav = theme_get_setting('show_footer_nav');
  if ($show_footer_nav) {
    $footer_nav_data = menu_build_tree('menu-footer-menu', array(
      'min_depth' => 1,
      'max_depth' => 2,
    ));
    $variables['footer_nav'] = menu_tree_output($footer_nav_data);
    $variables['footer_nav']['#theme_wrappers'] = array();
  }

  // Add the site background image.
  if ($site_background_image_fid = theme_get_setting('site_background_image')) {
    $site_background_image = file_load($site_background_image_fid);
    $site_background_image_url = file_create_url($site_background_image->uri);
    drupal_add_css('body { background-image: url("' . $site_background_image_url . '") }', array('type' => 'inline'));
  }

  // Add the footer background image.
  if ($footer_background_image_fid = theme_get_setting('footer_background_image')) {
    $footer_background_image = file_load($footer_background_image_fid);
    $footer_background_image_url = file_create_url($footer_background_image->uri);
    drupal_add_css('.footer { background-image: url("' . $footer_background_image_url . '") }', array('type' => 'inline'));
  }

  $primary_color = theme_get_setting('primary_color');
  $colors = array('color', 'background-color', 'border-color');
  foreach ($colors as $color) {
    drupal_add_css(".$color-primary { $color: #$primary_color !important; }", array('type' => 'inline'));
  }

  // Add copyright to theme.
  $copyright = theme_get_setting('copyright');
  $variables['copyright'] = check_markup($copyright['value'], $copyright['format']);

  // Add footer text.
  $footer_text = theme_get_setting('footer_text');
  $variables['footer_text'] = check_markup($footer_text['value'], $footer_text['format']);

  $variables['address'] = panopoly_config_get('address');
  $variables['phone'] = panopoly_config_get('phone');
  $variables['opening_hours'] = panopoly_config_get('opening_hours');
}