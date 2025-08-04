<?php
namespace App\Controllers;

use Bitrix\Main\Loader;
use Mderrdx\InfoBlocks\InfoBlocks;
use App\Views\Template;

Loader::includeModule('mderrdx.infoblocks');

class News
{
    public function index()
    {
        $iblock = InfoBlocks::getByCode('NEWS');
        $news = $iblock->getElements([
            'filter' => ['ACTIVE' => 'Y'],
        ]);

        $template = new Template('news', ['news' => $news]);
        return $template->render();
    }

    public function getByCode($code)
    {
        $iblock = InfoBlocks::getByCode('NEWS');

        $news = $iblock->getElementByCode($code, '\\App\\Data\\Models\\News');

        $template = new Template('news-item', ['newsItem' => $news]);
        return $template->render();
    }
}
