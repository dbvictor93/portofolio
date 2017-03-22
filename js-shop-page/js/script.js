jQuery(document).ready(function() {

	jQuery('button').click(function() {
		var position = jQuery(this).val();
		var price = jQuery(this).parent().find('h3 span').text();
		var name = jQuery(this).parent().find('h2').text();
		var options = jQuery(this).parent().find('select').val();
		var totalP = options * price;

		if(options == 0){
				jQuery('article h2').html(`${name}..Please, chose your country`);
		} else {
			jQuery('article h2').html(`You chose: ${name} and the total price is: ${totalP} MDL`);
		}

	});
	
	});
