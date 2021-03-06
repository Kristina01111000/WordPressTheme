$(function() {
	// cache window object (makes it run faster)
	var $window = $(window);
	
	// parallax background
	$('section[data-type="background"]').each(function() {
		var $bgobj = $(this); // assigning the background object
		
		$(window).scroll(function() {
			// scroll the background, y is negative b/c going up
			var yPos = -($window.scrollTop()/ $bgobj.data('speed'));
			// make final background position -> usable in css
			var coords = '50% ' + yPos + 'px';
			// move background
			$bgobj.css({backgroundPosition: coords});
		});
	});
});
