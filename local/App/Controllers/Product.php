<?php
namespace App\Controllers;

use Bitrix\Main\Loader;
use Mderrdx\InfoBlocks\InfoBlocks;
use App\Views\Template;

Loader::includeModule('mderrdx.infoblocks');

class Product
{
    public function getByCode($code)
    {
        $iblock = InfoBlocks::getByCode('catalog');
        $product = $iblock->getElementByCode($code);
        if ($product) {
            $template = new Template('product', ['product' => $product]);
            return $template->render();
        }
        
        (new Page404())->index();
    }
}