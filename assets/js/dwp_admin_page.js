(function($) {
  $(function(){

    var redirect_to_backend_input = $('#dwp_redirect_to_backend_input');
    var redirect_to_url_row = $("#dwp_redirect_url_row");

    redirect_to_backend_input.on('change', function() {
      if ( redirect_to_backend_input.prop('checked') ) {
        redirect_to_url_row.hide();
      } else {
        redirect_to_url_row.show();
      }
    })
  });
})(jQuery);