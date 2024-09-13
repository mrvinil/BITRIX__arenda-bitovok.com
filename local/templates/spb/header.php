<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?
$price = 8500; // Устанавливаем начальную цену
$priceDay = round($price / 30);
$priceDayOld = $priceDay + 20;
$utm = $_GET['utm_product'];
$utmMark = 'form-arendabitovokcom';




$city = ''; // Переменная для хранения названия города из URL

// Получаем название города из URL
if (isset($_SERVER['REQUEST_URI']))
{
	$url_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
	$segments = explode('/', rtrim($url_path, '/'));
	$city = end($segments);
}

// Список городов и их транслитерации
$cities = array(
	'v-boksitogorske' => array('Бокситогорск', 'Бокситогорске', 'Бокситогорск'),
	'v-gatchine' => array('Гатчина', 'Гатчине', 'Гатчину'),
	'v-ivangorode' => array('Ивангород', 'Ивангороде', 'Ивангород'),
	'v-kingiseppe' => array('Кингисепп', 'Кингисеппе', 'Кингисепп'),
	'v-kirishah' => array('Кириши', 'Киришах', 'Кириши'),
	'v-kirovske' => array('Кировск', 'Кировске', 'Кировск'),
	'v-kolpino' => array('Колпино', 'Колпино', 'Колпино'),
	'v-kommunare' => array('Коммунар', 'Коммунаре', 'Коммунар'),
	'v-krasnom-sele' => array('Красное Село', 'Красном Селе', 'Красное Село'),
	'v-kronshtadte' => array('Кронштадт', 'Кронштадте', 'Кронштадт'),
	'v-kudrovo' => array('Кудрово', 'Кудрово', 'Кудрово'),
	'v-kuzmolovskom' => array('Кузьмоловский', 'Кузьмоловском', 'Кузьмоловский'),
	'v-lodejnom-pole' => array('Лодейное Поле', 'Лодейном Поле', 'Лодейное Поле'),
	'v-lomonosove' => array('Ломоносов', 'Ломоносове', 'Ломоносов'),
	'v-luge' => array('Луга', 'Луге', 'Лугу'),
	'v-metallostroe' => array('Металлострой', 'Металлострое', 'Металлострой'),
	'vo-mge' => array('Мга', 'Мге', 'Мгу'),
	'v-murino' => array('Мурино', 'Мурино', 'Мурино'),
	'v-nikolskom' => array('Никольское', 'Никольском', 'Никольское'),
	'v-otradnom' => array('Отрадное', 'Отрадном', 'Отрадное'),
	'v-pargolovo' => array('Парголово', 'Парголово', 'Парголово'),
	'v-pavlovske' => array('Павловск', 'Павловске', 'Павловск'),
	'v-petergofe' => array('Петергоф', 'Петергофе', 'Петергоф'),
	'v-pikalyovo' => array('Пикалёво', 'Пикалёво', 'Пикалёво'),
	'v-podporozhe' => array('Подпорожье', 'Подпорожье', 'Подпорожье'),
	'v-posyolke-imeni-morozova' => array('посёлок имени Морозова', 'посёлке имени Морозова', 'посёлок имени Морозова'),
	'v-posyolke-imeni-sverdlova' => array('посёлок имени Свердлова', 'посёлке имени Свердлова', 'посёлок имени Свердлова'),
	'v-priozerske' => array('Приозерск', 'Приозерске', 'Приозерск'),
	'v-pushkine' => array('Пушкин', 'Пушкин', 'Пушкин'),
	'v-roshhino' => array('Рощино', 'Рощино', 'Рощино'),
	'v-sertolovo' => array('Сертолово', 'Сертолово', 'Сертолово'),
	'v-sestroretske' => array('Сестрорецк', 'Сестрорецке', 'Сестрорецк'),
	'v-shlisselburge' => array('Шлиссельбург', 'Шлиссельбурге', 'Шлиссельбург'),
	'v-siverskom' => array('Сиверский', 'Сиверском', 'Сиверский'),
	'v-slantsah' => array('Сланцы', 'Сланцах', 'Сланцы'),
	'v-sosnovom-boru' => array('Сосновый Бор', 'Сосновом Бору', 'Сосновый Бор'),
	'v-strelne' => array('Стрельна', 'Стрельне', 'Стрельну'),
	'v-svetogorske' => array('Светогорск', 'Светогорске', 'Светогорск'),
	'v-svasstroe' => array('Сясьстрой', 'Сясьстрое', 'Сясьстрой'),
	'v-tihvine' => array('Тихвин', 'Тихвине', 'Тихвин'),
	'v-tosno' => array('Тосно', 'Тосно', 'Тосно'),
	'v-ulyanovke' => array('Ульяновка', 'Ульяновке', 'Ульяновку'),
	'v-volhove' => array('Волхов', 'Волхове', 'Волхов'),
	'v-volosovo' => array('Волосово', 'Волосово', 'Волосово'),
	'vo-vsevolozhske' => array('Всеволожск', 'Всеволожске', 'Всеволожск'),
	'v-vyborge' => array('Выборг', 'Выборге', 'Выборг'),
	'v-vyritse' => array('Вырица', 'Вырице', 'Вырицу'),
	'v-yanino' => array('Янино', 'Янино', 'Янино'),
	'v-zelenogorske' => array('Зеленогорск', 'Зеленогорске', 'Зеленогорск')
);

