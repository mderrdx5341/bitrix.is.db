<?php
namespace App\Controllers;

use \App\Models;

class Calculator extends AbstractController
{
    public function sumAandB()
    {
        $request = \Bitrix\Main\Application::getInstance()->getContext()->getRequest();
        return print_r((new Models\Calculator())->sum(
            $request->get('a'),
            $request->get('b')
        ),true);
    }

    public function sumAandBJson()
    {
        $request = \Bitrix\Main\Application::getInstance()->getContext()->getRequest();
        return $this->jsonResponse([
            'sum' => (new Models\Calculator())->sum(
                $request->get('a'),
                $request->get('b')
            ),
        ]);
    }
}