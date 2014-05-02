<?php
/*
  Removes all of the javascript.
*/
function keel_js_alter(&$js) {

  $settings = array();
  
  foreach ($js as $file => $value) {
    if (strpos($file, 'modules/') !== FALSE
      || strpos($file, '/modules/') !== FALSE
      || strpos($file, 'misc/') !== FALSE ) {
      unset($js[$file]);
    }
    else {
      //print_r('<pre>' . print_r($js[$file], TRUE) . '</pre>');
      if ($js[$file]['type'] == 'setting') {
        foreach ($value['data'] as $data_values) {
          $settings += $data_values;
        }
        unset($js[$file]);
      }
    }
  }
  
  //print('<pre>' . print_r($settings, TRUE) . '</pre>');
  
  drupal_add_js('var drupal_extend_settings = ' . drupal_json_encode($settings) . ';', array('type' => 'inline'));
  
  //unset the original contextual link file
  /*if(module_exists('contextual')){
    unset(
      $js['modules/contextual/contextual.js']
    );
    drupal_add_js( drupal_get_path('theme', 'mothership') . '/js/contextual.js' );

  }*/
  $theme_path = drupal_get_path('theme', 'keel');
  drupal_add_js($theme_path . '/_/bower_components/requirejs/require.js',
                array('group' => JS_LIBRARY, 'every_page' => TRUE, 'weight' => -50));
  drupal_add_js($theme_path . '/_/assets/js/main.js',
                array('group' => JS_LIBRARY, 'every_page' => TRUE, 'weight' => -49));

}

