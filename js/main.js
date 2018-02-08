jQuery(document).ready(function($) {

	$("#fullpage").fullpage({
		anchors: ['titleSection', 'infoSecondarySection', 'aboutTourSection', 'priceSection', 'trainersSection', 'programSection', 'planSection', 'reportSection', 'viewsSection', 'endSection'],
		//scrollBar: true,
		responsiveHeight: 767,
		responsiveWidth: 576,
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
	    arrows: false,
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
	    arrows: false,
	   	responsive: [
		    {
		      breakpoint: 767,
		      settings: {
		        slidesToShow: 2,
		      }
		    },
		    {
		      breakpoint: 480,
		      settings: {
		        slidesToShow: 1,
		      }
		    }
  		]
	});
	$('.views-slider__header .slider__prev').on('click', function(){
		$('.views__slider').slick('slickPrev');
	});
	$('.views-slider__header .slider__next').on('click', function(){
		$('.views__slider').slick('slickNext');
	});


})