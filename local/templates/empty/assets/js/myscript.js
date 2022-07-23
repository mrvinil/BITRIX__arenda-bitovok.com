$(document).ready(function(){
	//Скрол по клику
	$('.header__menu li a').click( function(){ // ловим клик по ссылке вложенную в селектор header__menu
		var scroll_el = $(this).attr('href'); // возьмем содержимое атрибута href, должен быть селектором, т.е. например начинаться с # или .
		if ($(scroll_el).length != 0) { // проверим существование элемента, чтобы избежать ошибки
			$('html, body').animate({ scrollTop: $(scroll_el).offset().top-130}, 500); // анимируем скроолинг к
			// элементу scroll_el
		}
		return false; // выключаем стандартное действие
	});
	
	//Slick Slider кастомная навигация и счетчик слайдов
	// О бытовках
	$('#slider__about-bit .slider__list').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		dots: false,
		autoplay: true,
		autoplaySpeed: 7000,
		prevArrow: '<button type="button" class="navigation-prev button-arrow__blue fal fa-chevron-left"></button>',
		nextArrow: '<button type="button" class="navigation-next button-arrow__blue fal fa-chevron-right"></button>',
		appendDots:$('#slider-dots__about-bit'),
		customPaging: function (slider, i)
		{
			return '<button></button>';
		},
		responsive: [
			{
				breakpoint: 481,
				settings: {
					arrows: false,
					dots: true,
				}
			}
		]
	});
	$("#slider__about-bit .slider__list").on('init reInit beforeChange', function(event, slick, currentSlide, nextSlide) {
		var i = (nextSlide ? nextSlide : 0) + 1;
		$('#slider__about-bit .slider__count span').html(i);
	});
	
	// О нас
	$('#slider__about-as .slider__list').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		dots: false,
		autoplay: true,
		autoplaySpeed: 7000,
		prevArrow: '<button type="button" class="navigation-prev button-arrow__blue fal fa-chevron-left"></button>',
		nextArrow: '<button type="button" class="navigation-next button-arrow__blue fal fa-chevron-right"></button>',
		appendDots:$('#slider-dots__about-as'),
		customPaging: function (slider, i)
		{
			return '<button></button>';
		},
		responsive: [
			{
				breakpoint: 481,
				settings: {
					arrows: false,
					dots: true,
				}
			}
		]
	});
	$("#slider__about-as .slider__list").on('init reInit beforeChange', function(event, slick, currentSlide, nextSlide) {
		var i = (nextSlide ? nextSlide : 0) + 1;
		$('#slider__about-as .slider__count span').html(i);
	});
	
	
	var slick_view = document.querySelectorAll('.card__img-slider');
	for (var i = 0; i < slick_view.length; i++) {
		$(slick_view[i]).slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: false,
			dots: true,
			autoplay: true,
			autoplaySpeed: 5000,
		});
	}
	
});