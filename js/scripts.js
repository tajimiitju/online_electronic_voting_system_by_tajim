jQuery(document).ready(function(){
	jQuery(".amader-slider").owlCarousel({
		'items' : 1,
		'itemsDesktop' : [900, 3],
		'itemsDesktopSmall' : [700, 2],
		'itemsTablet' : [400, 1],
		'autoPlay' : 3000,
		'stopOnHover' : true
	});
	
	
	jQuery(".previous-slide").click(function(){
		jQuery(".amader-slider").trigger('owl.prev');
		
		return false;
	});
	
	jQuery(".next-slide").click(function(){
		jQuery(".amader-slider").trigger('owl.next');
		
		return false;
	});
	
	
});