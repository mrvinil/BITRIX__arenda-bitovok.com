<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Новая страница");
?>

<div class="banner" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/images/banner__main.png);">
	<h2 class="section banner__title banner__title_type_center">Аренда бытовок</h2>
	<div class="section banner__desc">
		<div class="banner__advantage">
			<div class="banner__advantage-item">
				<img src="<?=SITE_TEMPLATE_PATH?>/images/icons/icon__clock.svg" class="banner__advantage-icon">
				<p class="banner__advantage-name">Будем у вас уже&nbsp;через 3 часа</p>
			</div>
			<div class="banner__advantage-item">
				<img src="<?=SITE_TEMPLATE_PATH?>/images/icons/icon__wallet.svg" class="banner__advantage-icon">
				<p class="banner__advantage-name">Стоимость от&nbsp;5 000 р/мес</p>
			</div>
		</div>
		<a href="#" class="btn btn--red banner__button">Взять в аренду</a>
	</div>
</div>

<div class="section gap">
	<h2 class="section-title">Популярные модели</h2>
	<div class="card card_theme_white">
		
		<div class="card__item">
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
		
		<div class="card__item">
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
		<div class="card__item">
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
		<div class="card__item">
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

<div class="section gap">
	<div class="hang">
		<div class="hang__item">
			<img src="<?=SITE_TEMPLATE_PATH?>/images/icons/icon__car-park.svg" class="hang__img">
			<h3 class="hang__name">Собственный автопарк</h3>
			<p class="hang__desc">Большой парк <br> манипуляторов</p>
		</div>
		<div class="hang__item">
			<img src="<?=SITE_TEMPLATE_PATH?>/images/icons/icon__equipment.svg" class="hang__img">
			<h3 class="hang__name">Любое наполнение</h3>
			<p class="hang__desc">Мы укомплектуем бытовку&nbsp;разной&nbsp;мебелью</p>
		</div>
		<div class="hang__item">
			<img src="<?=SITE_TEMPLATE_PATH?>/images/icons/icon__disinfection.svg" class="hang__img">
			<h3 class="hang__name">Санитарная уборка</h3>
			<p class="hang__desc">Дезинфекция&nbsp;бытовок от&nbsp;паразитов</p>
		</div>
		<div class="hang__item">
			<img src="<?=SITE_TEMPLATE_PATH?>/images/icons/icon__rate.svg" class="hang__img">
			<h3 class="hang__name">Тарифы</h3>
			<p class="hang__desc">Выгодные&nbsp;почасовые и&nbsp;посменные&nbsp;тарифы</p>
		</div>
		<div class="hang__item">
			<img src="<?=SITE_TEMPLATE_PATH?>/images/icons/icon__experience.svg" class="hang__img">
			<h3 class="hang__name">На опыте</h3>
			<p class="hang__desc">Водители&nbsp;и&nbsp;операторы с&nbsp;опытом&nbsp;работы >10 лет</p>
		</div>
		<div class="hang__item">
			<img src="<?=SITE_TEMPLATE_PATH?>/images/icons/icon__cleaning.svg" class="hang__img">
			<h3 class="hang__name">Влажная уборка</h3>
			<p class="hang__desc">Проводим&nbsp;плановые&nbsp;уборки после&nbsp;каждой&nbsp;аренды </p>
		</div>
		<div class="hang__item">
			<img src="<?=SITE_TEMPLATE_PATH?>/images/icons/icon__manufacture.svg" class="hang__img">
			<h3 class="hang__name">Собственное производство</h3>
			<p class="hang__desc">Более&nbsp;500&nbsp;бытовок у&nbsp;нас&nbsp;на&nbsp;складе</p>
		</div>
		<div class="hang__item">
			<img src="<?=SITE_TEMPLATE_PATH?>/images/icons/icon__sale.svg" class="hang__img">
			<h3 class="hang__name">Клиентам</h3>
			<p class="hang__desc">Скидки&nbsp;и&nbsp;бонусы при&nbsp;повторном&nbsp;заказе</p>
		</div>
	</div>
