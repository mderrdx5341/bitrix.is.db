<?php
namespace App\Data;

class IBlockElement
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
?>