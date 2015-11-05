<?php

class JModelList {
	public function __construct($config = null) {
		if(!php_Boot::$skip_constructor) {
		$this->__inst = new list($config);
		return;
	}}
	public $__inst;
	public function get_cache = array()() {
		return $this->__inst->cache = array();
	}
	public function get_context = null() {
		return $this->__inst->context = null;
	}
	public function get_filter_fields = array()() {
		return $this->__inst->filter_fields = array();
	}
	public function get_query = array()() {
		return $this->__inst->query = array();
	}
	public function get_filterFormName = null() {
		return $this->__inst->filterFormName = null;
	}
	public function get_htmlFormName = 'adminForm'() {
		return $this->__inst->htmlFormName = 'adminForm';
	}
	public function _getListQuery() {
		return $this->__inst->_getListQuery();
	}
	public function getActiveFilters() {
		return $this->__inst->getActiveFilters();
	}
	public function getItems() {
		return $this->__inst->getItems();
	}
	public function getListQuery() {
		return $this->__inst->getListQuery();
	}
	public function getPagination() {
		return $this->__inst->getPagination();
	}
	public function getStoreId($id = null) {
		return $this->__inst->getStoreId($id);
	}
	public function getTotal() {
		return $this->__inst->getTotal();
	}
	public function getStart() {
		return $this->__inst->getStart();
	}
	public function getFilterForm($data = null) {
		return $this->__inst->getFilterForm($data);
	}
	public function loadForm($name = null, $source = null, $options = null) {
		return $this->__inst->loadForm($name, $source, $options);
	}
	public function loadFormData() {
		return $this->__inst->loadFormData();
	}
	public function populateState($ordering = null, $direction = null) {
		return $this->__inst->populateState($ordering, $direction);
	}
	public function preprocessForm($JFormform = null, $data = null, $group = null) {
		return $this->__inst->preprocessForm($JFormform, $data, $group);
	}
	public function getUserStateFromRequest($key = null, $request = null, $default = null, $type = null, $resetPage = null) {
		return $this->__inst->getUserStateFromRequest($key, $request, $default, $type, $resetPage);
	}
	public function refineSearchStringToRegex($search = null, $regexDelimiter = null) {
		return $this->__inst->refineSearchStringToRegex($search, $regexDelimiter);
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
	static $__properties__ = array("get_htmlFormName = 'adminForm'" => "get_htmlFormName = 'adminForm'","get_filterFormName = null" => "get_filterFormName = null","get_query = array()" => "get_query = array()","get_filter_fields = array()" => "get_filter_fields = array()","get_context = null" => "get_context = null","get_cache = array()" => "get_cache = array()");
	function __toString() { return 'JModelList'; }
}
require_once '/Applications/MAMPold/htdocs_artworks/libraries/legacy/model/list.php';
