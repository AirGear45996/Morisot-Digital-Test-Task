<?php

define('PHP_INTERFACE_INIT_INCLUDES', $_SERVER['DOCUMENT_ROOT'] . '/local/php_interface/events/');

require_once(PHP_INTERFACE_INIT_INCLUDES . "OnSaleOrderBeforeSaved.php");
require_once(PHP_INTERFACE_INIT_INCLUDES . "OnSuccessCatalogImport1C.php");
require_once(PHP_INTERFACE_INIT_INCLUDES . "OnBeforeIBlockSectionUpdate.php");