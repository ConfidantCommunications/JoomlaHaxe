<?php

class JModelLegacy {
	public function __construct($config = null) {
		if(!php_Boot::$skip_constructor) {
		$this->__inst = new legacy($config);
		return;
	}}
	public $__inst;
	public function get___state_set = null() {
		return $this->__inst->__state_set = null;
	}
	public function get__db() {
		return $this->__inst->_db;
	}
	public function get_name() {
		return $this->__inst->name;
	}
	public function get_option = null() {
		return $this->__inst->option = null;
	}
	public function get_state() {
		return $this->__inst->state;
	}
	public function get_event_clean_cache = null() {
		return $this->__inst->event_clean_cache = null;
	}
	public function s.
*
*@since12.2
*/
abstractclassJModelLegacyextendsJObject
{
	/**
	*Indicatesiftheinternalstatehasbeenset
	*
	*@varboolean
	*@since12.2
	*/
	protected$__state_set=null;

	/**
	*DatabaseConnector
	*
	*@varJDatabaseDriver
	*@since12.2
	*/
	protected$_db;

	/**
	*Themodel($base = null) {
		return $this->__inst->s.
*
*@since12.2
*/
abstractclassJModelLegacyextendsJObject
{
	/**
	*Indicatesiftheinternalstatehasbeenset
	*
	*@varboolean
	*@since12.2
	*/
	protected$__state_set=null;

	/**
	*DatabaseConnector
	*
	*@varJDatabaseDriver
	*@since12.2
	*/
	protected$_db;

	/**
	*Themodel($base);
	}
	public function addIncludePath($path = null, $prefix = null) {
		return $this->__inst->addIncludePath($path, $prefix);
	}
	public function addTablePath($path = null) {
		return $this->__inst->addTablePath($path);
	}
	public function _createFileName($type = null, $parts = null) {
		return $this->__inst->_createFileName($type, $parts);
	}
	public function getInstance($type = null, $prefix = null, $config = null) {
		return $this->__inst->getInstance($type, $prefix, $config);
	}
	public function _getList($query = null, $limitstart = null, $limit = null) {
		return $this->__inst->_getList($query, $limitstart, $limit);
	}
	public function _getListCount($query = null) {
		return $this->__inst->_getListCount($query);
	}
	public function _createTable($name = null, $prefix = null, $config = null) {
		return $this->__inst->_createTable($name, $prefix, $config);
	}
	public function getDbo() {
		return $this->__inst->getDbo();
	}
	public function getName() {
		return $this->__inst->getName();
	}
	public function getState($property = null, $default = null) {
		return $this->__inst->getState($property, $default);
	}
	public function getTable($name = null, $prefix = null, $options = null) {
		return $this->__inst->getTable($name, $prefix, $options);
	}
	public function loadHistory($version_id = null, $JTable&table = null) {
		return $this->__inst->loadHistory($version_id, $JTable&table);
	}
	public function populateState() {
		return $this->__inst->populateState();
	}
	public function setDbo($db = null) {
		return $this->__inst->setDbo($db);
	}
	public function setState($property = null, $value = null) {
		return $this->__inst->setState($property, $value);
	}
	public function cleanCache($group = null, $client_id = null) {
		return $this->__inst->cleanCache($group, $client_id);
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
	static $__properties__ = array("get_event_clean_cache = null" => "get_event_clean_cache = null","get_state" => "get_state","get_option = null" => "get_option = null","get_name" => "get_name","get__db" => "get__db","get___state_set = null" => "get___state_set = null");
	function __toString() { return 'JModelLegacy'; }
}
require_once '/Applications/MAMPold/htdocs_artworks/libraries/legacy/model/legacy.php';
