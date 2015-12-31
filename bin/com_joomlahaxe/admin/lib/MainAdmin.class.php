<?php

class MainAdmin {
	public function __construct() {
		if(!php_Boot::$skip_constructor) {
		$GLOBALS['%s']->push("MainAdmin::new");
		$__hx__spos = $GLOBALS['%s']->length;
		defined('_JEXEC') or die('no joomla here');
		$gc = JControllerLegacy::getInstance('Joomlahaxe');
		try {
			$gc->execute(JRequest::getCmd('task'));
		}catch(Exception $__hx__e) {
			$_ex_ = ($__hx__e instanceof HException) ? $__hx__e->e : $__hx__e;
			$e = $_ex_;
			{
				$GLOBALS['%e'] = (new _hx_array(array()));
				while($GLOBALS['%s']->length >= $__hx__spos) {
					$GLOBALS['%e']->unshift($GLOBALS['%s']->pop());
				}
				$GLOBALS['%s']->push($GLOBALS['%e'][0]);
				php_Lib::hprint($e);
			}
		}
		$gc->redirect();
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
