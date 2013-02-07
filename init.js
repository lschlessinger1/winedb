
$(document).ready(function() {
	$('#header').fadeIn('fast');
	var currentTime = new Date()
	var year = currentTime.getFullYear()
	document.getElementById('year').innerHTML = year;
	
	var search_default = 'Search for a wine...';
	$('input[type="wineSearch"]').attr('value', search_default).focus(function() {
		if($(this).val() == search_default){
			$(this).attr('value', '');
			
		}
	}).blur(function() {
		if($(this).val() == ''){
			$(this).attr('value', search_default);
		}
	});
	
	var year_default = "enter a year...";
	var region_default= "enter a region...";
	var quantity_default= "enter a quantity...";
	$('#wineYear').attr('value', year_default).focus(function() {
		if($(this).val() == year_default){
			$(this).attr('value', '');
			
		}
	}).blur(function() {
		if($(this).val() == ''){
			$(this).attr('value', year_default);
		}
	});
	$('#wineRegion').attr('value', region_default).focus(function() {
		if($(this).val() == region_default){
			$(this).attr('value', '');
			
		}
	}).blur(function() {
		if($(this).val() == ''){
			$(this).attr('value', region_default);
		}
	});
		$('#wineQuantity').attr('value', quantity_default).focus(function() {
			if($(this).val() == quantity_default){
				$(this).attr('value', '');
			}
	}).blur(function() {
		if($(this).val() == ''){
			$(this).attr('value', quantity_default);
		}
	});
	$('#submit').mouseenter(function() { //double check that a value has been entered for each field
		if ($('#wineYear').val() == year_default || isNaN($('#wineYear').val()) || $('#wineYear').val() === ''){
			console.log("Oops! Looks like you didn't enter a valid value for year.");
		 } else if ($('#wineRegion').val() == region_default || typeof $('#wineRegion').val() !== 'string' || $('#wineRegion').val() === ''){// Why is typeof $('#wineRegion').val() a string when it can be a number? ------ if one checks out then they all are true... the if statements should be nested
			console.log("Oops! Looks like you didn't enter a valid value for region.");
		} else if ($('#wineQuantity').val() == quantity_default || isNaN($('#wineQuantity').val()) || $('#wineQuantity').val() === ''){
			console.log("Oops! Looks like you didn't enter a valid value for quantity.");
		} else {
			console.log("it all checks out");
		}
		/* inputVal = 
		switch (n) {
		   case year_default:
			  alert("It was "+ year_default);
			  break;
		   case region_default:
			  alert("It was " + region_default);
			  break;
		   case quantity_default:
				alert("It was " + quantity_default);
			  break;
		   default:
			  alert("successful submit.");
			  break;
		}*/
	});
	
	$(':text').focusin(function() {
		$(this).css('background-color', '#EDEDED');
	});
	$(':text').blur(function() {
		$(this).css('background-color', 'white');
	});
});