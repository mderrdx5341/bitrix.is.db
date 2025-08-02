<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
?> 

<?php
$router = new \App\Router($APPLICATION->getCurPage(false));
$routeData = $router->run();

$controller = $routeData->controller();
echo call_user_func_array([new $controller(), $routeData->action()], $routeData->args());

?>

<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>