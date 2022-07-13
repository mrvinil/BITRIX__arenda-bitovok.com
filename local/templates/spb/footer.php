<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<footer>
<!-- <section class="section" id="contacts">
	<div class="container-fluid">
		<div class="row" style="padding-top: 130px;">
			<div class="col-4">
				<h2 class="big-h2">Более 300 бытовок на складе нашего производства</h2>
			</div>
			<div class="col-4" style="padding-top: 190px;">
				<img src="/img/map_russia-white.png" alt="">
			</div>
			<div class="col-4">
				<h2 class="big-h2">Более 3000 бытовок в аренде по всей россии</h2>
			</div>
		</div>
	</div>
</section> -->

<section class="section" id="contacts-bottom">
	<div class="container">
		<div class="row">
			<!-- <div class="col-4">
				<p>Адрес:</p>
				<p><b><span>Фрунзенская</span>, Ул. Киевская, дом 5</b></p>
				<p><b><span>Озерки</span>, ш. Выборгское, дом 459</b></p>
			</div> -->
			<div class="col-6">
				<p>Телефон:</p>
				<p style="font-size: 150%;"><b class="phone">
					<a href="tel:<? if(file_exists($phonePath)) require $phonePath; ?>">
						<?$APPLICATION->IncludeFile( 
				 			SITE_DIR."/include/phone.php", 
				  			Array(), 
				  			Array("MODE"=>"php") 
						);?>
					</a></b></p>
			</div>
			<div class="col-6">
				<p>Режим работы:
				<p><b><?$APPLICATION->IncludeFile( 
					 			SITE_DIR."/include/operating.php", 
					  			Array(), 
					  			Array("MODE"=>"php") 
							);?></b></p></p>
			</div>
		</div>
	</div>
</section>
<!-- <section class="section" style="padding: 0px!important;">
	<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Af8420d0d6daa896b1b2167b1207f004d7013434b4c52b15f1b3bbf6f1aaca616&amp;width=100%25&amp;height=600&amp;lang=ru_RU&amp;scroll=false"></script>
</section> -->

<div class="header_canvas">
	<canvas id="canvas" width="320" height="194"></canvas>
</div>
<script src="/cars/js/script.js"></script>
<section id="contacts" class="section kaskad-bot" style="
      background: url(/img/bg6.jpg) no-repeat top center;
      height: 500px;
      background-size: cover;
      ">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 style="margin-top: 40px; color: #fff;"><b>Мы уже выехали!</b></h2>
				<h3 style="color: #fff;"><b>Встречайте нас</b></h3>
			</div>
		</div>
	</div>
</section>

