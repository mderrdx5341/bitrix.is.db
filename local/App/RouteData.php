<?php
namespace App;

class RouteData
{
    private string $controller;
    private string $action;
    private array $args;
    private bool $withOutTemplate = false;

    public function __construct(){
        $this->controller = '';
        $this->action = '';
        $this->args = [];
    }

    public function setController($controller)
    {
        return $this->controller = $controller;
    }

    public function controller()
    {
        return $this->controller;
    }

    public function setAction($action)
    {
        return $this->action = $action;
    }

    public function action()
    {
        return $this->action;
    }

    public function setArgs($args)
    {
        return $this->args = $args;
    }

    public function args()
    {
        return $this->args;
    }

    public function setWithOutTemplate($flag)
    {
        $this->withOutTemplate = $flag;
    }

    public function withOutTemplate() : bool
    {
        return $this->withOutTemplate;
    }
}