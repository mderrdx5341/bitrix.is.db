<?php
return [
	'~^/$~' => ['controller' => \App\Controllers\MainPage::class, 'action' => 'index'],
	'~^/news/$~' => ['controller' => \App\Controllers\News::class, 'action' => 'index'],
	'~^/news/([^/]+)/$~' => ['controller' => \App\Controllers\News::class, 'action' => 'getByCode'],
	'~^/catalog/$~' => ['controller' => \App\Controllers\Catalog::class, 'action' => 'index'],
	'~^/catalog/(.*)/$~' => ['controller' => \App\Controllers\Catalog::class, 'action' => 'getByCode'],
	'~^/product/([^/]+)/$~' => ['controller' => \App\Controllers\Product::class, 'action' => 'getByCode'],

	'~^/calc-sum-a-and-b/$~' => ['controller' => \App\Controllers\Calculator::class, 'action' => 'sumAandB', 'template' => false],
	'~^/calc-sum-a-and-b-json/$~' => ['controller' => \App\Controllers\Calculator::class, 'action' => 'sumAandBJson', 'template' => false],
];
