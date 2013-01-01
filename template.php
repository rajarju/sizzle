<?php

/**
 * @file
 * Theme functions
 */

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