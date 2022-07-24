$(document).ready(function () {
	$(".form-product-1 #form-send").click(function () {
		var title = $(".form-product-1 #product_title").html(),
			subtitle = $(".form-product-1 #product_sub-title").html(),
			phone = $(".form-product-1 #product_phone").val(),
			name = $(".form-product-1 #product_name").val(),
			size = $(".form-product-1 #product_size").val(),
			price = $(".form-product-1 .price-month").text(),
			utm = $(".form-product-1 #product_utm").val();
		if (!phone) {
			$(".form-product-1 #product_phone").addClass("not_phone");
			$(".form-product-1 #product_phone").prop("placeholder", "Введите номер телефона");
			setTimeout(function () {
				$(".form-product-1 #product_phone").removeClass("not_phone");
				$(".form-product-1 #product_phone").prop("placeholder", "+7 (___) ___-__-__");
			}, 2500);
		} else if (phone.length < 18) {
			$(".form-product-1 #product_phone").addClass("not_phone");
			$(".form-product-1 #product_phone").prop("value", "");
			$(".form-product-1 #product_phone").prop("placeholder", "Номер слишком короткий");
			setTimeout(function () {
				$(".form-product-1 #product_phone").removeClass("not_phone");
				$(".form-product-1 #product_phone").prop("placeholder", "+7 (___) ___-__-__");
			},2500);
		} else {
			$(".form-product-1 #product_phone").css("border-bottom", "1px solid #6b6b6b");
			$.ajax({
				url: "/webhook/product-arenda-webhook.php",
				type: "post",
				dataType: "json",
				data: {
					title: title,
					subtitle: subtitle,
					phone: phone,
					name: name,
					utm: utm,
					size: size,
					price: price
				},
				beforeSend: function (n, p, t) {
					$('.form-product-1 #form-send').attr('data-hover', 'Заявка отправлена!');
					$('.form-product-1 #form-send').attr('disabled', 'disabled').html('Заявка отправлена!');
				},
				success: function (n, p, t) {
					$('.form-product-1 #form-send').attr('data-hover', 'Заявка отправлена!');
					$('.form-product-1 #form-send').attr('disabled', 'disabled').html('Заявка отправлена!');
				}
			})
		}
	});
});

$(document).ready(function () {
	$(".form-product-2 #form-send").click(function () {
		var title = $(".form-product-2 #product_title").html(),
			subtitle = $(".form-product-2 #product_sub-title").html(),
			phone = $(".form-product-2 #product_phone").val(),
			name = $(".form-product-2 #product_name").val(),
			size = $(".form-product-2 #product_size").val(),
			price = $(".form-product-2 .price-month").text(),
			utm = $(".form-product-2 #product_utm").val();
		if (!phone) {
			$(".form-product-2 #product_phone").addClass("not_phone");
			$(".form-product-2 #product_phone").prop("placeholder", "Введите номер телефона");
			setTimeout(function () {
				$(".form-product-2 #product_phone").removeClass("not_phone");
				$(".form-product-2 #product_phone").prop("placeholder", "+7 (___) ___-__-__");
			}, 2500);
		} else if (phone.length < 18) {
			$(".form-product-2 #product_phone").addClass("not_phone");
			$(".form-product-2 #product_phone").prop("value", "");
			$(".form-product-2 #product_phone").prop("placeholder", "Номер слишком короткий");
			setTimeout(function () {
				$(".form-product-2 #product_phone").removeClass("not_phone");
				$(".form-product-2 #product_phone").prop("placeholder", "+7 (___) ___-__-__");
			},2500);
		} else {
			$(".form-product-2 #product_phone").css("border-bottom", "1px solid #6b6b6b");
			$.ajax({
				url: "/webhook/product-arenda-webhook.php",
				type: "post",
				dataType: "json",
				data: {
					title: title,
					subtitle: subtitle,
					phone: phone,
					name: name,
					utm: utm,
					size: size,
					price: price
				},
				beforeSend: function (n, p, t) {
					$('.form-product-2 #form-send').attr('data-hover', 'Заявка отправлена!');
					$('.form-product-2 #form-send').attr('disabled', 'disabled').html('Заявка отправлена!');
				},
				success: function (n, p, t) {
					$('.form-product-2 #form-send').attr('data-hover', 'Заявка отправлена!');
					$('.form-product-2 #form-send').attr('disabled', 'disabled').html('Заявка отправлена!');
				}
			})
		}
	});
});

