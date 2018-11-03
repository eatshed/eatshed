jQuery(function($){
	$(document).ready(function() {
		$(window).load(function() {
			$('.carousel').owlCarousel({
				stagePadding: 0,
				items: 1,
				loop:false,
				margin:0,
				singleItem:true,
				nav:true,
				navText: [$('.carousel__arrow--next'),$('.carousel__arrow--prev')],
				dots:false,
				loop: true
			});
			$('.image-carousel__container').owlCarousel({
				stagePadding: 0,
				items: 1,
				loop:false,
				margin:0,
				singleItem:true,
				nav:true,
				navText: [$('.carousel__arrow--next'),$('.carousel__arrow--prev')],
				dots:false
			});
		});
	});
});

