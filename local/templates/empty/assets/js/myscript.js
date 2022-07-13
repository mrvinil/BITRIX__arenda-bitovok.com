$(function() {
	$('#main-menu').smartmenus({
		markCurrentItem: true,
		subMenusMaxWidth: '30em',
		subMenusMinWidth: '280px',
		subMenusSubOffsetY: -21,
		showTimeout: 150,
		hideTimeout: 10
	});
});
$(function() {
	$('#main-menu_tablet').smartmenus({
		markCurrentItem: true,
		subMenusMaxWidth: '30em',
		subMenusMinWidth: '280px',
		subMenusSubOffsetY: -21,
		showTimeout: 150,
		hideTimeout: 10
	});
});

// burger-menu
// $(document).ready(function(){
// 	$('.burger-menu').click(function(){
// 		$(this).toggleClass('burger-menu_open');
// 	});
// });


// mmenu
document.addEventListener(
	"DOMContentLoaded", () => {
		new Mmenu( "#header-menu_mobile", {
			// options
			"extensions": [
				"position-top",
				"theme-white"
			],
			"navbars": [
				{
					"position": "top",
					"content": [
						"prev",
						"title",
						"close"
					]
				}
			],
			navbar: {
				title: 'Меню'
			}
		}, {
			// configuration
			offCanvas: {
				page: {
					selector: "#wrapper"
				},
				menu: {
					insertSelector: "body"
				}
			},
			classNames: {
				selected: "active"
			}
		});
	}
);


$(document).ready(function () {
	//popup callback magnificPopup
	$('.popup-callback').magnificPopup({
		type: 'ajax',
		
		fixedContentPos: false,
		fixedBgPos: true,
		
		overflowY: 'auto',
		
		closeBtnInside: true,
		preloader: false,
		
		midClick: true,
		removalDelay: 300,
		mainClass: 'my-mfp-zoom-in'
	});
	
	//Hamburger Menu
	var $hamburger = $(".hamburger");
	$hamburger.on("click", function (e) {
		$hamburger.toggleClass("is-active");
	});
	
	//Top menu
	$(".top-menu li").hover(function () {
		$(this).children("ul").stop().delay(100).animate({height: "toggle", opacity: "toggle"}, 100);
	});
	
	//Mobile Menu
	jQuery(document).ready(function ($) {
		$("#my-menu").mmenu({
			"extensions": [
				
				"pagedim-black"
			],
			"iconPanels": true
		});
	});
	
	//Slick Slider 
	$('.main-slider').slick({
		dots: true,
		infinite: true,
		speed: 500,
		fade: true,
		cssEase: 'linear',
		arrows: false,
		autoplay: true,
		autoplaySpeed: 2000
	});
	
	//Slick Slider с доп картинками
	$('.slider-for').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		asNavFor: '.slider-nav'
	});
	$('.slider-nav').slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		asNavFor: '.slider-for',
		dots: false,
		centerMode: false,
		focusOnSelect: true
	});


	//Slick Slider кастомная пагинация
	$('.slider-index').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: true,
		infinite: true,
		speed: 500,
		fade: true,
		cssEase: 'linear',
		arrows: false,
		autoplay: true,
		autoplaySpeed: 2000,
		customPaging: function (slider_index, i)
		{
			return '';
		},
		appendDots:$('.slider-index__pagination')
	});
	
	//Slick Slider кастомная навигация
	$('.reviewSlider').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		dots: false,
		infinite: true,
		speed: 500,
		autoplay: false,
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1
				}
			}
		],
		prevArrow: '<button type="button" class="navigation-prev button-arrow__blue fas fa-arrow-left"></button>',
		nextArrow: '<button type="button" class="navigation-next button-arrow__blue fas fa-arrow-right"></button>'
	});
	
});

//load-more
$(function () {
	$(".load-more").slice(0, 3).show();
	$("#loadMore").on('click', function (e) {
		e.preventDefault();
		$(".load-more:hidden").slice(0, 3).slideDown();
		if ($(".load-more:hidden").length == 0) {
			$("#load").fadeOut('slow');
		}
		$('html,body').animate({
			scrollTop: $(this).offset().top
		}, 1500);
	});
});

