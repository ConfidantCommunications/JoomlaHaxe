<?php

class JDatabaseQueryMysqli {
	public function __construct() {
		if(!php_Boot::$skip_constructor) {
		$this->__inst = new mysqli();
		return;
	}}
	public $__inst;
	public function get_offset() {
		return $this->__inst->offset;
	}
	public function get_limit() {
		return $this->__inst->limit;
	}
	public function processLimit($query = null, $limit = null, $offset = null) {
		return $this->__inst->processLimit($query, $limit, $offset);
	}
	public function concatenate($values = null, $separator = null) {
		return $this->__inst->concatenate($values, $separator);
	}
	public function setLimit($limit = null, $offset = null) {
		return $this->__inst->setLimit($limit, $offset);
	}
	public function regexp($value = null) {
		return $this->__inst->regexp($value);
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
	static $__properties__ = array("get_limit" => "get_limit","get_offset" => "get_offset");
	function __toString() { return 'JDatabaseQueryMysqli'; }
}
require_once '/Applications/MAMPold/htdocs_artworks/libraries/joomla/database/query/mysqli.php';
