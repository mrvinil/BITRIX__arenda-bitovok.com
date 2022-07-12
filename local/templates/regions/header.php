<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?
$utm = $_GET['utm_product'];


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
	<link href="/cars/css/style.css" rel="stylesheet">
	<script src="/cars/js/three.js"></script>

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
	
	//JS
	//CJSCore::Init(array("jquery2", 'fx'));
	//CUtil::InitJSCore( array('ajax' , 'popup' ));
	// Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/wow.min.js");
	// Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/accordion.js");
	// Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/jquery.viewportchecker.min.js");
	// Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/jquery.inputmask.js");
	// Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/jquery.inputmask.numeric.extensions.js");
	// Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/main.js");
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/webhook.js");
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/slick/slick.min.js");



	//OUTSIDE
	Asset::getInstance()->addString("<link rel='shortcut icon' type='image/x-icon' href='/images/favicon.ico'>");
	Asset::getInstance()->addString("<meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>");
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
				<div class="col-8">
					<h2 class="big-h2">Аренда бытовок</h2>
					<h1 style="margin-top: 0px;">
						<span>Новые бытовки<br>по цене Б/У в аренду<br>от <b>7 000 руб/месяц</b></span></h1>
					<?$APPLICATION->IncludeFile( 
			 			SITE_DIR."/include/bitrix24Callback.php", 
			  			Array(), 
			  			Array("MODE"=>"php") 
					);?>
					<a class="mr-auto cta bl col-4" style="color: #fff; background:
					transparent; border: 1px solid #fff; text-transform: uppercase;"
					   data-toggle="modal"
					   data-hover="Оставить заявку">Оставить заявку</a>
				</div>
			</div>
		</div>
	</section>
	
	
	<div class="header container">
		<div class="row ">
			<div class="col-6 logo"></div>
			
			<div class="col-3 ml-auto">
				<div class="contacts">
					<a href="tel:<? if(file_exists($phonePath)) require $phonePath; ?>" class="phone nv xbold">
						<?$APPLICATION->IncludeFile( 
				 			SITE_DIR."/include/phone.php", 
				  			Array(), 
				  			Array("MODE"=>"php") 
						);?>
					</a>
				</div>
			</div>
		</div>
	</div>

</header>
<div id="stick">
	<div class="header container">
		<div class="row ">
			<!-- <div class="col-2">
			  <div class="logo"></div>
			</div> -->
			<div class="col-7">
				<div class="toplinks">
					<ul class="nav">
						<li><a href="#catalog-arenda">Каталог бытовок</a></li>
						<li><a href="#delivery">Доставка</a></li>
						<li><a href="#contacts">Контакты</a></li>
					</ul>
				</div>
			</div>
			<div class="col-3 ml-auto">
				<div class="contacts">
					<p class="phone nv xbold">
						<a href="tel:<? if(file_exists($phonePath)) require $phonePath; ?>">
							<?$APPLICATION->IncludeFile( 
					 			SITE_DIR."/include/phone.php", 
					  			Array(), 
					  			Array("MODE"=>"php") 
							);?>
						</a>
					</p>
					<br>
					<!-- <p class="adres-stick">ул. Киевская 22</p> -->
				</div>
			</div>
			
			<div class="col-2">
				<?$APPLICATION->IncludeFile( 
		 			SITE_DIR."/include/bitrix24Callback.php", 
		  			Array(), 
		  			Array("MODE"=>"php") 
				);?>
				<a class="b24-web-form-popup-btn-15">
					<div data-toggle="modal" data-hover="Заказать звонок" class="cta bl">
						Заказать звонок
					</div>
				</a>
			</div>
		</div>
	</div>
</div>

