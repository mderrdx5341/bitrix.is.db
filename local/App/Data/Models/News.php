<?php
namespace App\Data\Models;

use Bitrix\Main\Loader;
use Mderrdx\Infoblocks\IBlockElementTrait;
use App\Models;

Loader::includeModule('mderrdx.infoblocks');

class News extends Models\News
{
    use IBlockElementTrait;

    public function __construct($data, $iblock = null)
    {
        $this->data = $data;
        $this->iblock = $iblock;
    }

    public function title(): string
    {
        return $this->name();
    }
}