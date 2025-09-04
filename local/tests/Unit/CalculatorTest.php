<?php


namespace Tests\Unit;

use Tests\Support\UnitTester;
use App\Models\Calculator;

class CalculatorTest extends \Codeception\Test\Unit
{

    protected UnitTester $tester;

    protected function _before()
    {
        require_once __DIR__ . '/../../php_interface/AutoLoader.php';
        new \App\AutoLoader(__DIR__ . '/../local/');
    }

    // tests
    public function testSomeFeature()
    {

    }

    public function sumTest()
    {
        $c = new Calculator();
        $this->assertEquals($c->sum(1,3), 4);
    }
}
