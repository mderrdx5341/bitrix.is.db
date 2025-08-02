<?php
namespace App\Controllers;

use Bitrix\Iblock\Component\Tools;

class Page404
{
    public function index()
    {
        global $APPLICATION;
        if ($APPLICATION->RestartWorkarea())
        {
            $APPLICATION->setTitle('404');
            require(\Bitrix\Main\Application::getDocumentRoot() . "/404.php");
            die();
        }
    }
}