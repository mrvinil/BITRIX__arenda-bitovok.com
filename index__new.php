<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Новая страница");
?>
	
	<div class="banner" style="background-image: url(<?= SITE_TEMPLATE_PATH ?>/images/banner__main.png);">
		<h2 class="section banner__title banner__title_type_center">Аренда бытовок</h2>
		<div class="section banner__desc">
			<div class="banner__advantage">
				<div class="banner__advantage-item">
					<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/icon__clock.svg" class="banner__advantage-icon">
					<p class="banner__advantage-name">Будем у вас уже&nbsp;через&nbsp;3&nbsp;часа</p>
				</div>
				<div class="banner__advantage-item">
					<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/icon__wallet.svg" class="banner__advantage-icon">
					<p class="banner__advantage-name">Стоимость от&nbsp;5&nbsp;000&nbsp;р/мес</p>
				</div>
			</div>
			<a href="#" class="btn btn--red banner__button" data-target="callback">Взять в аренду</a>
		</div>
	</div>
	
	<div class="section gap" id="models">
		<h2 class="section-title">Популярные модели</h2>
		<div class="card card_theme_white">
			<?$APPLICATION->IncludeComponent("bitrix:news.list", "catalog", Array(
				"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
					"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
					"AJAX_MODE" => "N",	// Включить режим AJAX
					"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
					"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
					"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
					"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
					"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
					"CACHE_GROUPS" => "Y",	// Учитывать права доступа
					"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
					"CACHE_TYPE" => "A",	// Тип кеширования
					"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
					"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
					"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
					"DISPLAY_DATE" => "N",	// Выводить дату элемента
					"DISPLAY_NAME" => "Y",	// Выводить название элемента
					"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
					"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
					"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
					"FIELD_CODE" => array(	// Поля
						0 => "",
						1 => "",
					),
					"FILTER_NAME" => "",	// Фильтр
					"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
					"IBLOCK_ID" => "2",	// Код информационного блока
					"IBLOCK_TYPE" => "catalog",	// Тип информационного блока (используется только для проверки)
					"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
					"INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
					"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
					"NEWS_COUNT" => "20",	// Количество новостей на странице
					"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
					"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
					"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
					"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
					"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
					"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
					"PAGER_TITLE" => "Новости",	// Название категорий
					"PARENT_SECTION" => "3",	// ID раздела
					"PARENT_SECTION_CODE" => "",	// Код раздела
					"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
					"PROPERTY_CODE" => array(	// Свойства
						0 => "ATT_PRICE",
						1 => "ATT_SIZE",
						2 => "ATT_WATERPROF",
						3 => "MORE_PHOTO",
						4 => "",
					),
					"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
					"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
					"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
					"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
					"SET_STATUS_404" => "N",	// Устанавливать статус 404
					"SET_TITLE" => "N",	// Устанавливать заголовок страницы
					"SHOW_404" => "N",	// Показ специальной страницы
					"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
					"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
					"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
					"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
					"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
					"COMPONENT_TEMPLATE" => "slider"
				),
				false
			);?>
		</div>
	</div>
	
	<div class="section gap">
		<div class="hang">
			<div class="hang__item">
				<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/icon__car-park.svg" class="hang__img">
				<h3 class="hang__name">Собственный автопарк</h3>
				<p class="hang__desc">Большой парк <br> манипуляторов</p>
			</div>
			<div class="hang__item">
				<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/icon__equipment.svg" class="hang__img">
				<h3 class="hang__name">Любое наполнение</h3>
				<p class="hang__desc">Мы укомплектуем бытовку разной мебелью</p>
			</div>
			<div class="hang__item">
				<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/icon__disinfection.svg" class="hang__img">
				<h3 class="hang__name">Санитарная уборка</h3>
				<p class="hang__desc">Дезинфекция бытовок от паразитов</p>
			</div>
			<div class="hang__item">
				<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/icon__rate.svg" class="hang__img">
				<h3 class="hang__name">Тарифы</h3>
				<p class="hang__desc">Выгодные почасовые и посменные тарифы</p>
			</div>
			<div class="hang__item">
				<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/icon__experience.svg" class="hang__img">
				<h3 class="hang__name">На опыте</h3>
				<p class="hang__desc">Водители и операторы с опытом работы >10 лет</p>
			</div>
			<div class="hang__item">
				<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/icon__cleaning.svg" class="hang__img">
				<h3 class="hang__name">Влажная уборка</h3>
				<p class="hang__desc">Проводим плановые уборки после каждой аренды </p>
			</div>
			<div class="hang__item">
				<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/icon__manufacture.svg" class="hang__img">
				<h3 class="hang__name">Собственное производство</h3>
				<p class="hang__desc">Более 500 бытовок у нас на складе</p>
			</div>
			<div class="hang__item">
				<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/icon__sale.svg" class="hang__img">
				<h3 class="hang__name">Клиентам</h3>
				<p class="hang__desc">Скидки и бонусы при повторном заказе</p>
			</div>
		</div>
	</div>
	
	<div class="section gap" id="aboutbit">
		<h2 class="section-title section-title_type_big">О бытовках</h2>
		<div class="slider" id="slider__about-bit">
			<?$APPLICATION->IncludeComponent("bitrix:news.list", "slider", Array(
				"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
					"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
					"AJAX_MODE" => "N",	// Включить режим AJAX
					"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
					"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
					"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
					"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
					"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
					"CACHE_GROUPS" => "Y",	// Учитывать права доступа
					"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
					"CACHE_TYPE" => "A",	// Тип кеширования
					"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
					"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
					"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
					"DISPLAY_DATE" => "N",	// Выводить дату элемента
					"DISPLAY_NAME" => "Y",	// Выводить название элемента
					"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
					"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
					"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
					"FIELD_CODE" => array(	// Поля
						0 => "",
						1 => "",
					),
					"FILTER_NAME" => "",	// Фильтр
					"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
					"IBLOCK_ID" => "1",	// Код информационного блока
					"IBLOCK_TYPE" => "content",	// Тип информационного блока (используется только для проверки)
					"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
					"INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
					"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
					"NEWS_COUNT" => "20",	// Количество новостей на странице
					"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
					"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
					"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
					"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
					"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
					"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
					"PAGER_TITLE" => "Новости",	// Название категорий
					"PARENT_SECTION" => "1",	// ID раздела
					"PARENT_SECTION_CODE" => "",	// Код раздела
					"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
					"PROPERTY_CODE" => array(	// Свойства
						0 => "",
						1 => "ICON",
						2 => "",
					),
					"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
					"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
					"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
					"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
					"SET_STATUS_404" => "N",	// Устанавливать статус 404
					"SET_TITLE" => "N",	// Устанавливать заголовок страницы
					"SHOW_404" => "N",	// Показ специальной страницы
					"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
					"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
					"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
					"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
					"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
				),
				false
			);?>
			<div class="slider__dots" id="slider-dots__about-bit"></div>
		</div>
	</div>
	
	<div class="banner banner_type_small gap"
	     style="background-image: url(<?= SITE_TEMPLATE_PATH ?>/images/banner__srok.png);" id="delivery">
		<h2 class="section banner__title banner__title_type_small">Будем у вас <br> через 3 часа</h2>
		<div class="section banner__desc">
			<a href="#" class="btn btn--red banner__button banner__button_type_small" data-target="callback">Заказать
				доставку</a>
		</div>
	</div>
	
	<div class="section gap" id="classification">
		<h2 class="section-title">Классификация</h2>
		<div class="card card_theme_dark">
			
			<?$APPLICATION->IncludeComponent("bitrix:news.list", "catalog", Array(
					"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
					"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
					"AJAX_MODE" => "N",	// Включить режим AJAX
					"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
					"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
					"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
					"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
					"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
					"CACHE_GROUPS" => "Y",	// Учитывать права доступа
					"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
					"CACHE_TYPE" => "A",	// Тип кеширования
					"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
					"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
					"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
					"DISPLAY_DATE" => "N",	// Выводить дату элемента
					"DISPLAY_NAME" => "Y",	// Выводить название элемента
					"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
					"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
					"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
					"FIELD_CODE" => array(	// Поля
							0 => "",
							1 => "",
					),
					"FILTER_NAME" => "",	// Фильтр
					"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
					"IBLOCK_ID" => "2",	// Код информационного блока
					"IBLOCK_TYPE" => "catalog",	// Тип информационного блока (используется только для проверки)
					"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
					"INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
					"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
					"NEWS_COUNT" => "20",	// Количество новостей на странице
					"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
					"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
					"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
					"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
					"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
					"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
					"PAGER_TITLE" => "Новости",	// Название категорий
					"PARENT_SECTION" => "4",	// ID раздела
					"PARENT_SECTION_CODE" => "",	// Код раздела
					"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
					"PROPERTY_CODE" => array(	// Свойства
							0 => "ATT_PRICE",
							1 => "ATT_SIZE",
							2 => "ATT_WATERPROF",
							3 => "MORE_PHOTO",
							4 => "",
					),
					"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
					"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
					"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
					"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
					"SET_STATUS_404" => "N",	// Устанавливать статус 404
					"SET_TITLE" => "N",	// Устанавливать заголовок страницы
					"SHOW_404" => "N",	// Показ специальной страницы
					"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
					"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
					"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
					"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
					"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
					"COMPONENT_TEMPLATE" => "slider"
			),
					false
			);?>
		</div>
	</div>
	
	<div class="section gap" id="aboutass">
		<h2 class="section-title section-title_type_big">О нас</h2>
		<div class="slider" id="slider__about-as">
			<?$APPLICATION->IncludeComponent("bitrix:news.list", "slider", Array(
					"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
					"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
					"AJAX_MODE" => "N",	// Включить режим AJAX
					"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
					"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
					"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
					"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
					"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
					"CACHE_GROUPS" => "Y",	// Учитывать права доступа
					"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
					"CACHE_TYPE" => "A",	// Тип кеширования
					"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
					"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
					"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
					"DISPLAY_DATE" => "N",	// Выводить дату элемента
					"DISPLAY_NAME" => "Y",	// Выводить название элемента
					"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
					"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
					"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
					"FIELD_CODE" => array(	// Поля
							0 => "",
							1 => "",
					),
					"FILTER_NAME" => "",	// Фильтр
					"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
					"IBLOCK_ID" => "1",	// Код информационного блока
					"IBLOCK_TYPE" => "content",	// Тип информационного блока (используется только для проверки)
					"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
					"INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
					"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
					"NEWS_COUNT" => "20",	// Количество новостей на странице
					"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
					"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
					"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
					"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
					"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
					"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
					"PAGER_TITLE" => "Новости",	// Название категорий
					"PARENT_SECTION" => "2",	// ID раздела
					"PARENT_SECTION_CODE" => "",	// Код раздела
					"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
					"PROPERTY_CODE" => array(	// Свойства
							0 => "",
							1 => "ICON",
							2 => "",
					),
					"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
					"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
					"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
					"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
					"SET_STATUS_404" => "N",	// Устанавливать статус 404
					"SET_TITLE" => "N",	// Устанавливать заголовок страницы
					"SHOW_404" => "N",	// Показ специальной страницы
					"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
					"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
					"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
					"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
					"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
			),
					false
			);?>
			<div class="slider__dots" id="slider-dots__about-as"></div>
		</div>
	</div>
	
	<div class="banner banner_type_small gap"
	     style="background-image: url(<?= SITE_TEMPLATE_PATH ?>/images/banner__otpravka.png);">
		<h2 class="section banner__title banner__title_type_small">Ваша бытовка <br> готова к отправке</h2>
		<div class="section banner__desc">
			<a href="#" class="btn btn--red banner__button banner__button_type_small" data-target="callback">Взять в
				аренду</a>
		</div>
	</div>
	
	<div class="section gap" id="map">
		<h2 class="section-title">Где мы работаем</h2>
		<img src="<?= SITE_TEMPLATE_PATH ?>/images/map.png" class="map img-responsive">
	</div>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>