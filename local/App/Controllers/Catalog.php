<?php
namespace App\Controllers;

use Bitrix\Main\Loader;
use Mderrdx\Infoblocks\InfoBlocks;
use App\Views\Template;

Loader::includeModule('mderrdx.infoblocks');

class Catalog
{
    public function index(): string
    {
        global $APPLICATION;
        $APPLICATION->SetTitle('Каталог');
        $iblock = Infoblocks::getByCode('catalog');

        $categories = $iblock->getSections([
            'filter' => ['DEPTH_LEVEL' => 1]
        ]);
        $template = new Template('catalog', ['categories' => $categories]);
        return $template->render();
    }

    public function getByCode($url)
    {
        $codes = explode('/', $url);
        $code = count($codes) > 1 ? end($codes) : $codes[0];
        $iblock = InfoBlocks::getByCode('catalog');
        $category = $iblock->getSectionByCode($code);
        if ($category) {
            $template = new Template('category-item', ['category' => $category]);
            return $template->render();
        }
        
        (new Page404())->index();
    }
}