<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("tags", "Voguish - сайт моды");
$APPLICATION->SetPageProperty("keywords_inner", "Voguish - сайт моды");
$APPLICATION->SetPageProperty("title", "Voguish - сайт моды");
$APPLICATION->SetPageProperty("keywords", "Voguish - сайт моды");
$APPLICATION->SetPageProperty("description", "Voguish - сайт моды");
$APPLICATION->SetTitle("Voguish - сайт моды");
?>
<? $APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"top_slider", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "DETAIL_PICTURE",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "sliders",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "4",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "top_slider"
	),
	false
); ?>


    <!-- nam-matis -->
<?php /*
<?php
CModule::IncludeModule('iblock');
$arSelect = Array("ID", "IBLOCK_ID", "NAME", "PREVIEW_TEXT", "DETAIL_PAGE_URL", "DETAIL_PICTURE");
$arFilter = Array("IBLOCK_ID"=>1, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y", "!PROPERTY_SHOW_MAIN"=>false);
$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>4), $arSelect);
var_dump($res);
?>
<? if ($res->arResult): $i = 0; ?>

    <div class="nam-matis">
        <? while ($ob = $res->GetNextElement()): $arFields = $ob->GetFields(); ?>
            <? if ($i % 2 == 0): ?>
                <div class="nam-matis-top">

            <? endif; ?>
            <? $img = CFile::GetPath($arFields["DETAIL_PICTURE"]); ?>
            <div class="col-md-6 nam-matis-1">
                <a href="<?= $arFields['DETAIL_PAGE_URL'] ?>"><img src="<?= $img ?>" class="img-responsive"
                                                                   alt="<?= $arFields['NAME'] ?>"></a>
                <h3><a href="<?= $arFields['DETAIL_PAGE_URL'] ?>"><?= $arFields['NAME'] ?></a></h3>
                <p><?= mbCutString($arFields['PREVIEW_TEXT'], 100) ?></p>
            </div>
            <? if ($i % 2 == 1): ?>
                <div class="clearfix"></div>
            <? endif; ?>
            <? if ($i % 2 == 1):?>
                    </div
                    <?endif; ?>
            <? $i++; endwhile; ?>
    </div>
<? endif; ?>
*/?>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>