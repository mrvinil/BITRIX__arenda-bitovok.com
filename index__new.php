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

<div class="section gap">
	<h2 class="section-title">Популярные модели</h2>
	<div class="card-wrap">
		
		<div class="card">
			<div class="card__img-list">
				<img src="<?=SITE_TEMPLATE_PATH?>/images/bk/bk1.png" alt="" class="card__img img-responsive">
			</div>
			<div class="card__desc">
				<p class="card__price">от 5 000 р/мес</p>
				<h3 class="card__name">Блок-контейнер «Стандартный»</h3>
				<p class="card__property">6 000 х 2 400 х 2 400 мм</p>
			</div>
			<a href="#" class="btn btn--cta card__button">Забронировать</a>
		</div>
		
		<div class="card">
			<div class="card__img-list">
				<img src="<?=SITE_TEMPLATE_PATH?>/images/bk/bk2.png" alt="" class="card__img img-responsive">
			</div>
			<div class="card__desc">
				<p class="card__price">от 5 000 р/мес</p>
				<h3 class="card__name">Контейнер под склад «Морской»</h3>
				<p class="card__property">6 000 х 2 400 х 2 400 мм</p>
			</div>
			<a href="#" class="btn btn--cta card__button">Забронировать</a>
		</div>
		<div class="card">
			<div class="card__img-list">
				<img src="<?=SITE_TEMPLATE_PATH?>/images/bk/bk3.png" alt="" class="card__img img-responsive">
			</div>
			<div class="card__desc">
				<p class="card__price">от 5 000 р/мес</p>
				<h3 class="card__name">Блок-контейнер «Распашонка»</h3>
				<p class="card__property">6 000 х 2 400 х 2 400 мм</p>
			</div>
			<a href="#" class="btn btn--cta card__button">Забронировать</a>
		</div>
		<div class="card">
			<div class="card__img-list">
				<img src="<?=SITE_TEMPLATE_PATH?>/images/bk/bk4.png" alt="" class="card__img img-responsive">
			</div>
			<div class="card__desc">
				<p class="card__price">от 5 000 р/мес</p>
				<h3 class="card__name">Блок-контейнер «С тамбуром»</h3>
				<p class="card__property">6 000 х 2 400 х 2 400 мм</p>
			</div>
			<a href="#" class="btn btn--cta card__button">Забронировать</a>
		</div>
	</div>
</div>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>