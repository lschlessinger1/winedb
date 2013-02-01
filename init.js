
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
	
	$(':text').focusin(function() {
		$(this).css('background-color', '#EDEDED');
	});
	$(':text').blur(function() {
		$(this).css('background-color', 'white');
	});
	
	$('#wineName').keyup(function() {
		search_wine = $(this).val();
		$("#resultTable table:contains('"+search_wine +"')").addClass('highlight');
	});
});