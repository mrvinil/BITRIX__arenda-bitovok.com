<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?$utmMark = 'form-arendabitovokcom';?>
<?IncludeTemplateLangFile(__FILE__);?>
<!doctype html>
<html>
<head>
	<? $APPLICATION->ShowHead() ?>
	<?
	
	use Bitrix\Main\Loader;
	use Bitrix\Main\Page\Asset;
	
	//CSS
	//Asset::getInstance()->addCss("/bitrix/css/main/bootstrap.min.css");
	//Asset::getInstance()->addCss("/bitrix/css/main/font-awesome.min.css");
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/normalize.css");
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/keyframes.css");
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/FontAwesomePro571.css");
	//Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/sm-core-css.css");
	//Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/slick.css");
	//Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/slick-theme.css");
	//Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/burger-menu.css");
	//Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/mmenu.css");
	//Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/checkbox.css");
	//Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/select.css");

	//Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/magnific-popup.css");
	
	//Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/remodal.css");
	//Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/remodal-default-theme.css");
	//Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/jquery.fancybox.min.css");
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/popup.css");
	
	//JS
	CJSCore::Init(array("jquery2", 'fx'));
	CUtil::InitJSCore( array('ajax' , 'popup' ));
	//Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/jquery.magnific-popup.min.js");
	//Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/jquery.smartmenus.js");
	//Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/jquery-cookie.js");
	//Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/jquery.fancybox.min.js");
	//Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/mmenu.js");
	//Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/remodal.min.js");
	//Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/select.js");
	//Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/slick.min.js");
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/phoneinput.js");
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/popup_callback.js");
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/popup_validate.js");
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/myscript.js");
	
	//OUTSIDE
	Asset::getInstance()->addString("<link rel='apple-touch-icon' sizes='57x57' href='/images/favicon/apple-icon-57x57.png'>");
	Asset::getInstance()->addString("<link rel='apple-touch-icon' sizes='60x60' href='/images/favicon/apple-icon-60x60.png'>");
	Asset::getInstance()->addString("<link rel='apple-touch-icon' sizes='72x72' href='/images/favicon/apple-icon-72x72.png'>");
	Asset::getInstance()->addString("<link rel='apple-touch-icon' sizes='76x76' href='/images/favicon/apple-icon-76x76.png'>");
	Asset::getInstance()->addString("<link rel='apple-touch-icon' sizes='114x114' href='/images/favicon/apple-icon-114x114.png'>");
	Asset::getInstance()->addString("<link rel='apple-touch-icon' sizes='120x120' href='/images/favicon/apple-icon-120x120.png'>");
	Asset::getInstance()->addString("<link rel='apple-touch-icon' sizes='144x144' href='/images/favicon/apple-icon-144x144.png'>");
	Asset::getInstance()->addString("<link rel='apple-touch-icon' sizes='152x152' href='/images/favicon/apple-icon-152x152.png'>");
	Asset::getInstance()->addString("<link rel='apple-touch-icon' sizes='180x180' href='/images/favicon/apple-icon-180x180.png'>");
	Asset::getInstance()->addString("<link rel='icon' type='image/png' sizes='192x192'  href='/images/favicon/android-icon-192x192.png'>");
	Asset::getInstance()->addString("<link rel='icon' type='image/png' sizes='32x32' href='/images/favicon/favicon-32x32.png'>");
	Asset::getInstance()->addString("<link rel='icon' type='image/png' sizes='96x96' href='/images/favicon/favicon-96x96.png'>");
	Asset::getInstance()->addString("<link rel='icon' type='image/png' sizes='16x16' href='/images/favicon/favicon-16x16.png'>");
	Asset::getInstance()->addString("<link rel='manifest' href='/images/favicon/manifest.json'>");
	Asset::getInstance()->addString("<link rel='manifest' href='/site.webmanifest'>");
	Asset::getInstance()->addString("<meta name='msapplication-TileColor' content='#da532c'>");
	Asset::getInstance()->addString("<meta name='msapplication-TileImage' content='/images/favicon/ms-icon-144x144.png'>");
	Asset::getInstance()->addString("<meta name='theme-color' content='#ffffff'>");
	Asset::getInstance()->addString("<meta name='viewport' content='width=device-width, initial-scale=1.0'>");
	Asset::getInstance()->addString("<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>");
	Asset::getInstance()->addString("<meta name='msvalidate.01' content='EC8F5C6C367270EECEA424441A3E0815'>");
	?>
	
	<title><? $APPLICATION->ShowTitle() ?></title>
</head>
<body>

<div id="panel"><? $APPLICATION->ShowPanel(); ?></div>

<header class="header" id="stick">
	<div class="header__top">
		<nav class="section header__nav">
			<ul class="header__menu">
				<li><a href="#models" class="header__menu-link">Модели</a></li>
				<li><a href="#aboutbit" class="header__menu-link">О бытовках</a></li>
				<li><a href="#delivery" class="header__menu-link">Доставка</a></li>
				<li><a href="#classification" class="header__menu-link">Классификация</a></li>
				<li><a href="#aboutass" class="header__menu-link">О нас</a></li>
				<li><a href="#map" class="header__menu-link">Карта</a></li>
				<li><a href="#contacts" class="header__menu-link">Контакты</a></li>
			</ul>
			<div class="header__location header__location_type_desktop">
				<img src="<?=SITE_TEMPLATE_PATH?>/images/icons/icon__address.png" class="header__location-icon">
				<p class="header__location-value">Санкт-Петербург и область</p>
			</div>
		</nav>
	</div>
	<div class="section header__info">
		<a href="/" class="header__logo link"></a>
		<div class="header__contacts">
			<a href="tel:88124256215" class="phone-link link">(812) 425-62-15</a>
			<?$APPLICATION->IncludeFile(
					SITE_DIR."/include/bitrix24Callback.php",
					Array(),
					Array("MODE"=>"php")
			);?>
			<span class="callback-link link">заказать звонок</span>
			<div class="header__location header__location_type_mobile">
				<img src="<?=SITE_TEMPLATE_PATH?>/images/icons/icon__address.png" class="header__location-icon">
				<p class="header__location-value">Санкт-Петербург и область</p>
			</div>
		</div>
	</div>
</header>

<main class="wrapper">
