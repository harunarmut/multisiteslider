jQuery(function($) {

// Slider 

	$(".desktop .sliderWidget .slider").hover(function() {
		$(this).find(".owl-nav div").stop().fadeIn();
	}, function() {
		$(this).find(".owl-nav div").stop().fadeOut();
	});

	var slidercarousel = $(".sliderWidget .slider .owl-carousel");
	slidercarousel.owlCarousel({
		loop:false,
		navText:"",
		autoplay:true,
		autoplayTimeout:6000,
		autoplayHoverPause:true,
		rewind:true,
		rewindNav:true,
		dots: true,
		responsive:{
			0:{
				items:1,
				nav:true
			},
		},
		onInitialized: makePages,
		onResized: makePages,
	});

	$( ".sliderWidget .owl-dot" ).hover(function() {
		order = $(this).index();
		slidercarousel.trigger("to.owl.carousel", [order, 500, true]);
	});

	function makePages() {
		counter = 1;
		$(".sliderWidget .item").each( function(i) {
			if(counter == $(".sliderWidget").attr("data-addorder")) {
				text = "R";
			} else {
				text = counter;
			}
			$('.sliderWidget .slider1 .owl-dot').eq(counter-1).html(text);
			counter++;
		});
	}







//
});