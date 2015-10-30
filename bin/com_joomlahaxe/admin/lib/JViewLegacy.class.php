<?php

class JViewLegacy {
	public function __construct($config = null) {
		if(!php_Boot::$skip_constructor) {
		$this->__inst = new legacy($config);
		return;
	}}
	public $__inst;
	public function get__name = null() {
		return $this->__inst->_name = null;
	}
	public function get__models = array()() {
		return $this->__inst->_models = array();
	}
	public function get__basePath = null() {
		return $this->__inst->_basePath = null;
	}
	public function get__defaultModel = null() {
		return $this->__inst->_defaultModel = null;
	}
	public function get__layout = 'default'() {
		return $this->__inst->_layout = 'default';
	}
	public function get__layoutExt = 'php'() {
		return $this->__inst->_layoutExt = 'php';
	}
	public function get__layoutTemplate = '_'() {
		return $this->__inst->_layoutTemplate = '_';
	}
	public function get__path = array('template' => array(), 'helper' => array())() {
		return $this->__inst->_path = array('template' => array(), 'helper' => array());
	}
	public function get__template = null() {
		return $this->__inst->_template = null;
	}
	public function get__output = null() {
		return $this->__inst->_output = null;
	}
	public function get__escape = 'htmlspecialchars'() {
		return $this->__inst->_escape = 'htmlspecialchars';
	}
	public function get__charset = 'UTF-8'() {
		return $this->__inst->_charset = 'UTF-8';
	}
	public function touseforescapingstrings<br/>
	*base_path:theparentpath($optional = null) {
		return $this->__inst->touseforescapingstrings<br/>
	*base_path:theparentpath($optional);
	}
	public function s)
		if($array_key_exists('charset' = null, $config = null) {
		return $this->__inst->s)
		if($array_key_exists('charset', $config);
	}
	public function display($tpl = null) {
		return $this->__inst->display($tpl);
	}
	public function assign() {
		return $this->__inst->assign();
	}
	public function assignRef($key = null, $&val = null) {
		return $this->__inst->assignRef($key, $&val);
	}
	public function escape($var = null) {
		return $this->__inst->escape($var);
	}
	public function get($property = null, $default = null) {
		return $this->__inst->get($property, $default);
	}
	public function getModel($name = null) {
		return $this->__inst->getModel($name);
	}
	public function getLayout() {
		return $this->__inst->getLayout();
	}
	public function getLayoutTemplate() {
		return $this->__inst->getLayoutTemplate();
	}
	public function getName() {
		return $this->__inst->getName();
	}
	public function setModel($model = null, $default = null) {
		return $this->__inst->setModel($model, $default);
	}
	public function setLayout($layout = null) {
		return $this->__inst->setLayout($layout);
	}
	public function setLayoutExt($value = null) {
		return $this->__inst->setLayoutExt($value);
	}
	public function setEscape($spec = null) {
		return $this->__inst->setEscape($spec);
	}
	public function addTemplatePath($path = null) {
		return $this->__inst->addTemplatePath($path);
	}
	public function addHelperPath($path = null) {
		return $this->__inst->addHelperPath($path);
	}
	public function loadTemplate($tpl = null) {
		return $this->__inst->loadTemplate($tpl);
	}
	public function loadHelper($hlp = null) {
		return $this->__inst->loadHelper($hlp);
	}
	public function _setPath($type = null, $path = null) {
		return $this->__inst->_setPath($type, $path);
	}
	public function _addPath($type = null, $path = null) {
		return $this->__inst->_addPath($type, $path);
	}
	public function _createFileName($type = null, $parts = null) {
		return $this->__inst->_createFileName($type, $parts);
	}
	public function getForm() {
		return $this->__inst->getForm();
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
	static $__properties__ = array("get__charset = 'UTF-8'" => "get__charset = 'UTF-8'","get__escape = 'htmlspecialchars'" => "get__escape = 'htmlspecialchars'","get__output = null" => "get__output = null","get__template = null" => "get__template = null","get__path = array('template' => array(), 'helper' => array())" => "get__path = array('template' => array(), 'helper' => array())","get__layoutTemplate = '_'" => "get__layoutTemplate = '_'","get__layoutExt = 'php'" => "get__layoutExt = 'php'","get__layout = 'default'" => "get__layout = 'default'","get__defaultModel = null" => "get__defaultModel = null","get__basePath = null" => "get__basePath = null","get__models = array()" => "get__models = array()","get__name = null" => "get__name = null");
	function __toString() { return 'JViewLegacy'; }
}
require_once '/Applications/MAMPold/htdocs_artworks/libraries/legacy/view/legacy.php';
