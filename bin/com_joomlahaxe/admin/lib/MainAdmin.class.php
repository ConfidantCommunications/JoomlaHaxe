<?php

class MainAdmin {
	public function __construct() {
		if(!php_Boot::$skip_constructor) {
		$GLOBALS['%s']->push("MainAdmin::new");
		$__hx__spos = $GLOBALS['%s']->length;
		defined('_JEXEC') or die("no joomla here");
		$auth = !JFactory::getUser()->authorise("core.manage", "com_contact");
		if($auth) {
		}
		require_once("JoomlahaxeController.class.php");
		$config = null;
		$config = Array("[\"name\":\"Joomlahaxe\"]");
		$gc = JControllerLegacy::getInstance('Joomlahaxe');
		$gc->execute(JRequest::getCmd('task'));
		$GLOBALS['%s']->pop();
	}}
	public $ld1;
	public $ld2;
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
	static function __meta__() { $args = func_get_args(); return call_user_func_array(self::$__meta__, $args); }
	static $__meta__;
	static function main() {
		$GLOBALS['%s']->push("MainAdmin::main");
		$__hx__spos = $GLOBALS['%s']->length;
		new MainAdmin();
		$GLOBALS['%s']->pop();
	}
	function __toString() { return 'MainAdmin'; }
}
MainAdmin::$__meta__ = _hx_anonymous(array("fields" => _hx_anonymous(array("ld1" => _hx_anonymous(array("libdirLive" => (new _hx_array(array("/Applications/MAMPold/htdocs_artworks/libraries/"))))), "ld2" => _hx_anonymous(array("libdirLocal" => (new _hx_array(array("/Users/allan/Documents/haXe/JoomlaHaxeTest/src/libraries/")))))))));
