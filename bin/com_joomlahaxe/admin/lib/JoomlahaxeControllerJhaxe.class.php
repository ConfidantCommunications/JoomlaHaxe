<?php

class JoomlahaxeControllerJhaxe extends JControllerForm {
	public function __construct($config) { if(!php_Boot::$skip_constructor) {
		$GLOBALS['%s']->push("JoomlahaxeControllerJhaxe::new");
		$__hx__spos = $GLOBALS['%s']->length;
		parent::__construct($config);
		defined('_JEXEC') or die();
		jimport("joomla.application.component.controllerform");
		$GLOBALS['%s']->pop();
	}}
	static function main() {
		$GLOBALS['%s']->push("JoomlahaxeControllerJhaxe::main");
		$__hx__spos = $GLOBALS['%s']->length;
		new JoomlahaxeControllerJhaxe(null);
		$GLOBALS['%s']->pop();
	}
	static $__properties__ = array("get_text_prefix" => "get_text_prefix","get_view_list" => "get_view_list","get_view_item" => "get_view_item","get_option" => "get_option","get_context" => "get_context");
	function __toString() { return 'JoomlahaxeControllerJhaxe'; }
}
