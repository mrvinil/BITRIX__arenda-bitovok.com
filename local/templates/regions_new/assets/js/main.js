jQuery(function(f){
    var element = f('#stick');
    f(window).scroll(function(){
        element['fade'+ (f(this).scrollTop() > 500 ? 'In': 'Out')](500);
    });
});
$(document).ready(function(){
    $('.nav li a').click( function(){ // ловим клик по ссылке с классом go_to
    var scroll_el = $(this).attr('href'); // возьмем содержимое атрибута href, должен быть селектором, т.е. например начинаться с # или .
        if ($(scroll_el).length != 0) { // проверим существование элемента чтобы избежать ошибки
        $('html, body').animate({ scrollTop: $(scroll_el).offset().top-30}, 500); // анимируем скроолинг к элементу scroll_el
        }
        return false; // выключаем стандартное действие
    });
    $('#footer-nav li a').click( function(){ // ловим клик по ссылке с классом go_to
    var scroll_el = $(this).attr('href'); // возьмем содержимое атрибута href, должен быть селектором, т.е. например начинаться с # или .
        if ($(scroll_el).length != 0) { // проверим существование элемента чтобы избежать ошибки
        $('html, body').animate({ scrollTop: $(scroll_el).offset().top-1}, 500); // анимируем скроолинг к элементу scroll_el
        }
        return false; // выключаем стандартное действие
    });

    $('.logo').click( function(){ // ловим клик по ссылке с классом go_to
    var scroll_el = $(this); // возьмем содержимое атрибута href, должен быть селектором, т.е. например начинаться с # или .
        if ($(scroll_el).length != 0) { // проверим существование элемента чтобы избежать ошибки
        $('html, body').animate({ scrollTop: $("header").offset().top-0}, 500); // анимируем скроолинг к элементу scroll_el
        }
        return false; // выключаем стандартное действие
    });

    /*        $('.scrollup').click(function() {
        $('body,html').animate({scrollTop:0},800);
    });*/
});

/*$(document).ready(function(){
    $('#services').viewportChecker({
        callbackFunction: function(elem, action){
        $('#services .vert-line').css('height','90px');
        },
    });

    $('#about').viewportChecker({
        callbackFunction: function(elem, action){
        $('#about .vert-line').css('height','90px');
        },
    });
    $('#advantage').viewportChecker({
        callbackFunction: function(elem, action){
        $('#advantage .vert-line').css('height','90px');
        },
    });
    $('#shcema').viewportChecker({
        callbackFunction: function(elem, action){
        $('#shcema .vert-line').css('height','90px');
        },
    });
    $('#delivery').viewportChecker({
        callbackFunction: function(elem, action){
        $('#delivery .vert-line').css('height','90px');
        },
    });
    $('#faq').viewportChecker({
        callbackFunction: function(elem, action){
        $('#faq .vert-line').css('height','90px');
        },
    });
    $('#contact').viewportChecker({
        callbackFunction: function(elem, action){
        $('#contact .vert-line').css('height','90px');
        },
    });

      $('#num1').viewportChecker({
          callbackFunction: function(elem, action){
        var percent_number_step = $.animateNumber.numberStepFactories.append('+')
        $('#num1').animateNumber(
          {
            number: 100,
            easing: 'easeInQuad',
            numberStep: percent_number_step
          },
          2000
        );
        $('#num2').animateNumber(
          {
            number: 8000,
            easing: 'easeInQuad',
            numberStep: percent_number_step
          },
          2000
        );
        $('#num3').animateNumber(
          {
            number: 5000,
            easing: 'easeInQuad',
            numberStep: percent_number_step
          },
          2000
        );
      },
    });
});*/

 // jQuery(function($) {
 //    $(".phone-field").inputmask("+7 (999) 999-99-99");
 //  });


