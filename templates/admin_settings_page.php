<div class="wrap">
  <h1>Decapitation Settings</h1>
  <form method="post" action="options.php"> 
    <?php 
      settings_fields( 'dwp_settings_group' );
      do_settings_sections( 'dwp_settings_group' );
    ?>
    <table class="form-table">
      <tr id="dwp_redirect_to_backend_row" valign="top">
        <th scope="row"><?php _e("Redirect to backend", "dwp") ?></th>
        <td>
          <input
            id="dwp_redirect_to_backend_input" 
            type="checkbox" 
            name="dwp_redirect_to_backend"
            value="1" 
            <?php checked( (get_option('dwp_redirect_to_backend') === '1' ) ) ?> />
        </td>
      </tr>
      <tr id="dwp_redirect_url_row" valign="top" style="<?php echo (get_option('dwp_redirect_to_backend') === '1') ? 'display: none;' : '' ?>">
        <th scope="row"><?php _e("Redirect to URL", "dwp") ?></th>
        <td>
          <input
            id="dwp_redirect_url_input" 
            type="text" 
            name="dwp_redirect_url"
            placeholder="https://example.com"
            value="<?php echo get_option('dwp_redirect_url') ?>" />
        </td>
      </tr>
      <tr id="dwp_redirect_status_code_row" valign="top">
        <th scope="row"><?php _e("Redirect status code", "dwp") ?></th>
        <td>
          <select id="dwp_redirect_status_code_input" name="dwp_redirect_status_code">
            <?php foreach(dwp_get_status_codes() as $code => $name) : ?>
              <option value="<?php echo $code ?>" <?php selected(get_option('dwp_redirect_status_code'), $code) ?>><?php echo $name ?></option>
            <?php endforeach; ?>
          </select>
        </td>
      </tr>
    </table>
    <?php
      submit_button(); 
    ?>
  </form>
</div>