<?php
namespace App\Data\Bitrix;

class IBlockElement
{
    use IBlockElementTrait;

    protected $data;
    protected $iblock;
    protected $properties;

    public function __construct($data, $iblock = null)
    {
        $this->data = $data;
        $this->iblock = $iblock;
        $this->properties = [];
    }
}
?>