jQuery(document).ready(function($) {

	$("#fullpage").fullpage({
		anchors: ['titleSection', 'infoSecondarySection', 'aboutTourSection', 'priceSection', 'trainersSection', 'programSection', 'planSection', 'reportSection', 'viewsSection', 'endSection'],
		//menu: '#menu',
		onLeave: function(index, nextIndex, direction){
			var leavingSection = $(this);
			if(index == 1 && direction =='down'){
				$('.header').addClass('fixed');
			}
			if(index == 2 && direction =='up'){
				$('.header').removeClass('fixed');
			}
		},
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