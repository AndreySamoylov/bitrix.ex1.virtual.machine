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
<?if($arParams["DISPLAY_TOP_PAGER"]){?>
    <?=$arResult["NAV_STRING"]?><br />
<?}?>
<?foreach($arResult["ITEMS"] as $arItem){ ?>
<?
$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

$img = '';
if(isset($arItem["PREVIEW_PICTURE"]['SRC'])){
    $img = $arItem["PREVIEW_PICTURE"]['SRC'];
}else{
    $img = SITE_TEMPLATE_PATH . '/img/rew/no_photo.jpg';
}
?>
        <div id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <div class="review-block">
                <div class="review-text">
                    <div class="review-block-title">
                        <span class="review-block-name">
                            <a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a>
                        </span>
                        <span class="review-block-description">
                            <?=$arItem['ACTIVE_FROM']?>,
                            <?=$arItem['PROPERTIES']['POSITION']['VALUE']?>,
                            <?=$arItem['PROPERTIES']['COMPANY']['VALUE']?>
                        </span>
                    </div>
                    <? if (!empty($arItem["PREVIEW_TEXT"])){?>
                        <div class="review-text-cont">
                            <?=$arItem["PREVIEW_TEXT"]?>
                        </div>
                    <?}?>
                </div>
<!--                    <div class="review-img-wrap"><a href="#"><img src="--><?php //=$arItem["PREVIEW_PICTURE"]['SRC']?><!--" alt="img"></a></div>-->
                    <div class="review-img-wrap"><a href="#"><img src="<?=$img?>" alt="img"></a></div>
            </div>
        </div>
<? } ?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]) { ?>
    <br /><?=$arResult["NAV_STRING"]?>
<? } ?>
