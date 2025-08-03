<?php
namespace App\Controllers;

use App\Data\InfoBlocks;
use App\Views\Template;

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

        $news = $iblock->getElementByCode($code);

        $template = new Template('news-item', ['newsItem' => $news]);
        return $template->render();
    }
}
