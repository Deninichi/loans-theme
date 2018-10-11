(function($) {
  
	$(document).ready(function(){

		//animate hamburger icon
		$('header .navbar-toggler').click(function() {
			$(this).toggleClass('opened');
		});	



		// read more feature
		var paragraphs = $('.description.has-read-more > *');

		setTimeout(function(){
			closeReadMore( paragraphs );
		}, 1000 );

		$('body').on( 'click', '.description.has-read-more .read-more', function(event) {
			event.preventDefault()

			if ( $(this).hasClass('closed') ) {
				openReadMore( paragraphs, $(this) )
			} else {
				closeReadMore( paragraphs );
			}

		});


		// Load more
		$('.posts article').each(function(index, el) {
			if ( index > 2 ) {
				$(this).hide();
			};
		});

		$('.posts .load-more i, posts .load-more span').click(function(event) {
			event.preventDefault();

			let container = $(this).closest('.posts');
			container.find('article:hidden:lt(3)').show();

			if ( container.find('article:hidden').length == 0 ) {
				$(this).closest('.load-more').hide();
			};

		});

	});


	function closeReadMore( paragraphs ){

		paragraphs.last().find('.read-more').remove();

		if ( paragraphs.length > 2 ) {
			paragraphs.eq(1).append(' <a class="read-more custom-underline closed" href=""><span class="text-wrapper">Läs mer</span> <span class="icon-wrapper icon-right"><i class="fas fa-angle-down"></i></span></a>')
		}

		paragraphs.each(function(index, el) {
			if( index > 1 ){
				$(this).hide()
			}
		});
	}

	function openReadMore( paragraphs, readmore ){
		readmore.remove();
		paragraphs.show();
		paragraphs.last().append(' <a class="read-more custom-underline opened" href=""><span class="text-wrapper">Visa mindre</span> <span class="icon-wrapper icon-right"><i class="fas fa-angle-up"></i></span></a>')

	}


})(jQuery);