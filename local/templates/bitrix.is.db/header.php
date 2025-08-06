<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<?php
use Bitrix\Main\Page\Asset;
//Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/app.css");
//Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/app.js");
?>
<!DOCTYPE html>
<html>
	<head>

		<?$APPLICATION->ShowHead();?>
		<title><?$APPLICATION->ShowTitle();?></title>
        <link href="<?= SITE_TEMPLATE_PATH ?>/app.css" rel="stylesheet" media="all">
		<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" /> 	
	</head>
	<body>
		<div id="panel">
			<?$APPLICATION->ShowPanel();?>
		</div>
        <div>
            <header class="header-main">
                <nav class="menu">
                    <ul>
                        <li>
                            <a href="/news/">Новости</a>
                        </li>
                        <li>
                            <a href="/catalog/">Каталог</a>
                        </li>
                    </ul>
                </nav>
            </header>
            <main>
        
