<?php
namespace App\Data\Bitrix;

class IBlockSection 
{
    protected $data;
    protected $iblock;

    public function __construct($data, $iblock)
    {
        $this->data = $data;
        $this->iblock = $iblock;
    }

    public function subsections()
    {
        $subSections = $this->iblock->getSections([
            'filter' => [
                'SECTION_ID' => $this->id()
            ]
        ]);

        return $subSections;
    }

    public function id()
    {
        return $this->data['ID'];
    }

    public function title()
    {
        return $this->data['NAME'];
    }

    public function url()
    {
        return $this->data['SECTION_PAGE_URL'];
    }
}
?>