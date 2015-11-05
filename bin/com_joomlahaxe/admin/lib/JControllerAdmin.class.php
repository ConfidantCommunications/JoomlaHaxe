<?php

class JControllerAdmin {
	public function __construct($config = null) {
		if(!php_Boot::$skip_constructor) {
		$this->__inst = new admin($config);
		return;
	}}
	public $__inst;
	public function get_option() {
		return $this->__inst->option;
	}
	public function get_text_prefix() {
		return $this->__inst->text_prefix;
	}
	public function get_view_list() {
		return $this->__inst->view_list;
	}
	public function ality,suchasrenderingviews($akadisplayingtemplates = null) {
		return $this->__inst->ality,suchasrenderingviews($akadisplayingtemplates);
	}
	public function delete() {
		return $this->__inst->delete();
	}
	public function postDeleteHook($JModelLegacymodel = null, $id = null) {
		return $this->__inst->postDeleteHook($JModelLegacymodel, $id);
	}
	public function display($cachable = null, $urlparams = null) {
		return $this->__inst->display($cachable, $urlparams);
	}
	public function publish() {
		return $this->__inst->publish();
	}
	public function reorder() {
		return $this->__inst->reorder();
	}
	public function saveorder() {
		return $this->__inst->saveorder();
	}
	public function checkin() {
		return $this->__inst->checkin();
	}
	public function saveOrderAjax() {
		return $this->__inst->saveOrderAjax();
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
	static $__properties__ = array("get_view_list" => "get_view_list","get_text_prefix" => "get_text_prefix","get_option" => "get_option");
	function __toString() { return 'JControllerAdmin'; }
}
require_once '/Applications/MAMPold/htdocs_artworks/libraries/legacy/controller/admin.php';
