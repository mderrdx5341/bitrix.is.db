<?php

use App\AutoLoader;

require_once(__DIR__ . '/../local/php_interface/AutoLoader.php');
new AutoLoader(__DIR__ . '/../local/');

$router = new \App\Router(explode('?', $_SERVER['REQUEST_URI'])[0]);
$routeData = $router->run();

$controller = $routeData->controller();
if ($routeData->withOutTemplate()) {
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
    print call_user_func_array([new $controller(), $routeData->action()], $routeData->args());
} else {
    require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
    print call_user_func_array([new $controller(), $routeData->action()], $routeData->args());
    require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
}

?>
