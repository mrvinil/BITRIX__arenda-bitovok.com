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
});