<?php

class MainAdmin {
	public function __construct(){}
	static function main() {
		$GLOBALS['%s']->push("MainAdmin::main");
		$__hx__spos = $GLOBALS['%s']->length;
		php_Lib::println("Haxe is great!");
		$GLOBALS['%s']->pop();
	}
	function __toString() { return 'MainAdmin'; }
}
