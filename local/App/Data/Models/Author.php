<?php
namespace App\Data\Models;

use Bitrix\Main\Loader;
use Mderrdx\Infoblocks\IBlockElement;

Loader::includeModule('mderrdx.infoblocks');

class Author extends IBlockElement
{
    public function title()
    {
        return $this->name();
    }
}