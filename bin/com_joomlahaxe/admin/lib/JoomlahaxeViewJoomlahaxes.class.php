<?php

class JoomlahaxeViewJoomlahaxes extends JViewLegacy {
	public function __construct($config = null) {
		if(!php_Boot::$skip_constructor) {
		parent::__construct($config);
	}}
	public $i;
	public $p;
	public function display($tpl = null) {
		try {
			$this->i = $this->get("Items", null);
			$this->p = $this->get("Pagination", null);
		}catch(Exception $__hx__e) {
			$_ex_ = ($__hx__e instanceof HException) ? $__hx__e->e : $__hx__e;
			$e = $_ex_;
			{
				php_Lib::hprint($e);
				return false;
			}
		}
		$this->items = $this->i;
		$this->pagination = $this->p;
		$this->addToolBar();
		parent::display($tpl);
		return null;
	}
	public function addToolBar() {
		JToolbarHelper::title(JText::_('COM_JOOMLAHAXE_JOOMLAHAXE_VIEW_DEFAULT_TITLE'), null);
		JToolbarHelper::deleteList("", "joomlahaxes.delete", "Delete");
		JToolbarHelper::editList("joomlahaxe.edit", "Edit");
		JToolbarHelper::addNew("joomlahaxe.add", "New", null);
	}
	public function __call($m, $a) {
		if(isset($this->$m) && is_callable($this->$m))
			return call_user_func_array($this->$m, $a);
		else if(isset($this->__dynamics[$m]) && is_callable($this->__dynamics[$m]))
			return call_user_func_array($this->__dynamics[$m], $a);
		else if('toString' == $m)
			return $this->__toString();
		else
			throw new HException('Unable to call <'.$m.'>');
	}
	static function main() {
	}
	static $__properties__ = array("get__charset = 'UTF-8'" => "get__charset = 'UTF-8'","get__escape = 'htmlspecialchars'" => "get__escape = 'htmlspecialchars'","get__output = null" => "get__output = null","get__template = null" => "get__template = null","get__path = array('template' => array(), 'helper' => array())" => "get__path = array('template' => array(), 'helper' => array())","get__layoutTemplate = '_'" => "get__layoutTemplate = '_'","get__layoutExt = 'php'" => "get__layoutExt = 'php'","get__layout = 'default'" => "get__layout = 'default'","get__defaultModel = null" => "get__defaultModel = null","get__basePath = null" => "get__basePath = null","get__models = array()" => "get__models = array()","get__name = null" => "get__name = null");
	function __toString() { return 'JoomlahaxeViewJoomlahaxes'; }
}
