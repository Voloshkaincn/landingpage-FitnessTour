jQuery(document).ready(function($) {

	$("#fullpage").fullpage({
	});

  	$('.post-slider').slick({
	    slidesToShow: 2,
	    dots: true,
	    arrows: false
	});
	$('.post-slider__header .slider__prev').on('click', function(){
		$('.post-slider').slick('slickPrev');
	});
	$('.post-slider__header .slider__next').on('click', function(){
		$('.post-slider').slick('slickNext');
	});

  	$('.views__slider').slick({
	    slidesToShow: 3,
	    dots: true,
	    arrows: false
	});
	$('.views-slider__header .slider__prev').on('click', function(){
		$('.views__slider').slick('slickPrev');
	});
	$('.views-slider__header .slider__next').on('click', function(){
		$('.views__slider').slick('slickNext');
	});


})