// Устанавливаем title и description в зависимости от города
if (isset($cities[$city]))
{
	$city_name = $cities[$city][0];
	$city_prepositional = $cities[$city][1];
	$city_delivery = $cities[$city][2];
}

if(isset($cities[$city])) {
	$city_name = $cities[$city][0];
} else {
	$city_name = "";
}

if ($utm == 'bk')
{
	$h1 = 'Блок-контейнеры</span><br><span>Металлические бытовки</span><br><span>от производителя';
	$bg = 'bk';
	$cta1 = '';
	$product_ajax = 'bk';
} elseif ($utm == 'bd')
{
	$h1 = '<span>Деревянные бытовки</span><br><span>от производителя';
	$bg = 'bd';
	$cta1 = '';
	$product_ajax = 'bd';
} elseif ($utm == 'mz')
{
	$h1 = 'Модульные здания</span><br><span>от производителя';
	$bg = 'mz';
	$cta1 = 'модульного здания';
	$product_ajax = 'mz';
} elseif ($utm == 'po')
{
	$h1 = 'Посты охраны и КПП</span><br><span>от производителя';
	$bg = 'po';
	$cta1 = '';
	$product_ajax = 'pox';
} else
{
	$h1 = 'Блок-контейнеры</span><br><span>Металлические бытовки</span><br><span>Деревянные бытовки';
	$bg = 'bkbd';
	$cta1 = '';
	$product_ajax = 'bitovki';
}
?>
<?$phonePath = $_SERVER['DOCUMENT_ROOT'] . SITE_DIR . "include/phonePath.php"; ?>

<?IncludeTemplateLangFile(__FILE__);?>
<!doctype html>
<html>
<head>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
	      integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
	        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
	        crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
	        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
	        crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
	        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
	        crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<!--	<link href="/cars/css/style.css" rel="stylesheet">-->
<!--	<script src="/cars/js/three.js"></script>-->
	
	<link href="/cars-gb/css/style.css" rel="stylesheet">
	<script src="/cars-gb/js/three__new.js"></script>

	<? $APPLICATION->ShowHead() ?>
	
	
	<?
	
	use Bitrix\Main\Loader;
	use Bitrix\Main\Page\Asset;
	
	//CSS
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/main.min2.css?v=3");
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/custom2.css?v=3");
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/animate.min2.css?v=3");
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/range.css?v=3");
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/custom3.css");
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/mobile.css");
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/neon.css");
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/slick/slick.css");
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/slick/slick-theme.css");
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/accordion.css");
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/animate_point2.css");
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/jquery.fancybox.min.css");
	
	//JS
	//CJSCore::Init(array("jquery2", 'fx'));
	//CUtil::InitJSCore( array('ajax' , 'popup' ));
	// Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/wow.min.js");
	// Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/accordion.js");
	// Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/jquery.viewportchecker.min.js");
	// Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/jquery.inputmask.js");
	// Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/jquery.inputmask.numeric.extensions.js");
	// Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/main.js");
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/jquery.fancybox.min.js");
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/webhook.js");
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/slick/slick.min.js");
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/phoneinput.js");



	//OUTSIDE
	Asset::getInstance()->addString("<link rel='shortcut icon' type='image/x-icon' href='/images/favicon.ico'>");
	Asset::getInstance()->addString("<meta name='viewport' content='width=device-width, initial-scale=1.0'>");
	Asset::getInstance()->addString("<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>");
	Asset::getInstance()->addString("<meta name='msvalidate.01' content='EC8F5C6C367270EECEA424441A3E0815'>");
	?>

	

	<title><? $APPLICATION->ShowTitle() ?></title>
</head>
<body>
<div id="panel"><? $APPLICATION->ShowPanel(); ?></div>

