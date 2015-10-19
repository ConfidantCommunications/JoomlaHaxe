<?php

class php_Lib {
	public function __construct(){}
	static function hprint($v) {
		echo(Std::string($v));
	}
	function __toString() { return 'php.Lib'; }
}
