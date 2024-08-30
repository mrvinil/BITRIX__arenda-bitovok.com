<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);

// Фильтруем элементы и выбираем только тот, у которого название "Фото для Москвы"
$moscowItem = null;
foreach($arResult["ITEMS"] as $arItem) {
	if($arItem["NAME"] == "Фото для Москвы") {
		$moscowItem = $arItem;
		break;
	}
}

// Проверяем, что элемент с названием "Фото для Москвы" найден
if($moscowItem) {
	$uniqueTags = [];
	foreach($moscowItem["PROPERTIES"]["MORE_PHOTO"]["DESCRIPTION"] as $desc) {
		$tags = explode(';', $desc);
		foreach($tags as $tag) {
			$tag = trim($tag);
			if ($tag && !in_array($tag, $uniqueTags)) {
				$uniqueTags[] = $tag;
			}
		}
	}
	?>
	
	<div id="filters">
		<h3 class="filters__title">Выбери свою бытовку сам</h3>
		<div class="filters__wrap">
			<div class="filters__item">
				<div class="filters__subtitle">Характеристики бытовки:</div>
				<div class="filters__value">
					<?foreach($uniqueTags as $tag):?>
						<label><input type="checkbox" class="filter" value="<?= htmlspecialchars($tag) ?>"><?= htmlspecialchars($tag) ?></label>
					<?endforeach;?>
				</div>
			</div>
		</div>
		
		<div class="clear-filters btn">Сбросить</div>
	</div>
	
	<ul class="gallery sect-gap" id="gallery">
		<?
		$this->AddEditAction($moscowItem['ID'], $moscowItem['EDIT_LINK'], CIBlock::GetArrayByID($moscowItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($moscowItem['ID'], $moscowItem['DELETE_LINK'], CIBlock::GetArrayByID($moscowItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		<? foreach ($moscowItem["PROPERTIES"]["MORE_PHOTO"]["VALUE"] as $key => $PHOTO): ?>
			<? $src = CFile::GetFileArray($PHOTO); ?>
			<li class="gallery__item filterable" data-fancybox="gallery" data-src="<?= $src["SRC"] ?>" id="<?=$this->GetEditAreaId($moscowItem['ID']);?>">
				<img data-src="<?= $src["SRC"] ?>" data-lazyload-error-src="/images/loader.gif" src="/images/loader.gif" class="gallery__img lazy">
				<span class="gallery__desc"><?= htmlspecialchars($moscowItem['PROPERTIES']['MORE_PHOTO']['DESCRIPTION'][$key]);?></span>
			</li>
		<?endforeach;?>
	</ul>
	
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			const lazyImages = document.querySelectorAll('.lazy');
			const filters = document.querySelectorAll('.filter');
			const clearFiltersButton = document.querySelector('.clear-filters');
			const gallery = document.getElementById('gallery');
			const loadedImages = new Set();
			
			function isVisibleInContainer(img, container) {
				const imgRect = img.getBoundingClientRect();
				const containerRect = container.getBoundingClientRect();
				
				return (
					imgRect.top < containerRect.bottom &&
					imgRect.bottom > containerRect.top &&
					imgRect.left < containerRect.right &&
					imgRect.right > containerRect.left
				);
			}
			
			function updateGallery() {
				const anyFilterSelected = Array.from(filters).some(function(filter) {
					return filter.checked;
				});
				
				const items = document.querySelectorAll('.filterable');
				items.forEach(function(item) {
					const description = item.querySelector('.gallery__desc').innerText.toLowerCase();
					const descriptions = description.split(';').map(function(desc) {
						return desc.trim();
					});
					
					const isVisible = anyFilterSelected ? Array.from(filters).some(function(filter) {
						const value = filter.value.toLowerCase();
						return filter.checked && descriptions.includes(value);
					}) : true;
					
					item.style.display = isVisible ? 'flex' : 'none';
				});
			}
			
			filters.forEach(function(filter) {
				filter.addEventListener('change', updateGallery);
			});
			
			clearFiltersButton.addEventListener('click', function() {
				filters.forEach(function(filter) {
					filter.checked = false;
				});
				updateGallery();
			});
			
			function lazyLoad() {
				lazyImages.forEach(function(image) {
					if (!loadedImages.has(image) && isVisibleInContainer(image, gallery)) {
						image.src = image.getAttribute('data-src');
						image.classList.remove('lazy');
						loadedImages.add(image);
					}
				});
			}
			
			lazyLoad();
			gallery.addEventListener('scroll', lazyLoad);
			window.addEventListener('scroll', lazyLoad);
		});
	</script>
<?}?>