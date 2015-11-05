<?php

class JoomlahaxeViewJhaxe extends JViewLegacy {
	public function __construct() { if(!php_Boot::$skip_constructor) {
		$config = null;
		$config = Array("[\"name\":\"Jhaxe\"]");
		parent::__construct($config);
		defined('_JEXEC') or die("no joomla here");
		jimport("joomla.application.component.view");
	}}
	public function display($tpl = null) {
		$i = $this->get("Item", null);
		$f = $this->get("Form", null);
		$errors = $this->get("Errors", null);
		if($errors !== null) {
		}
		$this->item = $i;
		$this->form = $f;
		$this->addToolBar();
		parent::display($tpl);
		return null;
	}
	public function addToolBar() {
		$input = JFactory::getApplication()->input;;
		$input->set("hidemainmenu", true);
		$isNew = _hx_equal($this->resolve("item")->id, 0);
		JToolbarHelper::title((($isNew) ? "New item" : "Edit item"), null);
		JToolbarHelper::save("jhaxe.save", null);
		JToolbarHelper::cancel("jhaxe.cancel", (($isNew) ? "Cancel" : "Close"));
	}
	static function main() {
		new JoomlahaxeViewJhaxe();
	}
	static $__properties__ = array("get__charset = 'UTF-8'" => "get__charset = 'UTF-8'","get__escape = 'htmlspecialchars'" => "get__escape = 'htmlspecialchars'","get__output = null" => "get__output = null","get__template = null" => "get__template = null","get__path = array('template' => array(), 'helper' => array())" => "get__path = array('template' => array(), 'helper' => array())","get__layoutTemplate = '_'" => "get__layoutTemplate = '_'","get__layoutExt = 'php'" => "get__layoutExt = 'php'","get__layout = 'default'" => "get__layout = 'default'","get__defaultModel = null" => "get__defaultModel = null","get__basePath = null" => "get__basePath = null","get__models = array()" => "get__models = array()","get__name = null" => "get__name = null");
	function __toString() { return 'JoomlahaxeViewJhaxe'; }
}
