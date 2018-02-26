<?php

/**
 * Implementation of hook_preprocess_html().
 */
function technowa_preprocess_html(&$variables) {
  drupal_add_css(drupal_get_path('theme', 'technowa') . '/css/overrides.css', array('group' => CSS_THEME));
}

function technowa_preprocess_page(&$vars, $hook) {
  if (isset($vars['node'])) {
    if (isset($vars['node']->type)) {
      $nodetype = $vars['node']->type;
      $vars['theme_hook_suggestions'][] = 'page__' . $nodetype;
      $vars['theme_hook_suggestions'][] = 'page__node__' . str_replace('_', '--', $vars['node']->type);
      $vars['theme_hook_suggestions'][] = 'page__node__' . $vars['node']->nid;
    }
  }
}
function technowa_theme() {
  return array(
    'twitter_pull_listing_2' => array(
      'arguments' => array('tweets' => NULL, 'twitkey' => NULL, 'title' => NULL),
      'template' => 'twitter-pull-listing-2'
    ),
  );
}
