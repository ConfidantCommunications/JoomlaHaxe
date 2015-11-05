<?php

class php_Lib {
	public function __construct(){}
	static function associativeArrayOfHash($hash) {
		return $hash->h;
	}
	function __toString() { return 'php.Lib'; }
}
