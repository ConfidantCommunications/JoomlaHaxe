<?php

class JoomlahaxeModelJoomlahaxe extends JModelList {
	public function __construct() { if(!php_Boot::$skip_constructor) {
		$GLOBALS['%s']->push("JoomlahaxeModelJoomlahaxe::new");
		$__hx__spos = $GLOBALS['%s']->length;
		$config = null;
		$config = Array("[\"name\":\"Joomlahaxe\"]");
		parent::__construct($config);
		defined('_JEXEC') or die("no joomla here, scallywag");
		$GLOBALS['%s']->pop();
	}}
	public function getListQuery() {
		$GLOBALS['%s']->push("JoomlahaxeModelJoomlahaxe::getListQuery");
		$__hx__spos = $GLOBALS['%s']->length;
		$db = JFactory::getDbo();
		$query = $db->getQuery(true);
		$query->select("id", "name", "details", "enabled");
		$query->from("#__joomlahaxe");
		{
			$tmp = _hx_string_call($query, "toString", array());
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function main() {
		$GLOBALS['%s']->push("JoomlahaxeModelJoomlahaxe::main");
		$__hx__spos = $GLOBALS['%s']->length;
		new JoomlahaxeModelJoomlahaxe();
		$GLOBALS['%s']->pop();
	}
	static $__properties__ = array("get_htmlFormName = 'adminForm'" => "get_htmlFormName = 'adminForm'","get_filterFormName = null" => "get_filterFormName = null","get_query = array()" => "get_query = array()","get_filter_fields = array()" => "get_filter_fields = array()","get_context = null" => "get_context = null","get_cache = array()" => "get_cache = array()");
	function __toString() { return 'JoomlahaxeModelJoomlahaxe'; }
}