$(document).ready(function(){
	//Скрол по клику
	$('.top--menu a').click( function(){ // ловим клик по ссылке с классом go_to
		var scroll_el = $(this).attr('href'); // возьмем содержимое атрибута href, должен быть селектором, т.е. например начинаться с # или .
		if ($(scroll_el).length != 0) { // проверим существование элемента чтобы избежать ошибки
			$('html, body').animate({ scrollTop: $(scroll_el).offset().top-70}, 500); // анимируем скроолинг к
			// элементу scroll_el
		}
		return false; // выключаем стандартное действие
	});
});

//фикс шапки
jQuery(function (f) {
	let element = f('#stick');
	f(window).scroll(function () {
		element['fade' + (f(this).scrollTop() > 300 ? 'In' : 'Out')](300);
	});
});

// $(function() {
// 	//Фиксированая шапка
// 	// header2 заменить на свой класс
// 	if ($(window).scrollTop() > 5) {
// 		$(".header2").css("background-color", "rgba(0,0,0,.7)");
// 	} else {
// 		$(".header2").css("background-color", "transparent");
// 	}
	
// 	$(window).scroll(function () {
// 		var $this = $(this)
// 		if ($this.scrollTop() > 5) {
// 			$(".header2").css("background-color", "rgba(0,0,0,.7)");
// 		} else {
// 			$(".header2").css("background-color", "transparent");
// 		}
// 	});
// });

$(function() {
	//Меню
	$(".header__nav-open").click(function () {
			$(".header__nav").toggle(100);
			$(this).toggleClass("header__nav-open--close");
		});
	
	$(".header__nav a").click(function () {
		$(".header__nav").hide(100);
		$(".header__nav-open").removeClass("header__nav-open--close");
	});
});


//Аккардеон
!function (i) {
	var o, n;
	i(".header-menu__title").on("click", function () {
		o = i(this).parents(".header-menu__item"), n = o.find(".header-menu__sub-menu"),
			o.hasClass("header-menu__item_active") ? (o.removeClass("header-menu__item_active"),
				n.slideUp()) : (o.addClass("header-menu__item_active"), n.stop(!0, !0).slideDown(),
				//эти две строки отвечают за автозакрытие других блоков аакордеона. Удалить, если нужно рассыкрывать все блоки
				o.siblings(".header-menu__item_active").removeClass("header-menu__item_active").children(
					".header-menu__sub-menu").stop(!0, !0).slideUp())
	})
}(jQuery);

$(function () { //преобразуем img svg в инлайновый, и можем воздействовать на него через css, например менять цвет с помощью fill
	$('img.icon').each(function () {
		var $img = $(this);
		var imgClass = $img.attr('class');
		var imgURL = $img.attr('src');
		$.get(imgURL, function (data) {
			var $svg = $(data).find('svg');
			if (typeof imgClass !== 'undefined') {
				$svg = $svg.attr('class', imgClass + ' replaced-svg');
			}
			$svg = $svg.removeAttr('xmlns:a');
			if (!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
				$svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
			}
			$img.replaceWith($svg);
		}, 'xml');
	});
});

// Корректная высота окна vh в мобильных браузерах

// // Сначала мы получаем высоту окна просмотра и умножаем ее на 1%, чтобы получить значение для каждой единицы
// let vh = window.innerHeight * 0.01;
// // Затем мы устанавливаем значение в пользовательском свойстве --vh в корневой каталог документа
// document.documentElement.style.setProperty('--vh', `${vh}px`);
//
// // Мы слушаем событие resize
// window.addEventListener('resize', () => {
// 	// Мы выполняем тот же сценарий
// 	let vh = window.innerHeight * 0.01;
// 	document.documentElement.style.setProperty('--vh', `${vh}px`);
// });

// Или такой вариант попроще

// Сначала мы получаем высоту окна просмотра и умножаем ее на 1%, чтобы получить значение для каждой единицы
let vh = window.innerHeight * 0.01;
// Затем мы устанавливаем значение в пользовательском свойстве --vh в корневой каталог документа
document.documentElement.style.setProperty('--vh', `${vh}px`);