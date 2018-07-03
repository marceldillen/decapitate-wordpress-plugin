<?php 

/*
Plugin Name: Wordpress Decapitation Plugin
Plugin URI: https://github.com/marceldillen/wordpress-decapitation-plugin
Description: Decapitate your Wordpress installation like it's in Sleepy Hollow!
Author: Marcel Dillen
Version: 1.0.0
Author URI: https://marceldillen.com
*/

defined( 'ABSPATH' ) || exit;

include_once plugin_dir_path(__FILE__).'functions/setup.php';
include_once plugin_dir_path(__FILE__).'functions/settings.php';
include_once plugin_dir_path(__FILE__).'functions/status_codes.php';
include_once plugin_dir_path(__FILE__).'functions/redirect.php';
include_once plugin_dir_path(__FILE__).'functions/settings_page.php';
include_once plugin_dir_path(__FILE__).'functions/scripts.php';

add_action ('after_setup_theme', 'dwp_setup');

dwp_init();

function dwp_init() {
  if ( ! is_admin()) {
    add_filter( 'wp', 'dwp_redirect_user', 0 );
    return;
  }
  
  add_action( 'admin_menu', 'dwp_add_admin_options' );
  add_action( 'admin_init', 'dwp_register_settings' );
}