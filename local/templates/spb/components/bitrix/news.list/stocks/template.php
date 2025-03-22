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

<div class="container sect-gap">
	<div class="stocks">
		<div class="stocks__desc">
			Обращаем Ваше внимание.<br>
			При заказе Вы можете воспользоваться только одной из предложенных акций.<br>
			Подробности акции уточняйте у менеджера.
		</div>
		<h2>Прошедшие акции и скидки</h2>
		<div class="stocks__list">
			<?foreach($arResult["ITEMS"] as $arItem):?>
			<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
				<div class="stocks__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
					<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class="stocks__img" alt="<?= $arItem["NAME"]; ?>" title="<?= $arItem["NAME"]; ?>">
<!--					<div class="stocks__name">--><?php //=$arItem["NAME"]?><!--</div>-->
					<div class="stocks__text"><?=$arItem["PREVIEW_TEXT"]?></div>
				</div>
			<?endforeach;?>
		</div>
	</div>
</div>
