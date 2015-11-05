<?php

class JControllerLegacy {
	public function __construct($config = null) {
		if(!php_Boot::$skip_constructor) {
		$this->__inst = new legacy($config);
		return;
	}}
	public $__inst;
	public function get_basePath() {
		return $this->__inst->basePath;
	}
	public function get_default_view() {
		return $this->__inst->default_view;
	}
	public function get_doTask() {
		return $this->__inst->doTask;
	}
	public function get_message() {
		return $this->__inst->message;
	}
	public function get_messageType() {
		return $this->__inst->messageType;
	}
	public function get_methods() {
		return $this->__inst->methods;
	}
	public function get_name() {
		return $this->__inst->name;
	}
	public function get_model_prefix() {
		return $this->__inst->model_prefix;
	}
	public function get_paths() {
		return $this->__inst->paths;
	}
	public function get_redirecturl() {
		return $this->__inst->redirecturl;
	}
	public function get_task() {
		return $this->__inst->task;
	}
	public function get_taskMap() {
		return $this->__inst->taskMap;
	}
	public function get_input() {
		return $this->__inst->input;
	}
	public function addModelPath($path = null, $prefix = null) {
		return $this->__inst->addModelPath($path, $prefix);
	}
	public function createFileName($type = null, $parts = null) {
		return $this->__inst->createFileName($type, $parts);
	}
	public function getInstance($prefix = null, $config = null) {
		return $this->__inst->getInstance($prefix, $config);
	}
	public function addPath($type = null, $path = null) {
		return $this->__inst->addPath($type, $path);
	}
	public function addViewPath($path = null) {
		return $this->__inst->addViewPath($path);
	}
	public function authorise($task = null) {
		return $this->__inst->authorise($task);
	}
	public function checkEditId($context = null, $id = null) {
		return $this->__inst->checkEditId($context, $id);
	}
	public function createModel($name = null, $prefix = null, $config = null) {
		return $this->__inst->createModel($name, $prefix, $config);
	}
	public function createView($name = null, $prefix = null, $type = null, $config = null) {
		return $this->__inst->createView($name, $prefix, $type, $config);
	}
	public function display($cachable = null, $urlparams = null) {
		return $this->__inst->display($cachable, $urlparams);
	}
	public function execute($task = null) {
		return $this->__inst->execute($task);
	}
	public function getModel($name = null, $prefix = null, $config = null) {
		return $this->__inst->getModel($name, $prefix, $config);
	}
	public function getName() {
		return $this->__inst->getName();
	}
	public function getTask() {
		return $this->__inst->getTask();
	}
	public function getTasks() {
		return $this->__inst->getTasks();
	}
	public function getView($name = null, $type = null, $prefix = null, $config = null) {
		return $this->__inst->getView($name, $type, $prefix, $config);
	}
	public function holdEditId($context = null, $id = null) {
		return $this->__inst->holdEditId($context, $id);
	}
	public function redirect() {
		return $this->__inst->redirect();
	}
	public function registerDefaultTask($method = null) {
		return $this->__inst->registerDefaultTask($method);
	}
	public function registerTask($task = null, $method = null) {
		return $this->__inst->registerTask($task, $method);
	}
	public function unregisterTask($task = null) {
		return $this->__inst->unregisterTask($task);
	}
	public function releaseEditId($context = null, $id = null) {
		return $this->__inst->releaseEditId($context, $id);
	}
	public function setMessage($text = null, $type = null) {
		return $this->__inst->setMessage($text, $type);
	}
	public function setPath($type = null, $path = null) {
		return $this->__inst->setPath($type, $path);
	}
	public function setRedirect($url = null, $msg = null, $type = null) {
		return $this->__inst->setRedirect($url, $msg, $type);
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
	static $__properties__ = array("get_input" => "get_input","get_taskMap" => "get_taskMap","get_task" => "get_task","get_redirecturl" => "get_redirecturl","get_paths" => "get_paths","get_model_prefix" => "get_model_prefix","get_name" => "get_name","get_methods" => "get_methods","get_messageType" => "get_messageType","get_message" => "get_message","get_doTask" => "get_doTask","get_default_view" => "get_default_view","get_basePath" => "get_basePath");
	function __toString() { return 'JControllerLegacy'; }
}
require_once '/Applications/MAMPold/htdocs_artworks/libraries/legacy/controller/legacy.php';
