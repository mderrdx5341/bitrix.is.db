<?php
namespace App\Data\Bitrix;

class PropertyList extends Property
{
    public function value()
    {

        return $this->data['VALUE_ENUM'];
    }
}