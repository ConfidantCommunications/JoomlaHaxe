<?php

class JoomlahaxeModelJoomlahaxe extends JModelList {
	public function __construct() { if(!php_Boot::$skip_constructor) {
		$config = null;
		$config = Array("[\"name\":\"Joomlahaxe\"]");
		parent::__construct($config);
		defined('_JEXEC') or die("no joomla here, scallywag");
		jimport("joomla.application.component.modellist");
	}}
	public function getListQuery() {
		$db = JFactory::getDbo();
		$query = $db->getQuery(true);
		$query->select("id,name,details,enabled");
		$query->from("#__joomlahaxe");
		return $query;
	}
	public function delete($whichEntry) {
		die("deleted");
		return false;
	}
	public function getMsg($id = null) {
		if($id === null) {
			$id = 1;
		}
		if($this->resolve("messages") === null) {
			$this->messages = php_Lib::toPhpArray(new _hx_array(array()));
		}
		if(_hx_array_get($this->resolve("messages"), $id) !== null) {
			$jinput = JFactory::getApplication()->input;
			$id = $jinput->get("id", 1, "INT");
			$table = call_user_func($this->resolve("getTable"));
			$table->load($id);
			_hx_array_assign($this->resolve("messages"), $id, $table->greeting);
		}
		return _hx_array_get($this->resolve("messages"), $id);
	}
	static function main() {
		new JoomlahaxeModelJoomlahaxe();
	}
	static $__properties__ = array("get_htmlFormName = 'adminForm'" => "get_htmlFormName = 'adminForm'","get_filterFormName = null" => "get_filterFormName = null","get_query = array()" => "get_query = array()","get_filter_fields = array()" => "get_filter_fields = array()","get_context = null" => "get_context = null","get_cache = array()" => "get_cache = array()");
	function __toString() { return 'JoomlahaxeModelJoomlahaxe'; }
}
