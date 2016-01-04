<?php

class JoomlahaxeModelJoomlahaxe extends JModelAdmin {
	public function __construct($config = null) { if(!php_Boot::$skip_constructor) {
		parent::__construct($config);
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
		$form = $this->loadForm('com_joomlahaxe.joomlahaxe', 'joomlahaxe', array('control' => 'jform', 'load_data' => $loadData));
		if($form === null) {
			die("getForm die, line 54");
			return false;
		}
		return $form;
	}
	public function loadFormData() {
		$data = JFactory::getApplication()->getUserState('com_joomlahaxe.edit.joomlahaxe.data', array());
		if($data === null) {
			$data = $this->getItem(null);
		}
		$d = "asdf";
		return $data;
	}
	static function main() {
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
	function __toString() { return 'JoomlahaxeModelJoomlahaxe'; }
}
