<?php

class JoomlahaxeModelJhaxe extends JModelAdmin {
	public function __construct() { if(!php_Boot::$skip_constructor) {
		$config = null;
		$config = Array("[\"name\":\"Jhaxe\"]");
		parent::__construct($config);
		defined('_JEXEC') or die("no joomla here, scallywag");
		jimport("joomla.application.component.modeladmin");
	}}
	public function getTable($type = null, $prefix = null, $config = null) {
		if($prefix === null) {
			$prefix = "JoomlahaxeTable";
		}
		if($type === null) {
			$type = "Joomlahaxe";
		}
		if($config === null) {
			$config = array();
		}
		return JTable::getInstance($type, $prefix, $config);
	}
	public function getForm($data = null, $loadData = null) {
		if($loadData === null) {
			$loadData = true;
		}
		if($data === null) {
			$data = array();
		}
		$h = new haxe_ds_StringMap();
		$h->set("control", "jform");
		$h->set("load_data", (($loadData) ? "true" : "false"));
		$formArray = php_Lib::associativeArrayOfHash($h);
		$form = call_user_func_array($this->resolve("loadForm"), array("com_joomlahaxe.joomlahaxe", "joomlahaxe", $formArray));
		if($form === null) {
			return false;
		}
		return $form;
	}
	public function loadFormData() {
		$data = JFactory::getApplication()->getUserState('com_helloworld.edit.helloworld.data', array());
		if($data === null) {
			$data = $this->getItem(null);
		}
		return $data;
	}
	static function main() {
		new JoomlahaxeModelJhaxe();
	}
	static $__properties__ = array("get_associationsContext = null" => "get_associationsContext = null","get_batch_commands = array(
		'assetgroup_id' => 'batchAccess',
		'language_id' => 'batchLanguage',
		'tag' => 'batchTag'
	)" => "get_batch_commands = array(
		'assetgroup_id' => 'batchAccess',
		'language_id' => 'batchLanguage',
		'tag' => 'batchTag'
	)","get_batch_copymove = 'category_id'" => "get_batch_copymove = 'category_id'","get_events_map = null" => "get_events_map = null","get_event_change_state = null" => "get_event_change_state = null","get_event_before_save = null" => "get_event_before_save = null","get_event_before_delete = null" => "get_event_before_delete = null","get_event_after_save = null" => "get_event_after_save = null","get_event_after_delete = null" => "get_event_after_delete = null","get_text_prefix = null" => "get_text_prefix = null");
	function __toString() { return 'JoomlahaxeModelJhaxe'; }
}
