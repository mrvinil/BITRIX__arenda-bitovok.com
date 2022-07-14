<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Новая страница");
?>

	<div class="banner" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/images/banner__main.png);">
		<h2 class="section banner__title banner__title_type_center">Аренда бытовок</h2>
		<div class="section banner__desc">
			<div class="banner__advantage">
				<div class="banner__advantage-item">
					<img src="<?=SITE_TEMPLATE_PATH?>/images/icons/clock.svg" class="banner__advantage-icon">
					<p class="banner__advantage-name">Будем у вас уже&nbsp;через 3 часа</p>
				</div>
				<div class="banner__advantage-item">
					<img src="<?=SITE_TEMPLATE_PATH?>/images/icons/wallet.svg" class="banner__advantage-icon">
					<p class="banner__advantage-name">Стоимость от&nbsp;5 000 р/мес</p>
				</div>
			</div>
			<a href="#" class="btn btn--red banner__button">Взять в аренду</a>
		</div>
	</div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>