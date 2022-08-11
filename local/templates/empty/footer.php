<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>



</main>

<footer class="footer gap" id="contacts">
	<div class="section footer__info">
		<div class="footer__logo-wrap">
			<a href="/" class="footer__logo link"></a>
			<p class="footer__address footer__address_type_desktop">Режим работы: Пн–Пт с 9:00 до 19:00</p>
		</div>
		<div class="footer__contacts">
			<a href="tel:<? if(file_exists($phonePath)) require $phonePath; ?>" class="phone-link link">
				<?$APPLICATION->IncludeFile(
						SITE_DIR."/include/new/phone.php",
						Array(),
						Array("MODE"=>"php")
				);?>
			</a>
			<?$APPLICATION->IncludeFile(
					SITE_DIR."/include/new/bitrix24Callback.php",
					Array(),
					Array("MODE"=>"php")
			);?>
			<span class="callback-link link">заказать звонок</span>
			<p class="footer__address footer__address_type_mobile">Режим работы: Пн–Пт с 9:00 до 19:00</p>
		</div>
	</div>
</footer>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/assets/templates/callback.php';?>

<script>
	(function(w,d,u){
		var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/60000|0);
		var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
	})(window,document,'https://cdn-ru.bitrix24.ru/b5901341/crm/site_button/loader_1_rp61zn.js');
</script>

</body>
</html>