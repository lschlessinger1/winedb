
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
		$('li.headlink').hover(
	function() { $('ul', this).css('display', 'block'); },
	function() { $('ul', this).css('display', 'none'); });
	var name_default = "enter a name...";
	var vintage_default = "enter a vintage...";
	var region_default = "enter a region...";
	var country_default = "enter a country...";
	var wine_maker_default = "enter a wine maker/vineyard...";
	var supplier_default = "enter a supplier...";
	var price_default = "enter a price...";
	var lower_life_expectancy_default = "lower year";
	var upper_life_expectancy_default = "upper year";
	var color_default = "enter a color...";
	var grape_type_default = "enter a grape type...";
	var pct_alcohol_default = "enter a percent alcohol...";
	var quantity_default = "enter a quantity...";
	
	$('#wineName').attr('value', name_default).focus(function() {
		if($(this).val() == name_default){
			$(this).attr('value', '');
			
		}
	}).blur(function() {
		if($(this).val() == ''){
			$(this).attr('value', name_default);
		}
	});
	
	$('#wineVintage').attr('value', vintage_default).focus(function() {
		if($(this).val() == vintage_default){
			$(this).attr('value', '');
			
		}
	}).blur(function() {
		if($(this).val() == ''){
			$(this).attr('value', vintage_default);
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
	
	$('#wineCountry').attr('value', country_default).focus(function() {
		if($(this).val() == country_default){
			$(this).attr('value', '');
			
		}
	}).blur(function() {
		if($(this).val() == ''){
			$(this).attr('value', country_default);
		}
	});
	
	$('#wineMaker').attr('value', wine_maker_default).focus(function() {
		if($(this).val() == wine_maker_default){
			$(this).attr('value', '');
			
		}
	}).blur(function() {
		if($(this).val() == ''){
			$(this).attr('value', wine_maker_default);
		}
	});
	
	$('#wineSupplier').attr('value', supplier_default).focus(function() {
		if($(this).val() == supplier_default){
			$(this).attr('value', '');
			
		}
	}).blur(function() {
		if($(this).val() == ''){
			$(this).attr('value', supplier_default);
		}
	});
	
	$('#winePrice').attr('value', price_default).focus(function() {
		if($(this).val() == price_default){
			$(this).attr('value', '');
			
		}
	}).blur(function() {
		if($(this).val() == ''){
			$(this).attr('value', price_default);
		}
	});
	
	$('#wineLowerLifeExpectancy').attr('value', lower_life_expectancy_default).focus(function() {
		if($(this).val() == lower_life_expectancy_default){
			$(this).attr('value', '');
			
		}
	}).blur(function() {
		if($(this).val() == ''){
			$(this).attr('value', lower_life_expectancy_default);
		}
	});
	
	$('#wineUpperLifeExpectancy').attr('value', upper_life_expectancy_default).focus(function() {
		if($(this).val() == upper_life_expectancy_default){
			$(this).attr('value', '');
			//Upper life expectancy should be > current year (see top, the var is year)
		}
	}).blur(function() {
		if($(this).val() == ''){
			$(this).attr('value', upper_life_expectancy_default);
		}
	});
	
	
	$('#wineColor').attr('value', color_default).focus(function() {
		if($(this).val() == color_default){
			$(this).attr('value', '');
			
		}
	}).blur(function() {
		if($(this).val() == ''){
			$(this).attr('value', color_default);
		}
	});
	
	$('#wineGrapeType').attr('value', grape_type_default).focus(function() {
		if($(this).val() == grape_type_default){
			$(this).attr('value', '');
			
		}
	}).blur(function() {
		if($(this).val() == ''){
			$(this).attr('value', grape_type_default);
		}
	});
	
	$('#winePercentAlcohol').attr('value', pct_alcohol_default).focus(function() {
		if($(this).val() == pct_alcohol_default){
			$(this).attr('value', '');
			
		}
	}).blur(function() {
		if($(this).val() == ''){
			$(this).attr('value', pct_alcohol_default);
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
		if ($('#wineName').val() == name_default || typeof ($('#wineRegion').val()) !== 'string' || $('#wineName').val() === ''){
			console.log("Oops! Looks like you didn't enter a valid value for name.");
		} else if ($('#wineVintage').val() == vintage_default || isNaN($('#wineVintage').val()) || $('#wineVintage').val() === ''){
			console.log("Oops! Looks like you didn't enter a valid value for vintage.");
		} else if ($('#wineRegion').val() == region_default || typeof $('#wineRegion').val() !== 'string' && $('#wineRegion').val() === ''){// Why is typeof $('#wineRegion').val() a string when it can be a number? ------ if one checks out then they all are true... the if statements should be nested
			console.log("Oops! Looks like you didn't enter a valid value for region.");
		} else if ($('#wineCountry').val() == country_default && typeof ($('#wineCountry').val()) !== 'string' && $('#wineCountry').val() === ''){
			console.log("Oops! Looks like you didn't enter a valid value for country.");
		} else if ($('#wineMaker').val() == wine_maker_default && typeof($('#wineMaker').val())!== 'string' && $('#wineMaker').val() === ''){
			console.log("Oops! Looks like you didn't enter a valid value for wine maker.");
		} else if ($('#wineSupplier').val() == supplier_default && typeof($('#wineSupplier').val())!== 'string' && $('#wineSupplier').val() === ''){
			console.log("Oops! Looks like you didn't enter a valid value for supplier.");
		} else if ($('#winePrice').val() == price_default && isNaN($('#winePrice').val()) && $('#winePrice').val() === ''){
			console.log("Oops! Looks like you didn't enter a valid value for price.");
		} else if ($('#wineLowerLifeExpectancy').val() == lower_life_expectancy_default && isNaN($('#wineLowerLifeExpectancy').val()) && $('#wineLowerLifeExpectancy').val() === ''){
			console.log("Oops! Looks like you didn't enter a valid value for life expectancy.");
		} else if($('#wineUpperLifeExpectancy').val() == upper_life_expectancy_default && isNaN($('#wineUpperLifeExpectancy').val()) && $('#wineUpperLifeExpectancy').val() === ''){
			console.log("Oops! Looks like you didn't enter a valid value for life expectancy.");
		} else if ($('#wineColor').val() == color_default && typeof($('#wineColor').val())!== 'string' && $('#wineColor').val() === ''){
			console.log("Oops! Looks like you didn't enter a valid value for color.");
		} else if ($('#wineGrapeType').val() == grape_type_default && typeof($('#wineGrapeType').val())!== 'string' && $('#wineGrapeType').val() === ''){
			console.log("Oops! Looks like you didn't enter a valid value for grape type.");
		} else if ($('#winePercentAlcohol').val() == pct_alcohol_default && isNaN($('#winePercentAlcohol').val()) && $('#winePercentAlcohol').val() === ''){
			console.log("Oops! Looks like you didn't enter a valid value for percent alcohol.");
		} else if ($('#wineQuantity').val() == quantity_default && isNaN($('#wineQuantity').val()) && $('#wineQuantity').val() === ''){
			console.log("Oops! Looks like you didn't enter a valid value for quantity.");
		} else {
			console.log("it all checks out");
		}
		/* inputVal = 
		switch (n) {
		   case vintage_default:
			  alert("It was "+ vintage_default);
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
	/*$(function() {
		$('#wineId').autocomplete({			
			source: "autocomplete.php",
			minLength: 2
		}); //autocompletion
		$('#wineId').click(function() {
			console.log("the input has been clicked.");
			console.log($(this).val());
		});
	});*/
	$(':text').focusin(function() {
		$(this).css('background-color', '#EDEDED');
	});
	$(':text').blur(function() {
		$(this).css('background-color', 'white');
	});
});