/* jQuery(function($) {
    $('#to_step_2').on('click', function() {
        $('#step-modal-1').removeClass('active');
        $('#step-modal-2').addClass('active');

    });
    $('#to_step_3').on('click', function() {
        $('#step-modal-2').removeClass('active');
        $('#step-modal-3').addClass('active');
    });
    $('.steps .step:nth-child(1)').on('click', function() {
        $('#step-modal-1').addClass('active');
        $('#step-modal-2').removeClass('active');
        $('#step-modal-3').removeClass('active');
    });

    $('.steps .step:nth-child(2)').on('click', function() {
        $('#step-modal-1').removeClass('active');
        $('#step-modal-2').addClass('active');
        $('#step-modal-3').removeClass('active');
    });
    $('.steps .step:nth-child(3)').on('click', function() {
        $('#step-modal-1').removeClass('active');
        $('#step-modal-2').removeClass('active');
        $('#step-modal-3').addClass('active');
    });

 });*/

$(document).ready(function(){

    $('#nav_bitovki').click(function(){
        $.ajax({
            url: 'bitovki.html',
            cache: false,
            beforeSend: function(){
                $("#catalog_content").html("<div class='loader'><p>Идет загрузка...</p></div>");
            },
            success: function(html){
                setTimeout(function() {
                    $("#catalog_content").html(html);
                }, 1000);
                
            }
        });
    });

    $('#nav_bk').click(function(){
        $.ajax({
            url: 'bk.html',
            cache: false,
            beforeSend: function(){
                $("#catalog_content").html("<div class='loader'><p>Идет загрузка...</p></div>");
            },
            success: function(html){
                setTimeout(function() {
                    $("#catalog_content").html(html);
                }, 1000);
            }
        });
    });

    $('#nav_bd').click(function(){
        $.ajax({
            url: 'bd.html',
            cache: false,
            beforeSend: function(){
                $("#catalog_content").html("<div class='loader'><p>Идет загрузка...</p></div>");
            },
            success: function(html){
                setTimeout(function() {
                    $("#catalog_content").html(html);
                }, 1000);
            }
        });
    });

    $('#nav_mz').click(function(){
        $.ajax({
            url: 'mz.html',
            cache: false,
            beforeSend: function(){
                $("#catalog_content").html("<div class='loader'><p>Идет загрузка...</p></div>");
            },
            success: function(html){
                setTimeout(function() {
                    $("#catalog_content").html(html);
                }, 1000);
            }
        });
    });

    $('#nav_pox').click(function(){
        $.ajax({
            url: 'pox.html',
            cache: false,
            beforeSend: function(){
                $("#catalog_content").html("<div class='loader'><p>Идет загрузка...</p></div>");
            },
            success: function(html){
                setTimeout(function() {
                    $("#catalog_content").html(html);
                }, 1000);
            }
        });
    });



/*    $('#nav_bk').click(function(){
        $.ajax({
            url: 'bk.html',
            cache: false,
            beforeSend: function(){
            
            },
            success: function(html){
                $("#catalog_content").html(html);
            }
        });
    });

    $('#nav_bd').click(function(){
        $.ajax({
            url: 'bd.html',
            cache: false,
            beforeSend: function(){
            
            },
            success: function(html){
                $("#catalog_content").html(html);
                //$('#catalog_content').load('bk.html');
            }
        });
    });*/

    $('#catalog-nav-1 ul li').click(function(){
        $('#catalog-nav-1 ul').find('.active').removeClass('active');
        $(this).addClass('active');
    });

});

var rangeSlider = function(){
  var slider = $('.range-slider'),
      range = $('.range-slider__range'),
      value = $('.range-slider__value'),
      range_ci = range.attr('ci');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      var range_ci = $(this).prev().attr('ci');
      $(this).html(value + range_ci);
    });

    range.on('input', function(){
      var range_ci = $(this).attr('ci');
      $(this).next(value).html(this.value + range_ci);
    });
  });
};

rangeSlider();



