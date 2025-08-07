<?php
namespace App\Data\Models;

use Bitrix\Main\Loader;

use Mderrdx\Infoblocks\IBlockSection;

Loader::includeModule('mderrdx.infoblocks');

class AuthorCountry extends IBlockSection 
{
    public function title()
    {
        return $this->name();
    }
}