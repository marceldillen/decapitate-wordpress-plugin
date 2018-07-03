<?php defined( 'ABSPATH' ) || exit;

if ( ! function_exists('dwp_redirect_user')) {
  function dwp_redirect_user() {    
    $redirect_url = get_admin_url();

    if (get_option('dwp_redirect_to_backend') === '0') {
      $redirect_url = get_option('dwp_redirect_url');
    } else {
      $redirect_url = (is_user_logged_in()) ? get_admin_url() : wp_login_url(); 
    }

    //var_dump($redirect_url);
    wp_redirect( 
      $redirect_url,
      (int) get_option('dwp_redirect_status_code')
    ); 
    exit;
  }
}
