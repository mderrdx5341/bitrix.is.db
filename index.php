<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('Главная');
?> 
<?= $APPLICATION->getCurPage(false);?>

<?php
$router = new \App\Router($APPLICATION->getCurPage(false));
$routeData = $router->run();


if ($routeData->controller() === '') {
    echo '404';
} else {
    $controller = $routeData->controller();
    echo call_user_func_array([new $controller(), $routeData->action()], $routeData->args());
}

?>
<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>