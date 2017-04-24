$(document).ready(function() {
	if ($("#content").hasClass("home")) {
		$("header").css("display", "none");
		$(".menu-btn").click(function() {
			$("header").fadeIn();
			$(".menu-btn").fadeOut();
			$("header").focus();
		});
		$(".menu-btn").keypress(function(e){
	        if (e.which == 13){//Enter key pressed
	            $(".menu-btn").click();//Trigger search button click event
	        }
	    });
	}

	// local smooth scrolling
	$(function() {
		$('a[href*="#"]:not([href="#"])').click(function() {
			if (location.pathname.replace(/^\//,"") == this.pathname.replace(/^\//,"") && location.hostname == this.hostname) {
				var target = $(this.hash);
				target = target.length ? target : $("[name=" + this.hash.slice(1) +"]");
				if (target.length) {
					$("html, body").animate({
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
	if ($("#content").hasClass("home")) {
		if ( $(window).scrollTop() <= 0 ) {
			$("header").fadeOut();
			$(".menu-btn").fadeIn();
		} else {
			$("header").fadeIn();
			$(".menu-btn").fadeOut();
		}
	}
});