</div>

<div class="section gap">
	<h2 class="section-title section-title_type_big">О бытовках</h2>
	<div class="slider">
		<div class="slider__item">
			<div class="slider__side-first">
				<img src="<?=SITE_TEMPLATE_PATH?>/images/slider1/img__vn-otdelka.png" class="slider__img img-responsive">
			</div>
			<div class="slider__side-second">
				<div class="slider__desc">
					<img src="<?=SITE_TEMPLATE_PATH?>/images/slider1/icon__vn-otdelka.svg" class="slider__icon">
					<h3 class="slider__name">Внешняя отделка</h3>
					<p class="slider__text">Внешняя отделка сдаваемых в аренду базовых бытовок и
						блок-контейнеров — это оцинкованный
						профлист (профнастил) С-8.
						<br><br>
						Цвет профлиста можно выбрать в соответствии с каталогом RAL. Также можно выбрать полимерное
						покрытие.</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="banner banner_type_small gap" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/images/banner__srok.png);">
	<h2 class="section banner__title banner__title_type_small">Будем у вас <br> через 3 часа</h2>
	<div class="section banner__desc">
		<a href="#" class="btn btn--red banner__button banner__button_type_small">Заказать доставку</a>
	</div>
</div>

<div class="section gap">
	<h2 class="section-title">Классификация</h2>
	<div class="card card_theme_dark">
		<div class="card__item">
			<div class="card__img-list">
				<img src="<?=SITE_TEMPLATE_PATH?>/images/modul/modul1.png" alt="" class="card__img img-responsive">
			</div>
			<div class="card__desc">
				<h3 class="card__name">Для рабочих</h3>
			</div>
			<a href="#" class="btn btn--cta card__button">Забронировать</a>
		</div>
		<div class="card__item">
			<div class="card__img-list">
				<img src="<?=SITE_TEMPLATE_PATH?>/images/modul/modul2.png" alt="" class="card__img img-responsive">
			</div>
			<div class="card__desc">
				<h3 class="card__name">Для прорабов</h3>
			</div>
			<a href="#" class="btn btn--cta card__button">Забронировать</a>
		</div>
		<div class="card__item">
			<div class="card__img-list">
				<img src="<?=SITE_TEMPLATE_PATH?>/images/icons/icon__blob.svg" class="card__label">
				<img src="<?=SITE_TEMPLATE_PATH?>/images/modul/modul3.png" alt="" class="card__img img-responsive">
			</div>
			<div class="card__desc">
				<h3 class="card__name">Сантехнические модули</h3>
			</div>
			<a href="#" class="btn btn--cta card__button">Забронировать</a>
		</div>
		<div class="card__item">
			<div class="card__img-list">
				<img src="<?=SITE_TEMPLATE_PATH?>/images/modul/modul4.png" alt="" class="card__img img-responsive">
			</div>
			<div class="card__desc">
				<h3 class="card__name">Офисные модули</h3>
			</div>
			<a href="#" class="btn btn--cta card__button">Забронировать</a>
		</div>
	</div>
</div>

<div class="section gap">
	<h2 class="section-title section-title_type_big">О нас</h2>
	<div class="slider">
		<div class="slider__item">
			<div class="slider__side-first">
				<img src="<?=SITE_TEMPLATE_PATH?>/images/slider2/img__postavki.png" class="slider__img img-responsive">
			</div>
			<div class="slider__side-second">
				<div class="slider__desc">
					<img src="<?=SITE_TEMPLATE_PATH?>/images/slider2/icon__postavki.svg" class="slider__icon">
					<h3 class="slider__name">Прямые поставки материалов</h3>
					<p class="slider__text">За счет многолетнего опыта в сфере производства и строительства мобильных
						сооружений и модульных зданий нам удалось наладить связи с прямыми поставщиками
						строительных материалов.</p>
				</div>
			</div>
		</div>
	</div>
</div>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>