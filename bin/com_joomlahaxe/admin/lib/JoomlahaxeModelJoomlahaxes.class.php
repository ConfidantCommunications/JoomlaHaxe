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
	public function delete($whichEntries) {
		$iii = new _hx_array($whichEntries);
		{
			$_g = 0;
			while($_g < $iii->length) {
				$thisEntry = $iii[$_g];
				++$_g;
				$db = JFactory::getDbo();
				$a = $db->quoteName("#__joomlahaxe");
				$query = $db->getQuery(true);
				$query->from($a);
				$query->delete();
				$query->where("id = " . Std::string($thisEntry));
				$db->setQuery($query);
				try {
					$db->execute();
				}catch(Exception $__hx__e) {
					$_ex_ = ($__hx__e instanceof HException) ? $__hx__e->e : $__hx__e;
					$e = $_ex_;
					{
						php_Lib::hprint($e);
						die();
						return false;
					}
				}
				unset($thisEntry,$query,$e,$db,$a);
			}
		}
		return true;
	}
	static function main() {
	}
	static $__properties__ = array("get_htmlFormName = 'adminForm'" => "get_htmlFormName = 'adminForm'","get_filterFormName = null" => "get_filterFormName = null","get_query = array()" => "get_query = array()","get_filter_fields = array()" => "get_filter_fields = array()","get_context = null" => "get_context = null","get_cache = array()" => "get_cache = array()");
	function __toString() { return 'JoomlahaxeModelJoomlahaxes'; }
}
