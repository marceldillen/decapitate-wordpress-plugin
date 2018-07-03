<?php defined( 'ABSPATH' ) || exit;

if ( ! function_exists('dwp_setup')) {
  function dwp_setup() {
    dwp_set_default_settings();
  }
}

if ( ! function_exists('dwp_set_default_settings')) {
  
  function dwp_set_default_settings() {
    foreach(dwp_get_settings() as $name => $setting) {
      if (get_option($name) === false) {
        
        update_option($name, $setting['default_value']);
      }
    }
  }
}
