<?php

class JControllerForm {
	public function __construct($config = null) {
		if(!php_Boot::$skip_constructor) {
		$GLOBALS['%s']->push("JControllerForm::new");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst = new form($config);
			$GLOBALS['%s']->pop();
			$tmp;
			return;
		}
		$GLOBALS['%s']->pop();
	}}
	public $__inst;
	public function get_context() {
		$GLOBALS['%s']->push("JControllerForm::get_context");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$GLOBALS['%s']->pop();
			return $this->__inst->context;
		}
		$GLOBALS['%s']->pop();
	}
	public function get_option() {
		$GLOBALS['%s']->push("JControllerForm::get_option");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$GLOBALS['%s']->pop();
			return $this->__inst->option;
		}
		$GLOBALS['%s']->pop();
	}
	public function get_view_item() {
		$GLOBALS['%s']->push("JControllerForm::get_view_item");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$GLOBALS['%s']->pop();
			return $this->__inst->view_item;
		}
		$GLOBALS['%s']->pop();
	}
	public function get_view_list() {
		$GLOBALS['%s']->push("JControllerForm::get_view_list");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$GLOBALS['%s']->pop();
			return $this->__inst->view_list;
		}
		$GLOBALS['%s']->pop();
	}
	public function get_text_prefix() {
		$GLOBALS['%s']->push("JControllerForm::get_text_prefix");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$GLOBALS['%s']->pop();
			return $this->__inst->text_prefix;
		}
		$GLOBALS['%s']->pop();
	}
	public function add() {
		$GLOBALS['%s']->push("JControllerForm::add");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->add();
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function allowAdd($data = null) {
		$GLOBALS['%s']->push("JControllerForm::allowAdd");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->allowAdd($data);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function allowEdit($data = null) {
		$GLOBALS['%s']->push("JControllerForm::allowEdit");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->allowEdit($data);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function allowSave($data = null, $key = null) {
		$GLOBALS['%s']->push("JControllerForm::allowSave");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->allowSave($data, $key);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function batch($model = null) {
		$GLOBALS['%s']->push("JControllerForm::batch");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->batch($model);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function cancel($key = null) {
		$GLOBALS['%s']->push("JControllerForm::cancel");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->cancel($key);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function edit($key = null, $urlVar = null) {
		$GLOBALS['%s']->push("JControllerForm::edit");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->edit($key, $urlVar);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function getModel($name = null, $prefix = null, $config = null) {
		$GLOBALS['%s']->push("JControllerForm::getModel");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->getModel($name, $prefix, $config);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function getRedirectToItemAppend($recordId = null, $urlVar = null) {
		$GLOBALS['%s']->push("JControllerForm::getRedirectToItemAppend");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->getRedirectToItemAppend($recordId, $urlVar);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function getRedirectToListAppend() {
		$GLOBALS['%s']->push("JControllerForm::getRedirectToListAppend");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->getRedirectToListAppend();
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function postSaveHook($JModelLegacymodel = null, $validData = null) {
		$GLOBALS['%s']->push("JControllerForm::postSaveHook");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->postSaveHook($JModelLegacymodel, $validData);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function loadhistory() {
		$GLOBALS['%s']->push("JControllerForm::loadhistory");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->loadhistory();
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function save($key = null, $urlVar = null) {
		$GLOBALS['%s']->push("JControllerForm::save");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->save($key, $urlVar);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function resolve($field) {
		$GLOBALS['%s']->push("JControllerForm::resolve");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->$field;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
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
	static $__properties__ = array("get_text_prefix" => "get_text_prefix","get_view_list" => "get_view_list","get_view_item" => "get_view_item","get_option" => "get_option","get_context" => "get_context");
	function __toString() { return 'JControllerForm'; }
}
require_once '/Applications/MAMPold/htdocs_artworks/libraries/legacy/controller/form.php';
