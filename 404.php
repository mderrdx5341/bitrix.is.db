<?
CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");


$this->app()->IncludeComponent("bitrix:main.map", ".default", Array(
	"LEVEL"	=>	"3",
	"COL_NUM"	=>	"2",
	"SHOW_DESCRIPTION"	=>	"Y",
	"SET_TITLE"	=>	"N",
	"CACHE_TIME"	=>	"36000000"
	)
);
