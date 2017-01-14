$(document).ready(function() {
	if ($('#content').hasClass('home')) {
		$('header').css('display', 'none');
		$('.menu-btn').click(function() {
			$('header').fadeIn();
		});
	}

	// local smooth scrolling
	$(function() {
		$("a[href*='#']:not([href='#'])").click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				if (target.length) {
					$('html, body').animate({
						scrollTop: target.offset().top
					}, 1000);
					return false;
				}
			}
		});
	});

	// init AOS
	AOS.init();
});

$(window).scroll( function() {
	if ($('#content').hasClass('home')) {
		if ( $(window).scrollTop() <= 0 ) {
			$('header').fadeOut();
		} else {
			$('header').fadeIn();
		}
	}
});
