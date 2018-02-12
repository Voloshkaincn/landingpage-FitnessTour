jQuery(document).ready(function($) {

	$("#fullpage").fullpage({
		anchors: ['okmiTour', 'beSlim', 'aboutTourSection', 'priceSection', 'trainersSection', 'afterTrainersSection', 'programSection', 'planSection', 'photoSection', 'viewsSection', 'endSection'],
		scrollBar: true,
		responsiveHeight: 767,
		responsiveWidth: 576,
		onLeave: function(index, nextIndex, direction){
			var leavingSection = $(this);
			if(index == 1 && direction =='down'){
				$('.scroll-up').addClass('show');
			} else if(index == 7) {
				//$('.program__list').scrollTop(0);
			} else if(index == 11) {
				$('.scroll-up').removeClass('position-up');
			}
		},
		afterLoad: function(anchorLink, index){
			var loadedSection = $(this);
			if(index == 1){
				$('.scroll-up').removeClass('show');
				$('.main-date').addClass('anim');
				$('.main-title').addClass('anim');
			} else if(anchorLink == 'endSection') {
				$('.scroll-up').addClass('position-up');
			}
		},
		//scrollOverflow: true,
		//scrollOverflowReset: true,
		normalScrollElements: '.program__list'

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


	$('.show-program').on('click', function(){
		$('.program .hide').removeClass('hide');
		$('.list-days').removeClass('list-fadeout');
		$(this).hide('300')
	});

	//Scrolling  program__list
	// $(".program__list").scroll(function () {
	// 	var block_end = Math.floor($('.program__list .scroll-content').height() - $(this).height());
	// 	console.log(block_end);
	// 	console.log($(this).scrollTop());
	// 	if($(this).scrollTop() >= block_end){
	// 		//alert("end");
	// 	}
	// });


    //Sending message

    $(".bright-btn").click(
        function(){
            var number = $(this).data("form");
            sendAjaxForm('send-form-'+number, 'send.php');
            return false;
        }
    );

    // Получение ответа и вывод сообщения в модальное окно
    function sendAjaxForm(ajax_form, url) {
        $.ajax({
            url:     url, //url страницы (action_ajax_form.php)
            type:     "POST", //метод отправки
            dataType: "html", //формат данных
            data: $("."+ajax_form).serialize(),  // Сеарилизуем объект
            success: function(response) { //Данные отправлены успешно
                var result = $.parseJSON(response);
                $('.bright-btn').blur();
                $("."+ajax_form)[0].reset();
                alert(result.message);

            },
            error: function(response) {
                // Данные не отправлены
                var result = $.parseJSON(response.responseText);
                $('.bright-btn').blur();
                $("."+ajax_form)[0].reset();
                alert(result.message);
            }
        });
    }


});