<?php
AddEventHandler("catalog", "OnSuccessCatalogImport1C", function ($arParams,$arFields){
    // После завершения выгрузки отправить письмо на почту
    if (isset($_GET['type'], $_GET['mode']) && $_GET['type'] === 'catalog' && $_GET['mode'] === 'success') {
        mail('test@test.ru', 'My Subject', 'message');
    }
});
