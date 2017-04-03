//if 'contact' button is pressed, open popup
$('#open-popup').click(function(){
	$('#popup').css('display', 'flex');
});
//if close 'x' is clicked, close popup
$('.close').click(function(){
	$('#popup').css('display', 'none');
});
/*
//if the user clicks out of the popup, close popup
$(document).click(function(event) { 
	if(!$(event.target).closest('#open-popup').length) {
		if($('#popup').is(":visible")) {
			$('#popup').css('display', 'none');
		}
	}        
});*/