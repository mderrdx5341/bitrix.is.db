<?php
namespace App\Controllers;

use Bitrix\Main\Loader;
use Mderrdx\InfoBlocks\IBlockContainer;
use App\Views\Template;

Loader::includeModule('mderrdx.infoblocks');

class Product
{
    public function __construct()
    {
        IBlockContainer::setClassIBlock('catalog', '\App\Data\Models\Catalog')
            ::setClassSection('catalog', '\App\Data\Models\CatalogCategory')
            ::setClassElement('catalog', '\App\Data\Models\CatalogProduct');
        
        IBlockContainer::setClassSection('authors', '\App\Data\Models\AuthorCountry')
            ::setClassElement('authors', '\App\Data\Models\Author');
    }

    public function getByCode($code)
    {
        $iblock = IBlockContainer::getByCode('catalog');
        $product = $iblock->getElementByCode($code);
        if ($product) {
            $template = new Template('product', ['product' => $product]);
            return $template->render();
        }
        
        (new Page404())->index();
    }
}