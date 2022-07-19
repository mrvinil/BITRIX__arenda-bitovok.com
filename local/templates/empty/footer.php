<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>



</main>

<footer class="footer gap" id="contacts">
	<div class="section footer__info">
		<div class="footer__logo-wrap">
			<a href="/" class="footer__logo link"></a>
			<p class="footer__address">Режим работы: Пн–Пт с 9:00 до 19:00</p>
		</div>
		<div class="footer__contacts">
			<a href="tel:88124256215" class="phone-link link">(812) 425-62-15</a>
			<?$APPLICATION->IncludeFile(
					SITE_DIR."/include/bitrix24Callback.php",
					Array(),
					Array("MODE"=>"php")
			);?>
			<span class="callback-link link">заказать звонок</span>
		</div>
	</div>
</footer>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/assets/templates/callback.php';?>
<?//php require_once $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/assets/templates/callbackDemo.php';?>
<?//php require_once $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/assets/templates/callbackService.php';?>

</body>
</html>