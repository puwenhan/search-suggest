<?php

namespace Callwoola\SearchSuggest\repository;

use Callwoola\SearchSuggest\Config\Configuration;
use Callwoola\SearchSuggest\lib\Translate\Pinyin;
use Predis\Client;


class ChineseCache extends Cache{
	public function find($key);
	public function set($key,$array=[]);

}

