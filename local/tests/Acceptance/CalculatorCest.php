<?php

declare(strict_types=1);


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

final class CalculatorCest
{
    public function _before(AcceptanceTester $I): void
    {
        // Code here will be executed before each test.
    }

    public function tryToTest(AcceptanceTester $I): void
    {
        // Write your tests here. All `public` methods will be executed as tests.
    }
	
	public function calcPageWorks(AcceptanceTester $I)
	{
		$I->amOnPage('calc-sum-a-and-b/?a=1&b=3');
		$I->see('4');
	}
}