<style>
	@import url('https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&subset=cyrillic');
	
	/*.container {*/
		/*width: 1200px !important;*/
		/*max-width: 1200px !important*/
	/*}*/
	
	/*@media (min-width: 768px) {*/
		/*.container {*/
			/*width: 1200px !important;*/
			/*max-width: 1200px !important*/
		/*}*/
	/*}*/
	
	/*@media (min-width: 576px) {*/
		/*.container {*/
			/*width: 1200px !important;*/
			/*max-width: 1200px !important*/
		/*}*/
	/*}*/
	
	@media (min-height: 960px) {
		#main {
			height: 960px !important
		}
	}
	
	h2.text-logo {
		text-align: left;
		font-size: 32px;
		font-weight: 800;
		/* padding-right: 15px;
		border-right: 1px solid #2296f3; */
	}
</style>

<header class="">
	
	<section id="main" class="section bk"><!-- ///////// Глвный экран ////////-->
		<!--  <div class="overlay"></div> -->
		<div class="container">
			<div class="row">
				<div class="col-12">
					<?php
					if(isset($cities[$city])) {
						$city_prepositional = $cities[$city][1];
						?>
						<h2 class="big-h2 big-h2_small">Аренда бытовок в <?php echo $city_prepositional; ?></h2>
						<?php
					} else {
						?>
						<h2 class="big-h2">Аренда бытовок</h2>
						<?php
					}
					?>
					<!-- <h1 style="margin-top: 0px;">
						<span>Новые бытовки<br>по цене Б/У в аренду<br>от <b>7 000 руб/месяц</b></span>
					</h1> -->
					<?$APPLICATION->IncludeFile(
			 			SITE_DIR."/include/bitrix24Callback.php",
			  			Array(),
			  			Array("MODE"=>"php")
					);?>
					<?
					$_monthsList = array(
						"1"=>"Январь","2"=>"Февраль","3"=>"Март",
						"4"=>"Апрель","5"=>"Май", "6"=>"Июнь",
						"7"=>"Июль","8"=>"Август","9"=>"Сентябрь",
						"10"=>"Октябрь","11"=>"Ноябрь","12"=>"Декабрь");
					
					$month = $_monthsList[date("n")];
					?>
					<div class="banner__desc">
						<div class="banner__advantage">
							<div class="banner__advantage-item">
								<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/icon__clock.svg" class="banner__advantage-icon">
								<p class="banner__advantage-name">Доставка под ключ&nbsp;за&nbsp;3&nbsp;часа</p>
							</div>
							<div class="banner__advantage-item">
								<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/icon__wallet.svg" class="banner__advantage-icon">
								<p class="banner__advantage-name"><?=$month;?> - скидка 10%</p>
							</div>
						</div>
						<a class="mr-auto cta bl col-6 banner__button" data-toggle="modal"
						   data-hover="Взять в аренду">Взять в аренду</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	
	<div class="header container">
		<div class="row">
			<div class="col-6 logo"></div>
			<div class="col-6">
				<div class="contacts">
					<a href="tel:<? if(file_exists($phonePath)) require $phonePath; ?>" class="phone nv xbold">
						<?$APPLICATION->IncludeFile(
				 			SITE_DIR."/include/phone.php",
				  			Array(),
				  			Array("MODE"=>"php")
						);?>
						
						</a>
<!--					<p><span>Фрунзенская</span>, ул. Киевская 22</p>-->
<!--					<p><span>Озерки</span>, ш. Выборгское 459</p>-->
				</div>
			</div>
		</div>
	</div>

</header>
<div id="stick">
	<div class="header container">
		<div class="row no-gutters">
			<!-- <div class="col-2">
			  <div class="logo"></div>
			</div> -->
			<div class="col-12 col-md-7">
				<div class="toplinks">
					<ul class="nav">
						<li><a href="#catalog-arenda">Каталог бытовок</a></li>
						<li><a href="#delivery">Доставка</a></li>
						<li><a href="#contacts-bottom">Контакты</a></li>
					</ul>
				</div>
			</div>
			<div class="col-7 col-md-3 ml-auto">
				<div class="contacts">
					<p class="phone nv xbold"><a href="tel:<? if(file_exists($phonePath)) require $phonePath; ?>">
						<?$APPLICATION->IncludeFile(
				 			SITE_DIR."/include/phone.php",
				  			Array(),
				  			Array("MODE"=>"php")
						);?>
					</a></p><br>
					<!-- <p class="adres-stick">ул. Киевская 22</p> -->
				</div>
			</div>
			
			<div class="col-5 col-md-2">
				<?$APPLICATION->IncludeFile(
		 			SITE_DIR."/include/bitrix24Callback.php",
		  			Array(),
		  			Array("MODE"=>"php")
				);?>
				<a class="b24-web-form-popup-btn-13">
					<div data-toggle="modal" data-hover="Заказать звонок" class="cta bl">
						Заказать звонок
					</div>
				</a>
			</div>
		</div>
	</div>
</div>

