(function( $ ) {
	'use strict';

	/**
	 * All of the code for your public-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */

	 $( window ).load(function() {

		var listUsers = $('#list-users');

		$.ajax({
			dataType: 'json',
			url: 'https://jsonplaceholder.typicode.com/users',
			success: function (data) {
				var output = '';
				
				$.each(data, function(i,user) {
					output += '<div class="list-item">';
					
					output += '<div><b>Name:</b> ' + user.name + '</div>';
					output += '<div><b>Username:</b> ' + user.username + '</div>';
					output += '<div><b>Email:</b> <a href="mailto:"' + user.email + '">' + user.email + '</a></div>';
					
					output += '<div><b>Address:</b><br>'
					output += user.address.street + '<br>';
					output += user.address.suite + '<br>';
					output += user.address.city + ' ' + user.address.zipcode + '<br>';
					output += 'lat: ' + user.address.geo.lat + '<br>';
					output += 'lng: ' + user.address.geo.lng;
					output += '</div>';

					output += '<div><b>Website:</b> ' + '<a href="' + user.website + '">' + user.website + '</a></div>';

					output += '<div><b>Company Information:</b><br>';
					output += 'Name: ' + user.company.name + '<br>';
					output += 'Catch Phrase: ' + user.company.catchPhrase + '<br>';
					output += 'BS: ' + user.company.bs;
					output += '</div>';

					output += '</div>';
				});

				listUsers.append(output)

			},
				error: function(jqXHR, textStatus, errorThrown) {
				alert('An error occured: ' + errorThrown);
			}
		});

	});

})( jQuery );