/*Dropdown Menu*/
$('.dropdown').click(function () {
        $(this).attr('tabindex', 1).focus();
        $(this).toggleClass('active');
        $(this).find('.dropdown-menu').slideToggle(300);
    });
    $('.dropdown').focusout(function () {
        $(this).removeClass('active');
        $(this).find('.dropdown-menu').slideUp(300);
    });
    $('.dropdown .dropdown-menu li').click(function () {
        $(this).parents('.dropdown').find('span').text($(this).text());
        $(this).parents('.dropdown').find('input').attr('value', $(this).attr('id'));
    });
/*End Dropdown Menu*/


$('.dropdown-menu li').click(function () {
  var input = '<strong>' + $(this).parents('.dropdown').find('input').val() + '</strong>',
      msg = '<span class="msg">Hidden input value: ';
  $('.msg').html(msg + input + '</span>');
});

(function($) {
    $(function() {
      $('.type-product').on('click', '.type-product-el:not(.active)', function() {
        $(this)
          .addClass('active').siblings().removeClass('active');
          //.closest('div.tabs').find('div.tabs__content').removeClass('active').eq($(this).index()).addClass('active');
      });
    });
})(jQuery);

(function($) {
    $(function() {
        $('.promoted-checkbox').change(function() {
            var inputer = $(this).children('input');
             if($(inputer).prop('checked')) {
              //console.log("Флажок установлен");
              $(inputer).attr('data-check', '+')
            }
             else
            {
              //console.log("Флажок не установлен");
              $(inputer).attr('data-check', '-')
            };
        });
    });
})(jQuery);

(function($) {
    $(function() {
        $('ul.tabs').delegate('li:not(.current)', 'click', function() {
            $(this).addClass('current').siblings().removeClass('current')
                .parents('div.section').find('div.box').hide().eq($(this).index()).fadeIn(300);
        })
    })
})(jQuery);

(function($) {
    $(function() {
      $('ul.tabs__caption').on('click', 'li:not(.active)', function() {
        $(this)
          .addClass('active').siblings().removeClass('active')
          .closest('div.tabs__block').find('div.tabs__content').removeClass('active').eq($(this).index()).addClass('active');
      });
    });
})(jQuery);


(function(){
  $('#product-gallery').on('click', '.img-thumb:not(.active)', function(){
    $(this).addClass('active').siblings().removeClass('active');
    var clicked_img_src = $(this).attr('src');
    $('#img-product-main').attr('src', clicked_img_src);
  })
})(jQuery);

(function(){
    $('.product-arenda').mouseover(function(){
        var pr = $(this);
        $(pr).on('click', '.img-thumb:not(.active)', function(){
          $(pr).find(this).addClass('active').siblings().removeClass('active');
          var clicked_img_src = $(pr).find(this).attr('src');
          $(pr).find('.img-product-main').attr('src', clicked_img_src);
        });
    });
})(jQuery);


(function() {
    $('.product-arenda').change(function(){
        thisProduct = $(this);
        $(thisProduct).find('.arenda-send').on('click', function(){
            var button = $(this),
                formName = $(thisProduct).find('h3').html() + ' ' + $(thisProduct).find('h4').html(),
                phone = $(thisProduct).find('.phone-field').val(),
                utmMark = $(thisProduct).find('.utm_mark').val();
                console.log(formName, ' + ', phone);
            $.ajax({
                url: "product-arenda-webhook.php",
                type: "post",
                dataType: "json",
                data: {
                    p: phone,
                    title: formName,
                    utm: utmMark
                },
                beforeSend: function() {
                    $(button).attr('data-hover','Заявка отправлена!');
                    $(button).attr('disabled', 'disabled').html('Заявка отправлена!');
                },
                success: function() {
                    $(button).attr('data-hover','Заявка отправлена!');
                    $(button).attr('disabled', 'disabled').html('Заявка отправлена!');
                    
                }
            })
        });
    });
})(jQuery);


