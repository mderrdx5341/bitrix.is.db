<?php
namespace App\Controllers;

class Calculator extends AbstractController
{
    public function sumAandB()
    {
        $request = \Bitrix\Main\Application::getInstance()->getContext()->getRequest();
        return print_r($this->sum(
            $request->get('a'),
            $request->get('b')
        ),true);
    }

    public function sumAandBJson()
    {
        $request = \Bitrix\Main\Application::getInstance()->getContext()->getRequest();
        return $this->jsonResponse($this->sum(
            $request->get('a'),
            $request->get('b')
        ));
    }

    private function sum($a, $b): array
    {
        return ['sum' => $a + $b];
    }
}