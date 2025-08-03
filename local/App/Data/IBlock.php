<?php
namespace App\Data;

use \Bitrix\Main\Loader;
use CIBlockElement;

Loader::includeModule('iblock');

class IBlock
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    private function classesForElements()
    {
        $nameModel = ucfirst(strtolower($this->code()));
        return [
            '\\Models\\'. $nameModel,
            '\\IBlockElement'
        ];
    }

    public function id()
    {
        return $this->data['ID'];
    }

    public function code()
    {
        return $this->data['CODE'];
    }

    protected function getClass()
    {
        foreach ($this->classesForElements() as $class) {

            if(is_file(__DIR__ . $class . '.php')) {
                return '\\App\\Data' . $class;
            }
        }
    }

    public function getElements($args)
    {
        $class = $this->getClass();
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

    public function getElementByCode($code)
    {
        $class = $this->getClass();
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