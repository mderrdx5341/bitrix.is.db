<?php
namespace App\Models;

abstract class News
{
    public abstract function title(): string;
    public abstract function date():string ;
    public function titleWithDate()
    {
        return $this->title() . ': ' . $this->date();
    }
}
?>