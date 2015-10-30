<?php

class JModelList {
	public function __construct($config = null) {
		if(!php_Boot::$skip_constructor) {
		$GLOBALS['%s']->push("JModelList::new");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst = new list($config);
			$GLOBALS['%s']->pop();
			$tmp;
			return;
		}
		$GLOBALS['%s']->pop();
	}}
	public $__inst;
	public function get_cache = array()() {
		$GLOBALS['%s']->push("JModelList::get_cache = array()");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$GLOBALS['%s']->pop();
			return $this->__inst->cache = array();
		}
		$GLOBALS['%s']->pop();
	}
	public function get_context = null() {
		$GLOBALS['%s']->push("JModelList::get_context = null");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$GLOBALS['%s']->pop();
			return $this->__inst->context = null;
		}
		$GLOBALS['%s']->pop();
	}
	public function get_filter_fields = array()() {
		$GLOBALS['%s']->push("JModelList::get_filter_fields = array()");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$GLOBALS['%s']->pop();
			return $this->__inst->filter_fields = array();
		}
		$GLOBALS['%s']->pop();
	}
	public function get_query = array()() {
		$GLOBALS['%s']->push("JModelList::get_query = array()");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$GLOBALS['%s']->pop();
			return $this->__inst->query = array();
		}
		$GLOBALS['%s']->pop();
	}
	public function get_filterFormName = null() {
		$GLOBALS['%s']->push("JModelList::get_filterFormName = null");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$GLOBALS['%s']->pop();
			return $this->__inst->filterFormName = null;
		}
		$GLOBALS['%s']->pop();
	}
	public function get_htmlFormName = 'adminForm'() {
		$GLOBALS['%s']->push("JModelList::get_htmlFormName = 'adminForm'");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$GLOBALS['%s']->pop();
			return $this->__inst->htmlFormName = 'adminForm';
		}
		$GLOBALS['%s']->pop();
	}
	public function _getListQuery() {
		$GLOBALS['%s']->push("JModelList::_getListQuery");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->_getListQuery();
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function getActiveFilters() {
		$GLOBALS['%s']->push("JModelList::getActiveFilters");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->getActiveFilters();
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function getItems() {
		$GLOBALS['%s']->push("JModelList::getItems");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->getItems();
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function getListQuery() {
		$GLOBALS['%s']->push("JModelList::getListQuery");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->getListQuery();
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function getPagination() {
		$GLOBALS['%s']->push("JModelList::getPagination");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->getPagination();
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function getStoreId($id = null) {
		$GLOBALS['%s']->push("JModelList::getStoreId");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->getStoreId($id);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function getTotal() {
		$GLOBALS['%s']->push("JModelList::getTotal");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->getTotal();
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function getStart() {
		$GLOBALS['%s']->push("JModelList::getStart");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->getStart();
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function getFilterForm($data = null) {
		$GLOBALS['%s']->push("JModelList::getFilterForm");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->getFilterForm($data);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function loadForm($name = null, $source = null, $options = null) {
		$GLOBALS['%s']->push("JModelList::loadForm");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->loadForm($name, $source, $options);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function loadFormData() {
		$GLOBALS['%s']->push("JModelList::loadFormData");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->loadFormData();
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function populateState($ordering = null, $direction = null) {
		$GLOBALS['%s']->push("JModelList::populateState");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->populateState($ordering, $direction);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function preprocessForm($JFormform = null, $data = null, $group = null) {
		$GLOBALS['%s']->push("JModelList::preprocessForm");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->preprocessForm($JFormform, $data, $group);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function getUserStateFromRequest($key = null, $request = null, $default = null, $type = null, $resetPage = null) {
		$GLOBALS['%s']->push("JModelList::getUserStateFromRequest");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->getUserStateFromRequest($key, $request, $default, $type, $resetPage);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function refineSearchStringToRegex($search = null, $regexDelimiter = null) {
		$GLOBALS['%s']->push("JModelList::refineSearchStringToRegex");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->refineSearchStringToRegex($search, $regexDelimiter);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function resolve($field) {
		$GLOBALS['%s']->push("JModelList::resolve");
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
	static $__properties__ = array("get_htmlFormName = 'adminForm'" => "get_htmlFormName = 'adminForm'","get_filterFormName = null" => "get_filterFormName = null","get_query = array()" => "get_query = array()","get_filter_fields = array()" => "get_filter_fields = array()","get_context = null" => "get_context = null","get_cache = array()" => "get_cache = array()");
	function __toString() { return 'JModelList'; }
}
require_once '/Applications/MAMPold/htdocs_artworks/libraries/legacy/model/list.php';
