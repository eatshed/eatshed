jQuery(function($){
	$(document).ready(function() {
		$(window).load(function() {
			$('.carousel').owlCarousel({
				stagePadding: 0,
				items: 1,
				loop: true,
				margin:0,
				singleItem:true,
				nav:true,
				navText: [$('.carousel__arrow--next'),$('.carousel__arrow--prev')],
				dots:false
			});
			$('.image-carousel__container').owlCarousel({
				stagePadding: 0,
				items: 1,
				loop: true,
				margin:0,
				singleItem:true,
				nav:true,
				navText: [$('.carousel__arrow--next'),$('.carousel__arrow--prev')],
				dots:false
			});
		});
		$('.header__burger').click(function(){
			$(this).toggleClass('header__burger--active');
			$('.header__nav--blog').toggleClass('header__nav--blog--active')
			return false;
		  });

		  $('.more-trigger').click(function(){
			$('.more-menu').toggleClass('is-active');
			return false;
		  });
	});
});

