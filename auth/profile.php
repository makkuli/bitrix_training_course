<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords_inner", "Профиль пользователя");
$APPLICATION->SetPageProperty("title", "Профиль пользователя");
$APPLICATION->SetPageProperty("keywords", "Профиль пользователя");
$APPLICATION->SetPageProperty("description", "Профиль пользователя");
$APPLICATION->SetTitle("Профиль пользователя");
?><?$APPLICATION->IncludeComponent("bitrix:main.profile", "profile", Array(
	"CHECK_RIGHTS" => "N",	// Проверять права доступа
		"SEND_INFO" => "N",	// Генерировать почтовое событие
		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
		"USER_PROPERTY" => "",	// Показывать доп. свойства
		"USER_PROPERTY_NAME" => "",	// Название закладки с доп. свойствами
	),
	false
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>