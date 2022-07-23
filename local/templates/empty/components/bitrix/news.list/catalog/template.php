<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<?foreach($arResult["ITEMS"] as $arItem):?>
<?
$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>
	<div class="card__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<div class="card__img-list">
			<?if($arItem["PROPERTIES"]["ATT_WATERPROF"]["VALUE"]):?>
				<img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/icon__blob.svg" class="card__label">
			<?endif;?>
			<?if($arItem["PREVIEW_PICTURE"]["SRC"]):?>
				<img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="<?=$arItem["NAME"];?>" class="card__img img-responsive">
			<?else:?>
				<div class="card__img-slider">
					<? foreach ($arItem["PROPERTIES"]["MORE_PHOTO"]["VALUE"] as $PHOTO): ?>
						<? $src = CFile::GetFileArray($PHOTO); ?>
						<div class="card__img-item">
							<img src="<?= $src["SRC"] ?>" alt="<?=$arItem["NAME"];?>" class="card__img img-responsive">
						</div>
					<?endforeach;?>
				</div>
			<?endif;?>
		</div>
		<div class="card__desc">
			<p class="card__price"><?=$arItem["PROPERTIES"]["ATT_PRICE"]["VALUE"];?></p>
			<h3 class="card__name"><?=$arItem["NAME"];?></h3>
			<p class="card__property"><?=$arItem["PROPERTIES"]["ATT_SIZE"]["VALUE"];?></p>
		</div>
		<a href="#" class="btn btn--cta card__button" data-target="callback">Арендовать</a>
	</div>
<?endforeach;?>