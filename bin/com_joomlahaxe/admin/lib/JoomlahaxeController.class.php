<?php

class JoomlahaxeController extends JControllerLegacy {
	public function __construct($config) { if(!php_Boot::$skip_constructor) {
		$GLOBALS['%s']->push("JoomlahaxeController::new");
		$__hx__spos = $GLOBALS['%s']->length;
		$config1 = null;
		$config1 = Array("[\"name\":\"Joomlahaxe\"]");
		parent::__construct($config1);
		defined('_JEXEC') or die();
		$GLOBALS['%s']->pop();
	}}
	public function display($cachable = null, $urlparams = null) {
		$GLOBALS['%s']->push("JoomlahaxeController::display");
		$__hx__spos = $GLOBALS['%s']->length;
		JRequest::setVar('view', JRequest::getCmd('view', 'Joomlahaxe'));;
		parent::display($cachable,null);
		{
			$GLOBALS['%s']->pop();
			return null;
		}
		$GLOBALS['%s']->pop();
	}
	static function main() {
		$GLOBALS['%s']->push("JoomlahaxeController::main");
		$__hx__spos = $GLOBALS['%s']->length;
		new JoomlahaxeController(null);
		$GLOBALS['%s']->pop();
	}
	static $__properties__ = array("get_input" => "get_input","get_taskMap" => "get_taskMap","get_task" => "get_task","get_redirecturl" => "get_redirecturl","get_paths" => "get_paths","get_model_prefix" => "get_model_prefix","get_name" => "get_name","get_methods" => "get_methods","get_messageType" => "get_messageType","get_message" => "get_message","get_doTask" => "get_doTask","get_default_view" => "get_default_view","get_basePath" => "get_basePath");
	function __toString() { return 'JoomlahaxeController'; }
}
