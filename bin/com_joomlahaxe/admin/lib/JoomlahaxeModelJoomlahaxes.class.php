<?php

class JoomlahaxeModelJoomlahaxes extends JModelList {
	public function __construct($config = null) { if(!php_Boot::$skip_constructor) {
		parent::__construct($config);
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
	static function main() {
	}
	static $__properties__ = array("get_htmlFormName = 'adminForm'" => "get_htmlFormName = 'adminForm'","get_filterFormName = null" => "get_filterFormName = null","get_query = array()" => "get_query = array()","get_filter_fields = array()" => "get_filter_fields = array()","get_context = null" => "get_context = null","get_cache = array()" => "get_cache = array()");
	function __toString() { return 'JoomlahaxeModelJoomlahaxes'; }
}
