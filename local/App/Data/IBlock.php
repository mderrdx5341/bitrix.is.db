<?php
namespace App\Data;

use \Bitrix\Main\Loader;
use CIBlockElement;
use CIBlockSection;

Loader::includeModule('iblock');

class IBlock
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function id()
    {
        return $this->data['ID'];
    }

    public function code()
    {
        return $this->data['CODE'];
    }

    public function getSections($args, $className = '')
    {
        $res = CIBlockSection::getList(
            [],
            array_merge(['IBLOCK_ID' => $this->id()], $args['filter']),
            false,
            []
        );
        $sections = [];
        while($section = $res->getNext()) {
            $sections[] = new IBlockSection($section, $this);
        }

        return $sections;
    }

    public function getSectionByCode($code, $className = '')
    {
        $res = CIBlockSection::getList(
            [],
            ['IBLOCK_ID' => $this->id(), 'CODE' => $code],
            false,
            []
        );
        $section = null;
        while($sectionData = $res->getNext()) {
            $section = new IBlockSection($sectionData, $this);
        }

        return $section;
    }

    public function getElements($args, $className ='')
    {
        $class = $className ? $className : '\App\Data\IBlockElement';
        $res = CIBlockElement::getList(
            [],
            array_merge(['IBLOCK_ID' => $this->id()], $args['filter']),
            false,
            false,
            []
        );

        $items = [];
        while ($item = $res->getNext())
        {
            $items[] = new $class($item, $this);
        }

        return $items;
    }

    public function getElementByCode($code, $className = '')
    {
        $class = $className ? $className : '\App\Data\IBlockElement';
        $res = CIBlockElement::getList(
            [],
            ['IBLOCK_ID' => $this->id(), 'CODE' => $code],
            false,
            false,
            []
        );

        $news = null;
        while ($item = $res->getNext())
        {

            $news = new $class($item, $this);
        }

        return $news;
    }
}