<!-- HTML-код модального окна -->
<div id="calculator" class="modal fade calculator">
	<div class="modal-dialog">
		<div class="modal-content active">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">+</button>
			<!-- Заголовок модального окна -->
			<div class="modal-header">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<h3>Заполните форму и <b>получите расчет</b><br/>вашего проекта <b>через 5 минут</b></h3>
						</div>
					</div>
				</div>
			</div>
			<!-- Основное содержимое модального окна -->
			<div class="modal-body">
				<div id="calc_product_type" class="row type-product">
					<div id="type-product-1" class="type-product-el col-4 active">
						<p>Металлическая бытовка</p>
					</div>
					<div id="type-product-2" class="type-product-el col-4">
						<p>Деревянная бытовка</p>
					</div>
					<div id="type-product-3" class="type-product-el col-4">
						<p>Модульное здание</p>
					</div>
				</div>
				<div class="row input-row">
					<div class="col-4">
						<p>Длина, м:</p>
					</div>
					<div class="col-8 slider-input">
						<div class="range-slider">
							<input id="calc_lenght" class="range-slider__range" type="range" ci=" м." value="6" min="3"
							       max="24" step="1">
							<span class="range-slider__value">0 <i>м.</i></span>
						</div>
					</div>
				</div>
				
				<div class="row input-row">
					<div class="col-4">
						<p>Ширина, м:</p>
					</div>
					<div class="col-8 slider-input">
						<div class="range-slider">
							<input id="calc_width" class="range-slider__range" type="range" ci=" м." value="2.4" min="2"
							       max="12" step="0.2">
							<span class="range-slider__value">0</span>
						</div>
					</div>
				</div>
				
				<div class="row input-row">
					<div class="col-4">
						<p>Помещений:</p>
					</div>
					<div class="col-8 slider-input">
						<div class="range-slider">
							<input id="calc_pom" class="range-slider__range" type="range" ci="" value="1" min="1"
							       max="12" step="1">
							<span class="range-slider__value">0</span>
						</div>
					</div>
				</div>
				<div class="row input-row">
					<div class="col-6">
						<div class="dropdown">
							<div class="select">
								<span id="calc_vne">Внешняя обшивка</span>
								<i class="fa fa-chevron-down"></i>
							</div>
							<input type="hidden" name="vne">
							<ul class="dropdown-menu">
								<li id="vhe_1">Профнастил</li>
								<li id="vne_2">Вагонка</li>
								<li id="vne_3">Имитация бруса</li>
								<li id="vne_4">Блок-хаус</li>
							</ul>
						</div>
					</div>
					<div class="col-6">
						<div class="dropdown">
							<div class="select">
								<span id="calc_vnu">Внутренняя обшивка</span>
								<i class="fa fa-chevron-down"></i>
							</div>
							<input type="hidden" name="vnu">
							<ul class="dropdown-menu">
								<li id="vnu_1">Оргалит (ДВП)</li>
								<li id="vnu_2">Вагонка</li>
								<li id="vnu_3">ПВХ-панели</li>
								<li id="vnu_4">OSB</li>
							</ul>
						</div>
					</div>
				</div>
				
				<div class="row input-row">
					<div class="col-4">
						<div class="promoted-checkbox">
							<input id="calc_op1" data-check="-" type="checkbox" class="promoted-input-checkbox"/>
							<label for="calc_op1">
								<svg>
									<use xlink:href="#checkmark"/>
								</svg>
								Утепление
							</label>
						</div>
					</div>
					<div class="col-4">
						<div class="promoted-checkbox">
							<input id="calc_op2" data-check="-" type="checkbox" class="promoted-input-checkbox"/>
							<label for="calc_op2">
								<svg>
									<use xlink:href="#checkmark"/>
								</svg>
								Электрика
							</label>
						</div>
					</div>
					<div class="col-4">
						<div class="promoted-checkbox">
							<input id="calc_op3" data-check="-" type="checkbox" class="promoted-input-checkbox"/>
							<label for="calc_op3">
								<svg>
									<use xlink:href="#checkmark"/>
								</svg>
								Фундамент
							</label>
						</div>
					</div>
				</div>
				<div class="row contact-form justify-content-center">
					<div class="col-12"><h3>Укажите контактную информацию</h3></div>
					<div class="col-6">
						<div class="input-col">
							<input id="calc_name" type="text" placeholder="Как Вас зовут">
						</div>
					</div>
					<div class="col-6">
						<div class="input-col">
							<input id="calc_phone" class="phone-field" type="text" placeholder="Номер телефона">
						</div>
					</div>
					<div class="col-8">
						<button data-hover="Получить расчет" id="calc_get_calc" class="cta bl next-step">Получить
							расчет
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="product" class="modal fadel">
	<div class="modal-dialog">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">+</button>
			<div class="modal-body">
				<div class="form-product-modal-1 row">
					<div class="col-6 product-modal-left">
						<h3 id="product_title" style="text-align: left;">Металлическая бытовка / блок-контейнер</h3>
						<h2 id="product_sub-title" style="text-align: left;"></h2>
						
						<div id="product-gallery" class="row">
							<div class="col-12">
								<img id="img-product-main" class="img-product-main" src="" alt="">
							</div>
						</div>
					</div>
					<div class="col-6 product-modal-right">
						<div class="price-block">
							<p class="price-day">от <span><span>250</span></span> 234 руб/сутки</p>
							<p class="price-month">от <span><span>7 500</span></span> 7 000 руб/месяц</p>
						</div>
						<p class="arenda-product-size"><b>Размер, мм.: </b>6000х2400х2400</p>
						<ul class="pruduct-desc">
							<li>Электрическое оснащение 6 КВт — <b>В ПОДАРОК</b></li>
							<li>Металлические двухъярусные кровати</li>
							<li>Окно ПВХ с поворотной створкой</li>
							<li>Линолеум на полу</li>
							<li>Утепление 50 мм пол, потолок, стены</li>
							<li>Потолок вагонка ПВХ</li>
						</ul>
						
						<div class="row product-arenda-form justify-content-center">
							<div class="col-12">
								<p><b>Оставьте заявку</b> и мы предложим для Вас<br>
									<b>лучшие условия</b> по аренде бытовок и блок-контейнеров</p>
							</div>
							<div class="col-6">
								<div class="input-col">
									<input id="product_phone" type="tel" data-tel-input maxlength="18" class="arenda-phone-field phone-field"
									       placeholder="+7 (___) ___-__-__">
								</div>
							</div>
							<div class="col-6">
								<input id="product_utm" type="hidden" value="<?= $utmMark ?>">
								<button id="form-send" data-hover="Оставить заявку" class="cta bl">Оставить заявку
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<style>
	::-webkit-input-placeholder {
		color: #acabab;
		font-family: 'Open Sans';
		font-size: 18px;
		font-weight: 300;
	}
	
	::-moz-placeholder {
		color: #acabab;
		font-family: 'Open Sans';
		font-size: 18px;
		font-weight: 300;
	}
	
	:-moz-placeholder {
		color: #acabab;
		font-family: 'Open Sans';
		font-size: 18px;
		font-weight: 300;
	}
	
	:-ms-input-placeholder {
		color: #acabab;
		font-family: 'Open Sans';
		font-size: 18px;
		font-weight: 300;
	}
	
	::-webkit-textarea-placeholder {
		color: #acabab;
		font-family: 'Open Sans';
		font-size: 18px;
		font-weight: 300;
	}
	
	::-moz-placeholder {
		color: #acabab;
		font-family: 'Open Sans';
		font-size: 18px;
		font-weight: 300;
	}
	
	:-moz-placeholder {
		color: #acabab;
		font-family: 'Open Sans';
		font-size: 18px;
		font-weight: 300;
	}
	
	:-ms-textarea-placeholder {
		color: #acabab;
		font-family: 'Open Sans';
		font-size: 18px;
		font-weight: 300;
	}
