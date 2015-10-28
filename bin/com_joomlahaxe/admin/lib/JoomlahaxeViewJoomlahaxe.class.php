<?php

class JoomlahaxeViewJoomlahaxe extends JViewLegacy {
	public function __construct() { if(!php_Boot::$skip_constructor) {
		$GLOBALS['%s']->push("JoomlahaxeViewJoomlahaxe::new");
		$__hx__spos = $GLOBALS['%s']->length;
		$config = null;
		$config = Array("[\"name\":\"Joomlahaxe\"]");
		parent::__construct($config);
		defined('_JEXEC') or die("no joomla here");
		$GLOBALS['%s']->pop();
	}}
	static function main() {
		$GLOBALS['%s']->push("JoomlahaxeViewJoomlahaxe::main");
		$__hx__spos = $GLOBALS['%s']->length;
		new JoomlahaxeViewJoomlahaxe();
		$GLOBALS['%s']->pop();
	}
	function __toString() { return 'JoomlahaxeViewJoomlahaxe'; }
}
