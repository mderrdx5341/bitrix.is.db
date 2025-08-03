<?php
return [
	'~^/$~' => ['controller' => \App\Controllers\MainPage::class, 'action' => 'index'],
	'~^/news/$~' => ['controller' => \App\Controllers\News::class, 'action' => 'index'],
	'~^/news/([^/]+)/$~' => ['controller' => \App\Controllers\News::class, 'action' => 'getByCode'],

];
