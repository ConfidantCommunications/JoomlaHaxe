<?php

class JRequest {
	public function __construct() {
		if(!php_Boot::$skip_constructor) {
		$this->__inst = new request();
		return;
	}}
	public $__inst;
	public function getUri() {
		return $this->__inst->getUri();
	}
	public function getMethod() {
		return $this->__inst->getMethod();
	}
	public function getVar($name = null, $default = null, $hash = null, $type = null, $mask = null) {
		return $this->__inst->getVar($name, $default, $hash, $type, $mask);
	}
	public function getInt($name = null, $default = null, $hash = null) {
		return $this->__inst->getInt($name, $default, $hash);
	}
	public function getUInt($name = null, $default = null, $hash = null) {
		return $this->__inst->getUInt($name, $default, $hash);
	}
	public function getFloat($name = null, $default = null, $hash = null) {
		return $this->__inst->getFloat($name, $default, $hash);
	}
	public function getBool($name = null, $default = null, $hash = null) {
		return $this->__inst->getBool($name, $default, $hash);
	}
	public function getWord($name = null, $default = null, $hash = null) {
		return $this->__inst->getWord($name, $default, $hash);
	}
	public function getCmd($name = null, $default = null, $hash = null) {
		return $this->__inst->getCmd($name, $default, $hash);
	}
	public function getString($name = null, $default = null, $hash = null, $mask = null) {
		return $this->__inst->getString($name, $default, $hash, $mask);
	}
	public function setVar($name = null, $value = null, $hash = null, $overwrite = null) {
		return $this->__inst->setVar($name, $value, $hash, $overwrite);
	}
	public function get($hash = null, $mask = null) {
		return $this->__inst->get($hash, $mask);
	}
	public function set($array = null, $hash = null, $overwrite = null) {
		return $this->__inst->set($array, $hash, $overwrite);
	}
	public function checkToken($method = null) {
		return $this->__inst->checkToken($method);
	}
	public function _cleanVar($var = null, $mask = null, $type = null) {
		return $this->__inst->_cleanVar($var, $mask, $type);
	}
	public function resolve($field) {
		return $this->__inst->$field;
	}
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
	function __toString() { return 'JRequest'; }
}
require_once '/Applications/MAMPold/htdocs_artworks/libraries/legacy/request/request.php';
