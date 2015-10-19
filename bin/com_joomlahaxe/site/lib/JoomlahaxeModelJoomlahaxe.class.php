<?php

class JoomlahaxeModelJoomlahaxe extends JModelLegacy {
	public function __construct() {
		if(!php_Boot::$skip_constructor) {
		$config = null;
		$config = Array("[\"name\":\"Joomlahaxe\"]");
		parent::__construct($config);
		defined('_JEXEC') or die("no joomla here");
	}}
	public $msg;
	public $results;
	public function getMsg() {
		if($this->msg === null) {
			$this->msg = "Results:<br />";
			$db = JFactory::getDbo();
			$query = $db->getQuery(true);
			$a = $db->quoteName((new _hx_array(array("id", "name", "details", "enabled"))));
			$query->select($a);
			$query->from($db->quoteName('#__joomlahaxe'));;
			$db->setQuery($query);
			{
				$a1 = $db->loadObjectList();
				$this->results = new _hx_array($a1);
			}
			{
				$_g = 0;
				$_g1 = $this->results;
				while($_g < $_g1->length) {
					$i = $_g1[$_g];
					++$_g;
					$this->msg .= Std::string($i->id) . "<br />";
					$this->msg .= Std::string($i->name) . "<br />";
					$this->msg .= Std::string($i->details) . "<br />";
					$this->msg .= Std::string($i->enabled) . "<br />" . "<br />";
					unset($i);
				}
			}
		}
		return $this->msg;
	}
	public function __call($m, $a) {
		if(isset($this->$m) && is_callable($this->$m))
			return call_user_func_array($this->$m, $a);
		else if(isset($this->__dynamics[$m]) && is_callable($this->__dynamics[$m]))
			return call_user_func_array($this->__dynamics[$m], $a);
		else if('toString' == $m)
			return $this->__toString();
		else
			throw new HException('Unable to call <'.$m.'>');
	}
	static function main() {
		new JoomlahaxeModelJoomlahaxe();
	}
	static $__properties__ = array("get_event_clean_cache = null" => "get_event_clean_cache = null","get_state" => "get_state","get_option = null" => "get_option = null","get_name" => "get_name","get__db" => "get__db","get___state_set = null" => "get___state_set = null");
	function __toString() { return 'JoomlahaxeModelJoomlahaxe'; }
}
