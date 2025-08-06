<?php
namespace App\Controllers;

use Bitrix\Iblock\Component\Tools;

class Page404 extends AbstractController
{
    public function execute(){}

    public function index()
    {
        $this->app()->setTitle('404');
        require(\Bitrix\Main\Application::getDocumentRoot() . "/404.php");
        die();
    }
}