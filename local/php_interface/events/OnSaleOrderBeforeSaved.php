<?

use Bitrix\Main;
Main\EventManager::getInstance()->addEventHandler('sale', 'OnSaleOrderBeforeSaved', function (Main\Event $event) {

    $order = $event->getParameter("ENTITY");

    $propertyCollection = $order->getPropertyCollection();
    foreach ($propertyCollection as $obProp) {
        $arProp = $obProp->getProperty();

        if($arProp["CODE"] == "UTM_SOURCE") {
            $obProp->setValue($_GET['utm_source']);
        }
    }
});


