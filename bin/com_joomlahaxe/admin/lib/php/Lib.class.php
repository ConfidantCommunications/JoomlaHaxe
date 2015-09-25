<?php

class php_Lib {
	public function __construct(){}
	static function hprint($v) {
		$GLOBALS['%s']->push("php.Lib::print");
		$__hx__spos = $GLOBALS['%s']->length;
		echo(Std::string($v));
		$GLOBALS['%s']->pop();
	}
	static function println($v) {
		$GLOBALS['%s']->push("php.Lib::println");
		$__hx__spos = $GLOBALS['%s']->length;
		php_Lib::hprint($v);
		php_Lib::hprint("\x0A");
		$GLOBALS['%s']->pop();
	}
	function __toString() { return 'php.Lib'; }
}
