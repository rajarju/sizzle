<?php

/**
 * @file
 * Theme functions
 */

/**
 * Implements template_preprocess_page().
 */
function sizzle_preprocess_page(&$variables) {
  // footer links
  $footer_links = '<div class="footer-links row-fluid">';
  if (module_exists('restaurant_base')) {
    $links = array(
      'twitter' => array(
        'title' => t('Follow Us on Twitter'),
        'sub_title' => t('Get the latest'),
        'href' => restaurant_base_get_settings('twitter'),
        'icon' => 'icon-twitter',
      ),
      'facebook' => array(
        'title' => t('We\'re on Facebook'),
        'sub_title' => t('Like Us'),
        'href' => restaurant_base_get_settings('facebook'),
        'icon' => 'icon-facebook',
      ),
      'contact' => array(
        'title' => t('Say Hello here'),
        'sub_title' => t('Keep in touch'),
        'href' => 'contact',
        'icon' => 'icon-envelope',
      ),
      'phone' => array(
        'title' => restaurant_base_get_settings('phone'),
        'sub_title' => t('Talk to Us'),
        'icon' => 'icon-phone',
      ),
    );

    foreach ($links as $link) {
      $title = $link['title'];
      
      $options = array();
      $options['html'] = TRUE;

      if (isset($link['href'])) {
        $href = $link['href'];
      }
      else {
        $options['fragment'] = FALSE;
        $options['absolute'] = TRUE;
      }

      $icon = isset($link['icon']) ? $link['icon'] : '';
      $title .=  '<i class="' . $icon . '"></i>';

      $footer_links .= '<div class="span3">';
      $footer_links .= '<h4>' . $link['sub_title'] . '</h4>';
      $footer_links .= '<h3>' . l($title, $href, $options) . '</h3>';
      $footer_links .= '</div>';  
    }
  }
  $footer_links .= '</div>';

  $variables['footer_links'] = $footer_links;
}

/**
 * Implements template_preprocess_maintenance_page().
 */
function sizzle_preprocess_maintenance_page(&$variables) {
  global $install_state;

  if ($install_state) {
    $variables['copyright'] = st('Drupal is a !trademark of !buytaert', array(
      '!trademark' => l(st('registered trademark'), 'http://drupal.org/trademark'),
      '!buytaert' => l(st('Dries Buytaert'), 'http://buytaert.com'),
    ));

    //find the number of tasks to run
    $tasks = install_tasks_to_display($install_state);
    $total = sizeof($tasks);
    
    //find the position of the active task
    $keys = array_keys($tasks);
    $active_task = $install_state['active_task'];
    $current = array_search($active_task, $keys) + 1;
    
    // show steps
    $variables['steps'] = t('Step @current of @total', array(
      '@current' => $current,
      '@total' => $total,
    ));

    // add some icons
    $search = array('"done">', '"active">', '<li>');
    $replace = array('"done"><i class="icon-ok"></i>','"active"><i class="icon-check-empty"></i>', '<li><i class="icon-check-empty"></i>');
    $variables['sidebar_first'] = str_replace($search, $replace, $variables['sidebar_first']);
  }
}