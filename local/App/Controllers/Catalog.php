<?php
namespace App\Controllers;

use Bitrix\Main\Loader;
use App\Views\Template;
use Mderrdx\Infoblocks\IBlockContainer;

Loader::includeModule('mderrdx.infoblocks');

class Catalog
{
    public function __construct()
    {
        IBlockContainer::setClassIBlock('catalog', '\App\Data\Models\Catalog')
            ::setClassSection('catalog', '\App\Data\Models\CatalogCategory')
            ::setClassElement('catalog', '\App\Data\Models\CatalogProduct');
    }
    public function index(): string
    {
        global $APPLICATION;
        $APPLICATION->SetTitle('Каталог');
        $iblock = IBlockContainer::getByCode('catalog');

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
        $iblock = IBlockContainer::getByCode('catalog');
        $category = $iblock->getSectionByCode($code);
        if ($category) {
            $template = new Template('category-item', ['category' => $category]);
            return $template->render();
        }
        
        (new Page404())->index();
    }
}