<?php
namespace App\Data\Models;

use App\Models;
use App\Data\IBlockElementTrait;

class News extends Models\News
{
    use IBlockElementTrait;

    private $data;
    private $iblock;

    public function __construct($data, $iblock = null)
    {
        $this->data = $data;
        $this->iblock = $iblock;
    }
}