$(document).ready(function () {
	$(".form-product-3 #form-send").click(function () {
		var title = $(".form-product-3 #product_title").html(),
			subtitle = $(".form-product-3 #product_sub-title").html(),
			phone = $(".form-product-3 #product_phone").val(),
			name = $(".form-product-3 #product_name").val(),
			size = $(".form-product-3 #product_size").val(),
			price = $(".form-product-3 .price-month").text(),
			utm = $(".form-product-3 #product_utm").val();
		if (!phone) {
			$(".form-product-3 #product_phone").addClass("not_phone");
			$(".form-product-3 #product_phone").prop("placeholder", "Введите номер телефона");
			setTimeout(function () {
				$(".form-product-3 #product_phone").removeClass("not_phone");
				$(".form-product-3 #product_phone").prop("placeholder", "+7 (___) ___-__-__");
			}, 2500);
		} else if (phone.length < 18) {
			$(".form-product-3 #product_phone").addClass("not_phone");
			$(".form-product-3 #product_phone").prop("value", "");
			$(".form-product-3 #product_phone").prop("placeholder", "Номер слишком короткий");
			setTimeout(function () {
				$(".form-product-3 #product_phone").removeClass("not_phone");
				$(".form-product-3 #product_phone").prop("placeholder", "+7 (___) ___-__-__");
			},2500);
		} else {
			$(".form-product-3 #product_phone").css("border-bottom", "1px solid #6b6b6b");
			$.ajax({
				url: "/webhook/product-arenda-webhook.php",
				type: "post",
				dataType: "json",
				data: {
					title: title,
					subtitle: subtitle,
					phone: phone,
					name: name,
					utm: utm,
					size: size,
					price: price
				},
				beforeSend: function (n, p, t) {
					$('.form-product-3 #form-send').attr('data-hover', 'Заявка отправлена!');
					$('.form-product-3 #form-send').attr('disabled', 'disabled').html('Заявка отправлена!');
				},
				success: function (n, p, t) {
					$('.form-product-3 #form-send').attr('data-hover', 'Заявка отправлена!');
					$('.form-product-3 #form-send').attr('disabled', 'disabled').html('Заявка отправлена!');
				}
			})
		}
	});
});

$(document).ready(function () {
	$(".form-product-4 #form-send").click(function () {
		var title = $(".form-product-4 #product_title").html(),
			subtitle = $(".form-product-4 #product_sub-title").html(),
			phone = $(".form-product-4 #product_phone").val(),
			name = $(".form-product-4 #product_name").val(),
			size = $(".form-product-4 #product_size").val(),
			price = $(".form-product-4 .price-month").text(),
			utm = $(".form-product-4 #product_utm").val();
		if (!phone) {
			$(".form-product-4 #product_phone").addClass("not_phone");
			$(".form-product-4 #product_phone").prop("placeholder", "Введите номер телефона");
			setTimeout(function () {
				$(".form-product-4 #product_phone").removeClass("not_phone");
				$(".form-product-4 #product_phone").prop("placeholder", "+7 (___) ___-__-__");
			}, 2500);
		} else if (phone.length < 18) {
			$(".form-product-4 #product_phone").addClass("not_phone");
			$(".form-product-4 #product_phone").prop("value", "");
			$(".form-product-4 #product_phone").prop("placeholder", "Номер слишком короткий");
			setTimeout(function () {
				$(".form-product-4 #product_phone").removeClass("not_phone");
				$(".form-product-4 #product_phone").prop("placeholder", "+7 (___) ___-__-__");
			},2500);
		} else {
			$(".form-product-4 #product_phone").css("border-bottom", "1px solid #6b6b6b");
			$.ajax({
				url: "/webhook/product-arenda-webhook.php",
				type: "post",
				dataType: "json",
				data: {
					title: title,
					subtitle: subtitle,
					phone: phone,
					name: name,
					utm: utm,
					size: size,
					price: price
				},
				beforeSend: function (n, p, t) {
					$('.form-product-4 #form-send').attr('data-hover', 'Заявка отправлена!');
					$('.form-product-4 #form-send').attr('disabled', 'disabled').html('Заявка отправлена!');
				},
				success: function (n, p, t) {
					$('.form-product-4 #form-send').attr('data-hover', 'Заявка отправлена!');
					$('.form-product-4 #form-send').attr('disabled', 'disabled').html('Заявка отправлена!');
				}
			})
		}
	});
});


