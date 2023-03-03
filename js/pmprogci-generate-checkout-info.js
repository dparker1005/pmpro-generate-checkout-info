/*
	Note that the PMPro Pay by Check plugin only loads this JS on the edit membership level page.
*/
function generate_checkout_info() {
    jQuery.noConflict().ajax({
      url: 'https://randomuser.me/api/?nat=us',
      dataType: 'json',
      success: function(data) {
        var results = data['results'][0];

        // Generate email address
        var username = results.name.first + '.' + results.name.last;
        var base_email = jQuery('#pmprogci-base-email').val();
        var at_index = base_email.indexOf("@");
        var email_prefix = base_email.substring(0, at_index).length > 0 ? base_email.substring(0, at_index) + '+' : '';
        var user_email = email_prefix + username + base_email.substring(at_index);

        jQuery('#username').val( username );
        jQuery('#password').val( username );
        jQuery('#password2').val( username );
        jQuery('#bemail').val( user_email );
        jQuery('#bconfirmemail').val( user_email );
        jQuery('#first_name').val( results.name.first );
        jQuery('#last_name').val( results.name.last );
        jQuery('#bfirstname').val( results.name.first );
        jQuery('#blastname').val( results.name.last );
        jQuery('#baddress1').val( results.location.street.number  + ' ' +  results.location.street.name );
        jQuery('#bcity').val( results.location.city );
        jQuery('#bstate').val( results.location.state );
        jQuery('#bzipcode').val( results.location.postcode );
        jQuery('#bphone').val( results.phone );
        jQuery('#AccountNumber').val( "4242424242424242" );
        jQuery('#ExpirationYear').val( "2028" );
        jQuery('#CVV').val( "123" );
      }
    });
}

jQuery(document).ready(function () {
	jQuery('#pmprogci-generate').click(function () {
		generate_checkout_info();
	});
});