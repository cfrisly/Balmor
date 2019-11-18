'use strict'

var window_w = $(window).innerWidth();

$(window).on('load', function() {
	/*--------------------
		Preloder
	----------------------*/
	$(".loader").fadeOut();
	$("#preloder").delay(400).fadeOut("slow");

	__portfolio(); // call portfolio function
});

(function($)) {

	/* -------------------
		Navigation
	----------------------*/
	$('.nav-switch').on('click', function(event) {
		$('.nav-menu').slideToggle(400);
		event.preventDefault();
	});

	/*---------------------
		Background set
	----------------------*/
	$('.set-bg').each(function() {
		var bg = $(this).data('setbg');
		$(this).css('background-image', 'url(' + bg + ')');
	});

	/* -----------------
		Hero Slider
	--------------------*/
	var hero_s = $(".hero-slider");
	hero_s.owlCarousel({
		loop: true,
		margin: 0,
		nav: true,
		item: 1,
		dots: false,
		animateOut: 'fadeOutRight',
		animateIn: 'fadeInLeft',
		navText: ['<i class="fa fa-long-arrow-left"></i> Prev', 'Next<i class="fa fa-long-arrow-right"></i>'],
		smartSpeed: 1200,
		autoHeight: false,
		//autoplay: true,
		mouseDrag: false,
		onInitialized: function() {
			var a = this.items().length;
			if (a < 10) {
				$("#snh-1").html("<span>01" + "</span>0" + a);
			} else {
				$("#snh-1").html("<span>01" + "</span>" + a);
			}
		}
	}).on("changed.owl.carousel", function(a){
		var b = --a.item.app, a = a.item.count;
		if (a < 10) {
			$("#snh-1").html("<span>0" + (1 > b ? b + a : b > a ? b - a : b) + "/ </span>0" + a);
		} else {
			$("#snh-1").html("<span> " +(1 > b ? b + a : b > a ? b - a : b) + "/ </span>" + a);
		}
	});
}