<?php
namespace App\Controllers;

use Bitrix\Main\Loader;
use Mderrdx\InfoBlocks\IBlockContainer;
use App\Views\Template;

Loader::includeModule('mderrdx.infoblocks');

class News
{
    public function index()
    {
        $iblock = IBlockContainer::getByCode('NEWS');
        $news = $iblock->getElements([
            'filter' => ['ACTIVE' => 'Y'],
        ], '\\App\\Data\\Models\\News');

        $template = new Template('news', ['news' => $news]);
        return $template->render();
    }

    public function getByCode($code)
    {
        $iblock = IBlockContainer::getByCode('NEWS');

        $news = $iblock->getElementByCode($code, '\\App\\Data\\Models\\News');

        $template = new Template('news-item', ['newsItem' => $news]);
        return $template->render();
    }
}
