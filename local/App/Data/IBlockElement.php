<?php
namespace App\Data;

class IBlockElement
{
    use IBlockElementTrait;

    protected $data;
    protected $iblock;

    public function __construct($data, $iblock = null)
    {
        $this->data = $data;
        $this->iblock = $iblock;
    }
}
?>