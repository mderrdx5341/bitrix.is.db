<?php
namespace App\Controllers;

class MainPage
{
    public function index(): string
    {
        global $APPLICATION;
        $APPLICATION->SetTitle('Главная');
        return 'main page';
    }
}