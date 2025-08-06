<?php
namespace App\Controllers;

abstract class AbstractController
{
    public function restartWorkArea()
    {
        $this->app()->restartWorkarea();
    }

    public function jsonResponse($data)
	{
		header('Content-Type: application/json; charset=utf-8');
		return json_encode($data);
	}

    public function app()
    {
        global $APPLICATION;
        return $APPLICATION;
    }
}