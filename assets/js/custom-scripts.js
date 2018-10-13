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
		if ( $('.posts article').length < 3 ) {
			$('.posts .load-more').remove();
		}


		var showPostsNum = 3;
		if ( $( window ).width() <= 992 ) {
			showPostsNum = 4; 
		}
		
		$('.posts article').each(function(index, el) {
			if ( index > ( showPostsNum - 1 ) ) {
				$(this).hide();
			}
		});

		$('.posts .load-more i, posts .load-more span').click(function(event) {
			event.preventDefault();

			let container = $(this).closest('.posts');
			container.find('article:hidden:lt(3)').show();

			if ( container.find('article:hidden').length == 0 ) {
				$(this).closest('.load-more').hide();
			};

		});


		// Advanced content scroll
		$( '.advanced-content .headings-list ul li' ).click(function(event) {
			var id = $(this).attr( 'id' );

			$('html, body').animate({
		        scrollTop: $('.content-item[content-id="' + id + '"]').offset().top
		    }, 500);

		});


		// Load full image
		$( '.gallery-section .image-wrap' ).click(function(event) {
			var fullImageUrl = $(this).find('img').attr('full-image');

			$( '.full-image-container img' ).attr( 'src', fullImageUrl );
			$( '.full-image-container' ).show();
			$( '.full-image-overlay' ).show();
		});

		$( '.full-image-overlay' ).click(function(event) {
			$( '.full-image-container' ).hide();
			$( '.full-image-overlay' ).hide();
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