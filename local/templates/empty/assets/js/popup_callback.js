$(document).ready(() => {
	/*
	 * Поппап колбека
	 */
	
	$('a[data-target=callback]').click((e) => {
		e.preventDefault();
		callbackOpen();
	});
	
	$('.popup-callback__close').click(callbackClose);
	
	$(document).mouseup((e) => {
		let callback = $(".popup__container");
		if ($('.popup-callback').css('visibility') == 'visible') {
			if (!callback.is(e.target)
				&& callback.has(e.target).length === 0) {
				callbackClose();
			}
		}
	});
	
	$("#popupcallback").on("submit", function(){
		$.ajax({
			url: '/ajax/callback.php',
			data: $(this).serialize(),
			success: function(res){
				$('#callbackFirstForm').hide();
				$('#message').show();
				setTimeout( () => {
					$('#popupcallback')[0].reset();
					$('.popup-callback').css('visibility', 'hidden');
					$('#message').hide();
					$('#callbackFirstForm').show();
				}, 2000);
			}
		});
		return false;
	});
	
	function callbackOpen() {
		$('.popup-callback').addClass('popup_opened');
		setTimeout(() => {
			$('.popup-callback').css('visibility', 'visible');
		}, 300);
	}
	function callbackClose() {
		$('.popup-callback').removeClass('popup_opened');
		setTimeout(() => {
			$('.popup-callback').css('visibility', 'hidden');
		}, 300);
	}
	
	
	/*
	 * Поппап колбека со страницы обслуживание
	 */
	
	$('a[data-target=callbackService]').click((e) => {
		e.preventDefault();
		callbackServiceOpen();
	});
	
	$('.popup-callbackService__close').click(callbackServiceClose);
	
	$(document).mouseup((e) => {
		let callback = $(".popup__container");
		if ($('.popup-callbackService').css('visibility') == 'visible') {
			if (!callback.is(e.target)
				&& callback.has(e.target).length === 0) {
				callbackServiceClose();
			}
		}
	});
	
	$("#popupcallbackService").on("submit", function(){
		$.ajax({
			url: '/ajax/callbackService.php',
			data: $(this).serialize(),
			success: function(res){
				$('#callbackFirstFormService').hide();
				$('#messageService').show();
				setTimeout( () => {
					$('#popupcallbackService')[0].reset();
					$('.popup-callbackService').css('visibility', 'hidden');
					$('#message').hide();
					$('#callbackFirstForm').show();
				}, 2000);
			}
		});
		return false;
	});
	
	function callbackServiceOpen() {
		$('.popup-callbackService').addClass('popup_opened');
		setTimeout(() => {
			$('.popup-callbackService').css('visibility', 'visible');
		}, 300);
	}
	function callbackServiceClose() {
		$('.popup-callbackService').removeClass('popup_opened');
		setTimeout(() => {
			$('.popup-callbackService').css('visibility', 'hidden');
		}, 300);
	}
	
	
	/*
	 * Поппап демозапроса
	 */
	
	$('a[data-target=callbackDemo]').click((e) => {
		e.preventDefault();
		demoOpen();
	});
	
	$('.popup-demo__close').click(demoClose);
	
	$(document).mouseup((e) => {
		let callback = $(".popup__container");
		if ($('.popup-demo').css('visibility') == 'visible') {
			if (!callback.is(e.target)
				&& callback.has(e.target).length === 0) {
				demoClose();
			}
		}
	});
	
	$("#popupcallbackDemo").on("submit", function(){
		$.ajax({
			url: '/ajax/callbackDemo.php',
			data: $(this).serialize(),
			success: function(res){
				$('#callbackFirstFormDemo').hide();
				$('#messageDemo').show();
				setTimeout( () => {
					$('#popupcallbackDemo')[0].reset();
					$('.popup-demo').css('visibility', 'hidden');
					$('#message').hide();
					$('#callbackFirstForm').show();
				}, 2000);
			}
		});
		return false;
	});
	
	function demoOpen() {
		$('.popup-demo').addClass('popup_opened');
		setTimeout(() => {
			$('.popup-demo').css('visibility', 'visible');
		}, 300);
	}
	
	function demoClose() {
		$('.popup-demo').removeClass('popup_opened');
		setTimeout(() => {
			$('.popup-demo').css('visibility', 'hidden');
		}, 300);
	}
	
});