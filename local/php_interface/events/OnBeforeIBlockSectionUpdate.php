<?
AddEventHandler("iblock", "OnBeforeIBlockSectionUpdate", function (&$arFields) {
    // При выгрузке не менять название разделов и символьный код раздела
    if (isset($_GET['type'], $_GET['mode']) && $_GET['type'] === 'catalog' && $_GET['mode'] === 'import') {
        unset($arFields['NAME']);
        unset($arFields['CODE']);
    }
});