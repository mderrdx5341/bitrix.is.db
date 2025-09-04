<?php

declare(strict_types=1);


namespace Tests\Api;

use Tests\Support\ApiTester;

final class CalculatorCest
{
    public function _before(ApiTester $I): void
    {
        // Code here will be executed before each test.
    }

    public function tryToTest(ApiTester $I): void
    {
        // Write your tests here. All `public` methods will be executed as tests.
    }

    public function calcJsonPageWorks(ApiTester $I)
	{
	    $I->sendGet('calc-sum-a-and-b-json/?a=1&b=3');
		$I->seeResponseIsJson();
		$I->seeResponseMatchesJsonType([
            'sum' => 'integer',
            /*'name' => 'string',
            'email' => 'string:email', // Specific format validation
            'homepage' => 'string:url|null', // Can be URL or null
            'created_at' => 'string:date',
            'is_active' => 'boolean'*/
        ]);
		$I->seeResponseContainsJson(['sum' => 4]);
	}
}
