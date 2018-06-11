jQuery( document ).ready(function() {
	
// Scroll down homepage arrow	
	jQuery('#scrolldown').click(function(){
	jQuery('html,body').animate({ scrollTop: jQuery(".pitch").offset().top });
	});
	
	
// Hamburger menu
	// Show on Click
	jQuery('#hamburger').click(function(){
		jQuery('#menu-menu').show(),
		jQuery('.socialmenu').show(),
		jQuery('#hamburger').hide(),
		jQuery('#menuclose').fadeIn(300);
	});
	
	//Hide on Click
	jQuery('#menuclose').click(function(){
		jQuery('#menu-menu').hide(),
		jQuery('.socialmenu').hide(),
		jQuery('#menuclose').hide(),
		jQuery('#hamburger').fadeIn(300);
	});
	
	
	
}); // End document ready function