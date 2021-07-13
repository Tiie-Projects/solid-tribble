jQuery(function() {
	var sticky_navigation_offset_top = jQuery('#nav_id').offset().top;
	var sticky_navigation = function(){
		var scroll_top = jQuery(window).scrollTop();
		if (scroll_top > sticky_navigation_offset_top) { 
			jQuery('#nav_id').addClass('sticky');
			jQuery('header').addClass('push');
		} else {
			jQuery('#nav_id').removeClass('sticky');
			jQuery('header').removeClass('push');
		}   
	};
	sticky_navigation();
	jQuery(window).scroll(function() {
		 sticky_navigation();
	});
	jQuery('a[href="#"]').click(function(event){ 
		event.preventDefault(); 
	});	
});