</style>



<script src="/local/templates/spb/assets/js/wow.min.js"></script>
<!--     <script src="/js/jquery.animateNumber.min.js"></script> -->

<script src="/local/templates/spb/assets/js/accordion.js"></script>
<script src="/local/templates/spb/assets/js/jquery.viewportchecker.min.js"></script>
<script src="/local/templates/spb/assets/js/jquery.inputmask.js"></script>
<script src="/local/templates/spb/assets/js/jquery.inputmask.numeric.extensions.js"></script>
<script src="/local/templates/spb/assets/js/main.js"></script>
<script>
	new WOW().init();
</script>
<script defer src="https://use.fontawesome.com/releases/v5.0.1/js/all.js"></script>

<svg xmlns="https://www.w3.org/2000/svg" style="display: none">
	<symbol id="checkmark" viewBox="0 0 24 24">
		<path stroke-linecap="round" stroke-miterlimit="10" fill="none" d="M22.9 3.7l-15.2 16.6-6.6-7.1">
		</path>
	</symbol>
</svg>
<link rel="stylesheet" href="/css/animate_point2.css">
<svg xmlns="https://www.w3.org/2000/svg" style="display: none">
	<symbol id="checkmark" viewBox="0 0 24 24">
		<path stroke-linecap="round" stroke-miterlimit="10" fill="none" d="M22.9 3.7l-15.2 16.6-6.6-7.1">
		</path>
	</symbol>
</svg>


<!-- Yandex.Metrika counter -->
<script type="text/javascript">
	(function (m, e, t, r, i, k, a) {
		m[i] = m[i] || function () {
			(m[i].a = m[i].a || []).push(arguments)
		};
		m[i].l = 1 * new Date();
		k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
	})
	(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
	
	ym(57178468, "init", {
		clickmap: true,
		trackLinks: true,
		accurateTrackBounce: true,
		webvisor: true
	});
</script>
<noscript>
	<div><img src="https://mc.yandex.ru/watch/57178468" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>
<!-- /Yandex.Metrika counter -->


<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(70597204, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true,
        ecommerce:"dataLayer"
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/70597204" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->


<![if IE]>
<script src='https://livechat.chat2desk.com/packs/ie11-supporting-2e8a7032d2ffc551aebd.js'></script>
<![endif]>
<script id='chat-24-widget-code' type="text/javascript">
  !function (e) {
    var t = {};
    function n(c) { if (t[c]) return t[c].exports; var o = t[c] = {i: c, l: !1, exports: {}}; return e[c].call(o.exports, o, o.exports, n), o.l = !0, o.exports }
    n.m = e, n.c = t, n.d = function (e, t, c) { n.o(e, t) || Object.defineProperty(e, t, {configurable: !1, enumerable: !0, get: c}) }, n.n = function (e) {
      var t = e && e.__esModule ? function () { return e.default } : function () { return e  };
      return n.d(t, "a", t), t
    }, n.o = function (e, t) { return Object.prototype.hasOwnProperty.call(e, t) }, n.p = "/packs/", n(n.s = 0)
  }([function (e, t) {
    window.chat24WidgetCanRun = 1, window.chat24WidgetCanRun && function () {
      window.chat24ID = "29e051f47b47143ec74a359308f4b46b", window.chat24io_lang = "ru";
      var e = "https://livechat.chat2desk.com", t = document.createElement("script");
      t.type = "text/javascript", t.async = !0, fetch(e + "/packs/manifest.json?nocache=" + (new Date()).getTime()).then(function (e) {
        return e.json()
      }).then(function (n) {
        t.src = e + n["widget.js"];
        var c = document.getElementsByTagName("script")[0];
        c ? c.parentNode.insertBefore(t, c) : document.documentElement.firstChild.appendChild(t);
        var o = document.createElement("link");
        o.href = e + n["widget.css"], o.rel = "stylesheet", o.id = "chat-24-io-stylesheet", o.type = "text/css", document.getElementById("chat-24-io-stylesheet") || document.getElementsByTagName("head")[0].appendChild(o)
      })
    }()
  }]);
</script>


<script>
        (function(w,d,u){
                var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/60000|0);
                var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
        })(window,document,'https://cdn-ru.bitrix24.ru/b5901341/crm/site_button/loader_1_rp61zn.js');
</script>
</body>
</html>