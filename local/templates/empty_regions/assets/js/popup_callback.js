$(document).ready(() => {
	
	// находим скрытые инпуты
	let productName = $(':hidden[name=productName]');
	let productPrice = $(':hidden[name=productPrice]');
	let productSize = $(':hidden[name=productSize]');
	
	// открываем попап и записываем в скрытые инпуты параметры товара
	$('.btn[data-target=callback]').click( function(event){
		event.preventDefault();
		productName.val($(this).siblings('.card__desc').find('.card__name').text());
		productPrice.val($(this).siblings('.card__desc').find('.card__price').text());
		productSize.val($(this).siblings('.card__desc').find('.card__property').text());
		callbackOpen();
	});
	
	// закрытие попапа при клике на кнопку закрытия
	$('.popup-callback__close').click(callbackClose);
	
	// закрытие попапа при клике вне попапа
	$(document).mouseup((e) => {
		let callback = $(".popup__container");
		if ($('.popup-callback').css('visibility') === 'visible') {
			if (!callback.is(e.target)
				&& callback.has(e.target).length === 0) {
				callbackClose();
			}
		}
	});
	
	// закрытие попапа при нажатии на клавишу Escape
	$(document).keydown(function(e) {
		if(e.key === 'Escape') {
			callbackClose();
		}
	});
	
	
	// функция открытия попапа
	function callbackOpen() {
		$('.popup-callback').addClass('popup_opened');
		setTimeout(() => {
			$('.popup-callback').css('visibility', 'visible');
		}, 300);
	}
	
	// функция закрытия попапа
	function callbackClose() {
		$('.popup-callback').removeClass('popup_opened');
		productName.val('');
		productPrice.val('');
		productSize.val('');
		setTimeout(() => {
			$('.popup-callback').css('visibility', 'hidden');
		}, 300);
	}
	
	// отправляем данные формы
	$("#popupcallback").on("submit", function(){
		$.ajax({
			type:'POST',
			url: '/webhook/new/product-arenda-webhook.php',
			data: $(this).serialize(),
			success: function(res){
				$('#callbackFirstForm').hide();
				$('#message').show();
				setTimeout( () => {
					$('#popupcallback')[0].reset();
					$('.popup-callback').css('visibility', 'hidden');
					$('#message').hide();
					$('#callbackFirstForm').show();
					callbackClose();
				}, 3000);
			},
			error: function (){
				alert("Ошибка");
			}
		});
		return false;
	});
});