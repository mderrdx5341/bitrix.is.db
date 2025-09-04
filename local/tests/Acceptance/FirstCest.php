<?php

declare(strict_types=1);


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

final class FirstCest
{
    public function _before(AcceptanceTester $I): void
    {
        // Code here will be executed before each test.
    }

    public function tryToTest(AcceptanceTester $I): void
    {
        // Write your tests here. All `public` methods will be executed as tests.
    }
	
	public function mainPageWorks(AcceptanceTester $I)
	{
		$I->amOnPage('/');
		$I->see('Новости', "//a[@href='/news/']");
		$I->see('Каталог', "//a[@href='/catalog/']");
		$I->see('main page');
	}
	
	public function catalogPageWorks(AcceptanceTester $I)
	{
		$I->amOnPage('/catalog/');
		$I->see('Большие книги');
		$I->see('Маленькие книги');
	}
}
