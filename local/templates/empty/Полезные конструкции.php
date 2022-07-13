<? if ($bisMainPage): //если главная то выводим контент?>
	Можно вставить что угодно, будет только на главной (вкл область, например)
<? else: ?>
	<h1><? $APPLICATION->ShowTitle(false); ?></h1>
	<? // Навигационная цепочка - http://dev.1c-bitrix.ru/user_help/settings/settings/components_2/navigation/breadcrumb.php
	$APPLICATION->IncludeComponent(
		"bitrix:breadcrumb",
		".default",
		array(
			"START_FROM" => "0",
			"PATH" => "",
			"SITE_ID" => "s1",
			"COMPONENT_TEMPLATE" => ".default"
		),
		false
	); ?>
<? endif; ?>

<? if ($arResult["ITEMS"]): //для шаблона компонентов, проверяем есть ли хотяюы 1 элемент в массиве, то выводим?>
<? endif; ?>


<? foreach ($arResult["ITEMS"] as $cell => $arItem):// если в верстке первыйм должен быть активный элемент, применяем такой метод?>
	<div class="slider<? if (!$cell): ?> active<? endif; ?>"></div>
<? endforeach; ?>


<?
//подставляем в mailto почту.
$emailPath = $_SERVER['DOCUMENT_ROOT'] . SITE_DIR . "include/conf/map-email.php"; ?>
<a href="mailto:<? if(file_exists($emailPath)) require $emailPath; ?>">
	<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
			"AREA_FILE_SHOW" => "file",
			"PATH" => SITE_DIR . "include/conf/map-email.php",
		)
	);?>
</a>



<?
CModule::IncludeModule("arturgolubev.mobiledetect");
$detect = new \Arturgolubev\Mobiledetect\Detect();

$mobileAndTablet = $detect->isMobile();
$mobileOnly = $detect->isMobile() && !$detect->isTablet();
$tabletOnly = $detect->isTablet();
$desktopOnly = !$detect->isTablet() && !$detect->isMobile();
?>

<?
if($detect->isMobile()){
	echo 'Мобилка + Планшет ';
}

if($detect->isMobile() && !$detect->isTablet() ){
	echo 'Только мобилы ';
}
if($detect->isTablet()){
	echo 'Планшет ';
}
if(!$detect->isTablet() && !$detect->isMobile()){
	echo 'Десктоп ';
}


// Определение ОС
if( $detect->isiOS() ){
	echo 'IOS ';
}

if( $detect->isAndroidOS() ){
	echo 'Android ';
}
?>