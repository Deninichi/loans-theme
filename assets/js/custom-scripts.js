(function($) {
  
	$(document).ready(function(){

		//animate hamburger icon
		$('header .navbar-toggler').click(function() {
			$(this).toggleClass('opened');
		});	

	});

})(jQuery);