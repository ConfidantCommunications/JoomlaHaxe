<?php

class JoomlahaxeViewJoomlahaxe extends JViewLegacy {
	public function __construct() {
		if(!php_Boot::$skip_constructor) {
		$GLOBALS['%s']->push("JoomlahaxeViewJoomlahaxe::new");
		$__hx__spos = $GLOBALS['%s']->length;
		$config = null;
		$config = Array("[\"name\":\"Joomlahaxe\"]");
		parent::__construct($config);
		defined('_JEXEC') or die("no joomla here");
		$GLOBALS['%s']->pop();
	}}
	public $msg;
	public function display($tpl = null) {
		$GLOBALS['%s']->push("JoomlahaxeViewJoomlahaxe::display");
		$__hx__spos = $GLOBALS['%s']->length;
		$this->msg = "Hello World";
		{
			$tmp = parent::display($tpl);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
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
		$GLOBALS['%s']->push("JoomlahaxeViewJoomlahaxe::main");
		$__hx__spos = $GLOBALS['%s']->length;
		new JoomlahaxeViewJoomlahaxe();
		$GLOBALS['%s']->pop();
	}
	static $__properties__ = array("get__charset = 'UTF-8'" => "get__charset = 'UTF-8'","get__escape = 'htmlspecialchars'" => "get__escape = 'htmlspecialchars'","get__output = null" => "get__output = null","get__template = null" => "get__template = null","get__path = array('template' => array(), 'helper' => array())" => "get__path = array('template' => array(), 'helper' => array())","get__layoutTemplate = '_'" => "get__layoutTemplate = '_'","get__layoutExt = 'php'" => "get__layoutExt = 'php'","get__layout = 'default'" => "get__layout = 'default'","get__defaultModel = null" => "get__defaultModel = null","get__basePath = null" => "get__basePath = null","get__models = array()" => "get__models = array()","get__name = null" => "get__name = null");
	function __toString() { return 'JoomlahaxeViewJoomlahaxe'; }
}
