<?php defined( 'ABSPATH' ) || exit;

if ( ! function_exists('dwp_add_admin_scripts')) {
  function dwp_add_admin_scripts() {  
    wp_register_script(
      'dwp_script', 
      plugins_url('assets/js/dwp_scripts.js', __DIR__), 
      array('jquery'),
      '1.0', 
      true
    );
    
    wp_enqueue_script('dwp_script');
  }
}
