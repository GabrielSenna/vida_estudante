$(document).ready(function() {
	if($( window ).width() > 1900){
		$('.side-bar').show();
	}
	$('.side-bar-btn-open.close').click(function() {
		$('.side-bar').slideToggle('slow');

	});
	
});