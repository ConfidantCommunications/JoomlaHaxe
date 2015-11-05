<?php

class JoomlahaxeControllerJoomlahaxe extends JControllerAdmin {
	public function __construct($config) { if(!php_Boot::$skip_constructor) {
		parent::__construct($config);
		defined('_JEXEC') or die();
		jimport("joomla.application.component.controlleradmin");
	}}
	public function getModel($name = null, $prefix = null) {
		if($prefix === null) {
			$prefix = "JoomlahaxeModel";
		}
		if($name === null) {
			$name = "Joomlahaxe";
		}
		$model = parent::getModel($name, $prefix, array('ignore_request' => true));
		return $model;
	}
	static function main() {
		new JoomlahaxeControllerJoomlahaxe(null);
	}
	static $__properties__ = array("get_view_list" => "get_view_list","get_text_prefix" => "get_text_prefix","get_option" => "get_option");
	function __toString() { return 'JoomlahaxeControllerJoomlahaxe'; }
}