$(document).ready(function () {
	$(".form-product-modal-1 #form-send").click(function () {
		var title = $(".form-product-modal-1 #product_title").html(),
			subtitle = $(".form-product-modal-1 #product_sub-title").html(),
			phone = $(".form-product-modal-1 #product_phone").val(),
			name = $(".form-product-modal-1 #product_name").val(),
			size = $(".form-product-modal-1 #product_size").val(),
			price = $(".form-product-modal-1 #product_price").val(),
			utm = $(".form-product-modal-1 #product_utm").val();
		if (!phone) {
			$(".form-product-modal-1 #product_phone").addClass("not_phone");
			$(".form-product-modal-1 #product_phone").prop("placeholder", "Введите номер телефона");
			setTimeout(function () {
				$(".form-product-modal-1 #product_phone").removeClass("not_phone");
				$(".form-product-modal-1 #product_phone").prop("placeholder", "+7 (___) ___-__-__");
			}, 2500);
		} else if (phone.length < 18) {
			$(".form-product-modal-1 #product_phone").addClass("not_phone");
			$(".form-product-modal-1 #product_phone").prop("value", "");
			$(".form-product-modal-1 #product_phone").prop("placeholder", "Номер слишком короткий");
			setTimeout(function () {
				$(".form-product-modal-1 #product_phone").removeClass("not_phone");
				$(".form-product-modal-1 #product_phone").prop("placeholder", "+7 (___) ___-__-__");
			},2500);
		} else {
			$(".form-product-modal-1 #product_phone").css("border-bottom", "1px solid #6b6b6b");
			$.ajax({
				url: "/webhook/product-arenda-webhook.php",
				type: "post",
				dataType: "json",
				data: {
					title: title,
					subtitle: subtitle,
					phone: phone,
					name: name,
					utm: utm,
					size: size,
					price: price
				},
				beforeSend: function (n, p, t) {
					$('.form-product-modal-1 #form-send').attr('data-hover', 'Заявка отправлена!');
					$('.form-product-modal-1 #form-send').attr('disabled', 'disabled').html('Заявка отправлена!');
				},
				success: function (n, p, t) {
					$('.form-product-modal-1 #form-send').attr('data-hover', 'Заявка отправлена!');
					$('.form-product-modal-1 #form-send').attr('disabled', 'disabled').html('Заявка отправлена!');
				}
			})
		}
	});
});

$(document).ready(function () {
	$(".form-calc-1 #form-send").click(function () {
		var title = 'Аренда бытовки',
			phone = $(".form-calc-1 #product_phone").val(),
			utm = $(".form-calc-1 #product_utm").val(),
			comment = $('.form-calc-1 #arenda_comment').val(),
            colvo = $('.form-calc-1 #arenda_num').val() + ' шт.',
            srok = $('.form-calc-1 #arenda_srok').val() + ' мес' ,
            fast = $('.form-calc-1 #arenda_op1').attr('data-check'),
            gift = $('.form-calc-1 #arenda_op2').attr('data-check');
		if (!phone) {
			$(".form-calc-1 #product_phone").addClass("not_phone");
			$(".form-calc-1 #product_phone").prop("placeholder", "Введите номер телефона");
			setTimeout(function () {
				$(".form-calc-1 #product_phone").removeClass("not_phone");
				$(".form-calc-1 #product_phone").prop("placeholder", "+7 (___) ___-__-__");
			}, 2500);
		} else if (phone.length < 18) {
			$(".form-calc-1 #product_phone").addClass("not_phone");
			$(".form-calc-1 #product_phone").prop("value", "");
			$(".form-calc-1 #product_phone").prop("placeholder", "Номер слишком короткий");
			setTimeout(function () {
				$(".form-calc-1 #product_phone").removeClass("not_phone");
				$(".form-calc-1 #product_phone").prop("placeholder", "+7 (___) ___-__-__");
			},2500);
		} else {
			$(".form-calc-1 #product_phone").css("border-bottom", "1px solid #6b6b6b");
			$.ajax({
				url: "/webhook/calc-arenda-webhook.php",
				type: "post",
				dataType: "json",
				data: {
					title: title,
					phone: phone,
					utm: utm,
					comment: comment,
	                colvo: colvo,
	                srok: srok,
	                fast: fast,
	                gift: gift
				},
				beforeSend: function (n, p, t) {
					$('.form-calc-1 #form-send').attr('data-hover', 'Заявка отправлена!');
					$('.form-calc-1 #form-send').attr('disabled', 'disabled').html('Заявка отправлена!');
				},
				success: function (n, p, t) {
					$('.form-calc-1 #form-send').attr('data-hover', 'Заявка отправлена!');
					$('.form-calc-1 #form-send').attr('disabled', 'disabled').html('Заявка отправлена!');
				}
			})
		}
	});
});