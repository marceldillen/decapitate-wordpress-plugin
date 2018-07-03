<?php defined( 'ABSPATH' ) || exit;

if ( ! function_exists('dwp_add_admin_options')) {
  function dwp_add_admin_options() {
    $hook = add_options_page(
      'Decapitation Settings', 
      __('Decapitation Settings', 'dwp'), 
      'administrator', 
      'wordpress-decapitation-plugin-options', 
      'dwp_show_admin_form'
    );

    add_action( 'load-'. $hook, 'dwp_add_admin_scripts' );  
  }
}

if ( ! function_exists('dwp_register_settings')) {
  function dwp_register_settings() {
    foreach(dwp_get_settings() as $name => $setting) {
      register_setting( 
        $setting['option_group'], 
        $name, 
        (isset($setting['callback']) && ! empty($setting['callback'])) ? $setting['callback'] : null );
    }
  }
}

if ( ! function_exists('dwp_show_admin_form')) {
  function dwp_show_admin_form() {
    include plugin_dir_path( __DIR__ ).'templates/admin_settings_page.php';
  }
}

if ( ! function_exists('dwp_sanitize_checkbox')) {
  function dwp_sanitize_checkbox( $input ) { 
    return ($input) ? '1' : '0';
  }
}

if ( ! function_exists('dwp_sanitize_checkbox')) {
  function dwp_sanitize_checkbox( $input ) { 
    return ($input) ? '1' : '0';
  }
}