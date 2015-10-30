<?php

class JModelLegacy {
	public function __construct($config = null) { if(!php_Boot::$skip_constructor) {
		$GLOBALS['%s']->push("JModelLegacy::new");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst = new legacy($config);
			$GLOBALS['%s']->pop();
			$tmp;
			return;
		}
		$GLOBALS['%s']->pop();
	}}
	public $__dynamics = array();
	public function __get($n) {
		if(isset($this->__dynamics[$n]))
			return $this->__dynamics[$n];
	}
	public function __set($n, $v) {
		$this->__dynamics[$n] = $v;
	}
	public function __call($n, $a) {
		if(isset($this->__dynamics[$n]) && is_callable($this->__dynamics[$n]))
			return call_user_func_array($this->__dynamics[$n], $a);
		if('toString' == $n)
			return $this->__toString();
		throw new HException("Unable to call <".$n.">");
	}
	function __toString() { return 'JModelLegacy'; }
}
require_once '/Applications/MAMPold/htdocs_artworks/libraries/legacy/model/legacy.php';
