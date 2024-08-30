<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global \CMain $APPLICATION */
/** @global \CUser $USER */
/** @global \CDatabase $DB */
/** @var CBitrixComponentTemplate $this */

foreach($arResult["ITEMS"] as $arItem):
	if(isset($arItem["PROPERTIES"]["MORE_PHOTO"]["VALUE"]) && is_array($arItem["PROPERTIES"]["MORE_PHOTO"]["VALUE"]))
	{
		foreach($arItem["PROPERTIES"]["MORE_PHOTO"]["VALUE"] as $FILE)
		{
			$FILE = CFile::GetFileArray($FILE);
			if(is_array($FILE))
				$arResult["MORE_PHOTO"][$arItem["ID"]][]=$FILE;
		}
	}
endforeach;