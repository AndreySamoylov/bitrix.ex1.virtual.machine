<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

foreach ($arResult['ITEMS'] as &$arItem){
    if(isset($arItem['PREVIEW_PICTURE'])){
        $arItem['PREVIEW_PICTURE'] = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'],
            array('width'=>150, 'height'=> 150),
            BX_RESIZE_IMAGE_PROPORTIONAL,
            true);
    }
}
unset($arItem);