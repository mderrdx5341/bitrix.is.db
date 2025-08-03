<?php
namespace App\Controllers;

use App\Data\Bitrix\InfoBlocks;
use App\Views\Template;

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