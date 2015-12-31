<?php

class JoomlahaxeControllerJoomlahaxe extends JControllerForm {
	public function __construct($config = null) { if(!php_Boot::$skip_constructor) {
		$GLOBALS['%s']->push("JoomlahaxeControllerJoomlahaxe::new");
		$__hx__spos = $GLOBALS['%s']->length;
		parent::__construct($config);
		$GLOBALS['%s']->pop();
	}}
	static function main() {
		$GLOBALS['%s']->push("JoomlahaxeControllerJoomlahaxe::main");
		$__hx__spos = $GLOBALS['%s']->length;
		$GLOBALS['%s']->pop();
	}
	static $__properties__ = array("get_text_prefix" => "get_text_prefix","get_view_list" => "get_view_list","get_view_item" => "get_view_item","get_option" => "get_option","get_context" => "get_context");
	function __toString() { return 'JoomlahaxeControllerJoomlahaxe'; }
}