// (function() {
//         $('#predl').find('.arenda-send').on('click', function(){
//             var button = $(this),
//                 formName = 'Нужна консультация со специалистом',
//                 phone = $('#predl').find('.phone-field').val();
//             $.ajax({
//                 url: "product-arenda.php",
//                 type: "post",
//                 dataType: "json",
//                 data: {
//                     p: phone,
//                     title: formName
//                 },
//                 beforeSend: function() {
//                     $(button).attr('data-hover','Идет отправка...');
//                     $(button).attr('disabled', 'disabled').html('Идет отправка...');
//                 },
//                 success: function() {
//                     $(button).attr('data-hover','Заявка отправлена!');
//                     $(button).attr('disabled', 'disabled').html('Заявка отправлена!');

//                 }
//             })
//         });
// })(jQuery);


(function() {
    $('#arenda_main_form').find('#arenda_send').on('click', function(){
        var button = $(this),
            formName = 'Бытовка в аренду',
            phone = $('#arenda_main_form').find('.phone-field').val(),
            utmMark = $('#arenda_main_form').find('.utm_mark').val(),
            comment = $('#arenda_comment').val(),
            colvo = $('#arenda_num').val() + ' шт.',
            srok = $('#arenda_srok').val() + ' мес' ,
            fast = $('#arenda_op1').attr('data-check'),
            gift = $('#arenda_op2').attr('data-check');
        $.ajax({
            url: "calc-arenda-webhook.php",
            type: "post",
            dataType: "json",
            data: {
                p: phone,
                title: formName,
                comment: comment,
                colvo: colvo,
                srok: srok,
                fast: fast,
                gift: gift,
                utm: utmMark
            },
            beforeSend: function() {
                $(button).attr('data-hover','Заявка отправлена!');
                $(button).attr('disabled', 'disabled').html('Заявка отправлена!');
            },
            success: function() {
                $(button).attr('data-hover','Заявка отправлена!');
                $(button).attr('disabled', 'disabled').html('Заявка отправлена!');
                
            }
        })
    });
})(jQuery);


(function() {
    $('#product').find('.arenda-send').on('click', function(){
        var button = $(this),
            formName = $('#product h2').html(),
            phone = $('#product').find('.phone-field').val(),
            utmMark = $('#product').find('.utm_mark').val();
            /*console.log(formName, phone);*/
        $.ajax({
            url: "product-arenda-webhook.php",
            type: "post",
            dataType: "json",
            data: {
                p: phone,
                title: formName,
                utm: utmMark
            },
            beforeSend: function() {
                $(button).attr('data-hover','Идет отправка...');
                $(button).attr('disabled', 'disabled').html('Идет отправка...');
            },
            success: function() {
                $(button).attr('data-hover','Заявка отправлена!');
                $(button).attr('disabled', 'disabled').html('Заявка отправлена!');
                
            }
        })
    });
})(jQuery);


$('#open_other_1').click(function(){
    $.ajax({
        url: 'other_1.html',
        cache: false,
        beforeSend: function(){
            $("#open_other_1").hide();
            $("#open_other_1").after("<div class='loader'><p>Идет загрузка...</p></div>");
        },
        success: function(html){
            setTimeout(function() {
                $('.loader').hide();
                $("#open_other_1").after(html);

            }, 1000);
        }
    });
});

jQuery(document).ready(function ($) {
  $('.slick-hit').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        infinite: true,
        fade: true,
        cssEase: 'linear',
        speed: 500,
        autoplay: true,
        autoplaySpeed: 4700
        //prevArrow: '<button type="button" class="navigation-prev button-arrow__blue fas fa-arrow-left"></button>',
        //nextArrow: '<button type="button" class="navigation-next button-arrow__blue fas fa-arrow-right"></button>'
    });
});

jQuery(document).ready(function ($) {
    $('.slick__slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        infinite: true,
        fade: true,
        cssEase: 'linear',
        speed: 500,
        autoplay: true,
        autoplaySpeed: 4700
        //prevArrow: '<button type="button" class="navigation-prev button-arrow__blue fas fa-angle-left"></button>',
        //nextArrow: '<button type="button" class="navigation-next button-arrow__blue fas fa-angle-right"></button>'
    });
});