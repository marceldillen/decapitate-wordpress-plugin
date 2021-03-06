<?php defined( 'ABSPATH' ) || exit;

if ( ! function_exists('dwp_get_settings')) {
  function dwp_get_settings() {
    return array(
      'dwp_redirect_to_backend' => array(
        'option_group' => 'dwp_settings_group',
        'default_value' => '1',
        'callback' => 'dwp_sanitize_checkbox'
      ),
      "dwp_redirect_url" => array(
        'option_group' => 'dwp_settings_group',
        'default_value' => ''
      ),
      "dwp_redirect_status_code" => array(
        'option_group' => 'dwp_settings_group',
        'default_value' => '307'
      ),
    );
  }
}

if ( ! function_exists('dwp_settings_link')) {
  function dwp_settings_link( $links ) {
    $settings_link = '<a href="options-general.php?page=wordpress-decapitation-plugin">' . __( 'Settings' ) . '</a>';
    array_unshift( $links, $settings_link );
    return $links;
  }
}