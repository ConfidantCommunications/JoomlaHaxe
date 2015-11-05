<?php

class JModelAdmin {
	public function __construct($config = null) {
		if(!php_Boot::$skip_constructor) {
		$this->__inst = new admin($config);
		return;
	}}
	public $__inst;
	public function get_text_prefix = null() {
		return $this->__inst->text_prefix = null;
	}
	public function get_event_after_delete = null() {
		return $this->__inst->event_after_delete = null;
	}
	public function get_event_after_save = null() {
		return $this->__inst->event_after_save = null;
	}
	public function get_event_before_delete = null() {
		return $this->__inst->event_before_delete = null;
	}
	public function get_event_before_save = null() {
		return $this->__inst->event_before_save = null;
	}
	public function get_event_change_state = null() {
		return $this->__inst->event_change_state = null;
	}
	public function get_events_map = null() {
		return $this->__inst->events_map = null;
	}
	public function get_batch_copymove = 'category_id'() {
		return $this->__inst->batch_copymove = 'category_id';
	}
	public function get_batch_commands = array(
		'assetgroup_id' => 'batchAccess',
		'language_id' => 'batchLanguage',
		'tag' => 'batchTag'
	)() {
		return $this->__inst->batch_commands = array(
		'assetgroup_id' => 'batchAccess',
		'language_id' => 'batchLanguage',
		'tag' => 'batchTag'
	);
	}
	public function get_associationsContext = null() {
		return $this->__inst->associationsContext = null;
	}
	public function batch($commands = null, $pks = null, $contexts = null) {
		return $this->__inst->batch($commands, $pks, $contexts);
	}
	public function batchAccess($value = null, $pks = null, $contexts = null) {
		return $this->__inst->batchAccess($value, $pks, $contexts);
	}
	public function batchCopy($value = null, $pks = null, $contexts = null) {
		return $this->__inst->batchCopy($value, $pks, $contexts);
	}
	public function batchLanguage($value = null, $pks = null, $contexts = null) {
		return $this->__inst->batchLanguage($value, $pks, $contexts);
	}
	public function batchMove($value = null, $pks = null, $contexts = null) {
		return $this->__inst->batchMove($value, $pks, $contexts);
	}
	public function batchTag($value = null, $pks = null, $contexts = null) {
		return $this->__inst->batchTag($value, $pks, $contexts);
	}
	public function canDelete($record = null) {
		return $this->__inst->canDelete($record);
	}
	public function canEditState($record = null) {
		return $this->__inst->canEditState($record);
	}
	public function checkin($pks = null) {
		return $this->__inst->checkin($pks);
	}
	public function checkout($pk = null) {
		return $this->__inst->checkout($pk);
	}
	public function delete($&pks = null) {
		return $this->__inst->delete($&pks);
	}
	public function generateNewTitle($category_id = null, $alias = null, $title = null) {
		return $this->__inst->generateNewTitle($category_id, $alias, $title);
	}
	public function getItem($pk = null) {
		return $this->__inst->getItem($pk);
	}
	public function getReorderConditions($table = null) {
		return $this->__inst->getReorderConditions($table);
	}
	public function populateState() {
		return $this->__inst->populateState();
	}
	public function prepareTable($table = null) {
		return $this->__inst->prepareTable($table);
	}
	public function publish($&pks = null, $value = null) {
		return $this->__inst->publish($&pks, $value);
	}
	public function reorder($pks = null, $delta = null) {
		return $this->__inst->reorder($pks, $delta);
	}
	public function save($data = null) {
		return $this->__inst->save($data);
	}
	public function saveorder($pks = null, $order = null) {
		return $this->__inst->saveorder($pks, $order);
	}
	public function createTagsHelper($tagsObserver = null, $type = null, $pk = null, $typeAlias = null, $table = null) {
		return $this->__inst->createTagsHelper($tagsObserver, $type, $pk, $typeAlias, $table);
	}
	public function checkCategoryId($categoryId = null) {
		return $this->__inst->checkCategoryId($categoryId);
	}
	public function generateTitle($categoryId = null, $table = null) {
		return $this->__inst->generateTitle($categoryId, $table);
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
	static $__properties__ = array("get_associationsContext = null" => "get_associationsContext = null","get_batch_commands = array(
		'assetgroup_id' => 'batchAccess',
		'language_id' => 'batchLanguage',
		'tag' => 'batchTag'
	)" => "get_batch_commands = array(
		'assetgroup_id' => 'batchAccess',
		'language_id' => 'batchLanguage',
		'tag' => 'batchTag'
	)","get_batch_copymove = 'category_id'" => "get_batch_copymove = 'category_id'","get_events_map = null" => "get_events_map = null","get_event_change_state = null" => "get_event_change_state = null","get_event_before_save = null" => "get_event_before_save = null","get_event_before_delete = null" => "get_event_before_delete = null","get_event_after_save = null" => "get_event_after_save = null","get_event_after_delete = null" => "get_event_after_delete = null","get_text_prefix = null" => "get_text_prefix = null");
	function __toString() { return 'JModelAdmin'; }
}
require_once '/Applications/MAMPold/htdocs_artworks/libraries/legacy/model/admin.php';
