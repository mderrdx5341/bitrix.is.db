<?php
namespace App\Data\Models;

use Bitrix\Main\Loader;
use Mderrdx\Infoblocks\IBlockSection;

Loader::includeModule('mderrdx.infoblocks');

class CatalogCategory extends IBlockSection
{
    public function title()
    {
        return $this->name();
    }
}