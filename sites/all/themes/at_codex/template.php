<?php
// AT codex

/**
 * Override or insert variables into the html template.
 */
function at_codex_preprocess_html(&$vars) {
  global $theme_key;

  $theme_name = 'at_codex';
  $path_to_theme = drupal_get_path('theme', $theme_name);

  // Add a class for the active color scheme
  if (module_exists('color')) {
    $class = check_plain(get_color_scheme_name($theme_key));
    $vars['classes_array'][] = 'color-scheme-' . drupal_html_class($class);
  }

  // Add class for the active theme
  $vars['classes_array'][] = drupal_html_class($theme_key);

  // Add browser and platform classes
  $vars['classes_array'][] = css_browser_selector();

  // Add theme settings classes
  $settings_array = array(
    'body_background',
    'header_layout',
    'menu_bullets',
    'corner_radius',
  );
  foreach ($settings_array as $setting) {
    $vars['classes_array'][] = theme_get_setting($setting);
  }

  // Special case for PIE htc rounded corners, not all themes include this
  if (theme_get_setting('ie_corners') == 1) {
    drupal_add_css($path_to_theme . '/css/ie-htc.css', array(
      'group' => CSS_THEME,
      'browsers' => array(
        'IE' => 'lte IE 8',
        '!IE' => FALSE,
        ),
      'preprocess' => FALSE,
      )
    );
  }
}


/**
 * Override or insert variables into the html template.
 */
function at_codex_process_html(&$vars) {
  if (module_exists('color')) {
    _color_html_alter($vars);
  }
}


/**
 * Override or insert variables into the page template.
 */
function at_codex_preprocess_page(&$vars) {
  if ($vars['hide_site_name'] == TRUE) {
    $vars['branding_attributes_array']['class'][] = 'site-name-hidden';
  }
  if (isset($vars['node']->type)) {
		//ajout template page--node--projet.tpl.php
        $vars['theme_hook_suggestions'][] = 'page__node__' . $vars['node']->type;
    }
}


/**
 * Override or insert variables into the page template.
 */
function at_codex_process_page(&$vars) {
  if (module_exists('color')) {
    _color_page_alter($vars);
  }
}


/**
 * Override or insert variables into the comment template.
 */
function at_codex_preprocess_comment(&$vars) {
  $vars['title_attributes_array']['class'][] = 'title';
  if ($vars['picture']) {
    $vars['header_attributes_array']['class'][] = 'with-picture';
  }
}


/**
 * Override or insert variables into the block template.
 */
function at_codex_preprocess_block(&$vars) {
  if ($vars['block']->module == 'superfish' || $vars['block']->module == 'nice_menu') {
    $vars['content_attributes_array']['class'][] = 'clearfix';
  }
  if (!$vars['block']->subject) {
    $vars['content_attributes_array']['class'][] = 'no-title';
  }
  if ($vars['block']->region == 'menu_bar' || $vars['block']->region == 'header') {
    $vars['title_attributes_array']['class'][] = 'element-invisible';
  }
  $vars['title_attributes_array']['class'][] = 'title';
}
