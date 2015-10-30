<?php

class JoomlahaxeViewJoomlahaxe extends JViewLegacy {
	public function __construct() { if(!php_Boot::$skip_constructor) {
		$config = null;
		$config = Array("[\"name\":\"Joomlahaxe\"]");
		parent::__construct($config);
		defined('_JEXEC') or die("no joomla here");
	}}
	public function display($tpl = null) {
		$i = $this->get("Items", null);
		$p = $this->get("Pagination", null);
		$errors = $this->get("Errors", null);
		if($errors !== null) {
		}
		$this->items = $i;
		$this->pagination = $p;
		parent::display($tpl);
		return null;
	}
	static function main() {
		new JoomlahaxeViewJoomlahaxe();
	}
	static $__properties__ = array("get__charset = 'UTF-8'" => "get__charset = 'UTF-8'","get__escape = 'htmlspecialchars'" => "get__escape = 'htmlspecialchars'","get__output = null" => "get__output = null","get__template = null" => "get__template = null","get__path = array('template' => array(), 'helper' => array())" => "get__path = array('template' => array(), 'helper' => array())","get__layoutTemplate = '_'" => "get__layoutTemplate = '_'","get__layoutExt = 'php'" => "get__layoutExt = 'php'","get__layout = 'default'" => "get__layout = 'default'","get__defaultModel = null" => "get__defaultModel = null","get__basePath = null" => "get__basePath = null","get__models = array()" => "get__models = array()","get__name = null" => "get__name = null");
	function __toString() { return 'JoomlahaxeViewJoomlahaxe'; }
}
