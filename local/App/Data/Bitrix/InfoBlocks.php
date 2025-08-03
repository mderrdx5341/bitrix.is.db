<?php

namespace App\Data\Bitrix;

use \Bitrix\Main\Loader;
use CIBlock;

Loader::includeModule('iblock');

class InfoBlocks
{
    public function getList()
    {
        $res = CIBlock::GetList([],[]);
        $iblocks = [];

        while($iblockData = $res->fetch())
        {
            // $iblocks[$iblockData['CODE']] = $iblockData['ID'];
            // echo '<pre>';
            // var_dump($iblocks);
            // echo '</pre>';
        }
    }

    public static function getByCode($code, $className = '')
    {
        $res = CIBlock::GetList([],['CODE' => $code]);
        $iblocks = [];

        while($iblockData = $res->fetch())
        {
            return new IBlock($iblockData);
        }
    }
}