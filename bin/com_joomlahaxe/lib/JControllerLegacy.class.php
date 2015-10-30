<?php

class JControllerLegacy {
	public function __construct($config = null) {
		if(!php_Boot::$skip_constructor) {
		$GLOBALS['%s']->push("JControllerLegacy::new");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst = new legacy($config);
			$GLOBALS['%s']->pop();
			$tmp;
			return;
		}
		$GLOBALS['%s']->pop();
	}}
	public $__inst;
	public function get_basePath() {
		$GLOBALS['%s']->push("JControllerLegacy::get_basePath");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$GLOBALS['%s']->pop();
			return $this->__inst->basePath;
		}
		$GLOBALS['%s']->pop();
	}
	public function get_default_view() {
		$GLOBALS['%s']->push("JControllerLegacy::get_default_view");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$GLOBALS['%s']->pop();
			return $this->__inst->default_view;
		}
		$GLOBALS['%s']->pop();
	}
	public function get_doTask() {
		$GLOBALS['%s']->push("JControllerLegacy::get_doTask");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$GLOBALS['%s']->pop();
			return $this->__inst->doTask;
		}
		$GLOBALS['%s']->pop();
	}
	public function get_message() {
		$GLOBALS['%s']->push("JControllerLegacy::get_message");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$GLOBALS['%s']->pop();
			return $this->__inst->message;
		}
		$GLOBALS['%s']->pop();
	}
	public function get_messageType() {
		$GLOBALS['%s']->push("JControllerLegacy::get_messageType");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$GLOBALS['%s']->pop();
			return $this->__inst->messageType;
		}
		$GLOBALS['%s']->pop();
	}
	public function get_methods() {
		$GLOBALS['%s']->push("JControllerLegacy::get_methods");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$GLOBALS['%s']->pop();
			return $this->__inst->methods;
		}
		$GLOBALS['%s']->pop();
	}
	public function get_name() {
		$GLOBALS['%s']->push("JControllerLegacy::get_name");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$GLOBALS['%s']->pop();
			return $this->__inst->name;
		}
		$GLOBALS['%s']->pop();
	}
	public function get_model_prefix() {
		$GLOBALS['%s']->push("JControllerLegacy::get_model_prefix");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$GLOBALS['%s']->pop();
			return $this->__inst->model_prefix;
		}
		$GLOBALS['%s']->pop();
	}
	public function get_paths() {
		$GLOBALS['%s']->push("JControllerLegacy::get_paths");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$GLOBALS['%s']->pop();
			return $this->__inst->paths;
		}
		$GLOBALS['%s']->pop();
	}
	public function get_redirecturl() {
		$GLOBALS['%s']->push("JControllerLegacy::get_redirecturl");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$GLOBALS['%s']->pop();
			return $this->__inst->redirecturl;
		}
		$GLOBALS['%s']->pop();
	}
	public function get_task() {
		$GLOBALS['%s']->push("JControllerLegacy::get_task");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$GLOBALS['%s']->pop();
			return $this->__inst->task;
		}
		$GLOBALS['%s']->pop();
	}
	public function get_taskMap() {
		$GLOBALS['%s']->push("JControllerLegacy::get_taskMap");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$GLOBALS['%s']->pop();
			return $this->__inst->taskMap;
		}
		$GLOBALS['%s']->pop();
	}
	public function get_input() {
		$GLOBALS['%s']->push("JControllerLegacy::get_input");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$GLOBALS['%s']->pop();
			return $this->__inst->input;
		}
		$GLOBALS['%s']->pop();
	}
	public function addModelPath($path = null, $prefix = null) {
		$GLOBALS['%s']->push("JControllerLegacy::addModelPath");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->addModelPath($path, $prefix);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function createFileName($type = null, $parts = null) {
		$GLOBALS['%s']->push("JControllerLegacy::createFileName");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->createFileName($type, $parts);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function getInstance($prefix = null, $config = null) {
		$GLOBALS['%s']->push("JControllerLegacy::getInstance");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->getInstance($prefix, $config);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function addPath($type = null, $path = null) {
		$GLOBALS['%s']->push("JControllerLegacy::addPath");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->addPath($type, $path);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function addViewPath($path = null) {
		$GLOBALS['%s']->push("JControllerLegacy::addViewPath");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->addViewPath($path);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function authorise($task = null) {
		$GLOBALS['%s']->push("JControllerLegacy::authorise");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->authorise($task);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function checkEditId($context = null, $id = null) {
		$GLOBALS['%s']->push("JControllerLegacy::checkEditId");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->checkEditId($context, $id);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function createModel($name = null, $prefix = null, $config = null) {
		$GLOBALS['%s']->push("JControllerLegacy::createModel");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->createModel($name, $prefix, $config);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function createView($name = null, $prefix = null, $type = null, $config = null) {
		$GLOBALS['%s']->push("JControllerLegacy::createView");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->createView($name, $prefix, $type, $config);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function display($cachable = null, $urlparams = null) {
		$GLOBALS['%s']->push("JControllerLegacy::display");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->display($cachable, $urlparams);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function execute($task = null) {
		$GLOBALS['%s']->push("JControllerLegacy::execute");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->execute($task);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function getModel($name = null, $prefix = null, $config = null) {
		$GLOBALS['%s']->push("JControllerLegacy::getModel");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->getModel($name, $prefix, $config);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function getName() {
		$GLOBALS['%s']->push("JControllerLegacy::getName");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->getName();
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function getTask() {
		$GLOBALS['%s']->push("JControllerLegacy::getTask");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->getTask();
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function getTasks() {
		$GLOBALS['%s']->push("JControllerLegacy::getTasks");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->getTasks();
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function getView($name = null, $type = null, $prefix = null, $config = null) {
		$GLOBALS['%s']->push("JControllerLegacy::getView");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->getView($name, $type, $prefix, $config);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function holdEditId($context = null, $id = null) {
		$GLOBALS['%s']->push("JControllerLegacy::holdEditId");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->holdEditId($context, $id);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function redirect() {
		$GLOBALS['%s']->push("JControllerLegacy::redirect");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->redirect();
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function registerDefaultTask($method = null) {
		$GLOBALS['%s']->push("JControllerLegacy::registerDefaultTask");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->registerDefaultTask($method);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function registerTask($task = null, $method = null) {
		$GLOBALS['%s']->push("JControllerLegacy::registerTask");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->registerTask($task, $method);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function unregisterTask($task = null) {
		$GLOBALS['%s']->push("JControllerLegacy::unregisterTask");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->unregisterTask($task);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function releaseEditId($context = null, $id = null) {
		$GLOBALS['%s']->push("JControllerLegacy::releaseEditId");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->releaseEditId($context, $id);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function setMessage($text = null, $type = null) {
		$GLOBALS['%s']->push("JControllerLegacy::setMessage");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->setMessage($text, $type);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function setPath($type = null, $path = null) {
		$GLOBALS['%s']->push("JControllerLegacy::setPath");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->setPath($type, $path);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function setRedirect($url = null, $msg = null, $type = null) {
		$GLOBALS['%s']->push("JControllerLegacy::setRedirect");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->setRedirect($url, $msg, $type);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function resolve($field) {
		$GLOBALS['%s']->push("JControllerLegacy::resolve");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->$field;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
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
