<?php

class JViewLegacy {
	public function __construct($config = null) {
		if(!php_Boot::$skip_constructor) {
		$GLOBALS['%s']->push("JViewLegacy::new");
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
	public function get__name = null() {
		$GLOBALS['%s']->push("JViewLegacy::get__name = null");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$GLOBALS['%s']->pop();
			return $this->__inst->_name = null;
		}
		$GLOBALS['%s']->pop();
	}
	public function get__models = array()() {
		$GLOBALS['%s']->push("JViewLegacy::get__models = array()");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$GLOBALS['%s']->pop();
			return $this->__inst->_models = array();
		}
		$GLOBALS['%s']->pop();
	}
	public function get__basePath = null() {
		$GLOBALS['%s']->push("JViewLegacy::get__basePath = null");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$GLOBALS['%s']->pop();
			return $this->__inst->_basePath = null;
		}
		$GLOBALS['%s']->pop();
	}
	public function get__defaultModel = null() {
		$GLOBALS['%s']->push("JViewLegacy::get__defaultModel = null");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$GLOBALS['%s']->pop();
			return $this->__inst->_defaultModel = null;
		}
		$GLOBALS['%s']->pop();
	}
	public function get__layout = 'default'() {
		$GLOBALS['%s']->push("JViewLegacy::get__layout = 'default'");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$GLOBALS['%s']->pop();
			return $this->__inst->_layout = 'default';
		}
		$GLOBALS['%s']->pop();
	}
	public function get__layoutExt = 'php'() {
		$GLOBALS['%s']->push("JViewLegacy::get__layoutExt = 'php'");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$GLOBALS['%s']->pop();
			return $this->__inst->_layoutExt = 'php';
		}
		$GLOBALS['%s']->pop();
	}
	public function get__layoutTemplate = '_'() {
		$GLOBALS['%s']->push("JViewLegacy::get__layoutTemplate = '_'");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$GLOBALS['%s']->pop();
			return $this->__inst->_layoutTemplate = '_';
		}
		$GLOBALS['%s']->pop();
	}
	public function get__path = array('template' => array(), 'helper' => array())() {
		$GLOBALS['%s']->push("JViewLegacy::get__path = array('template' => array(), 'helper' => array())");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$GLOBALS['%s']->pop();
			return $this->__inst->_path = array('template' => array(), 'helper' => array());
		}
		$GLOBALS['%s']->pop();
	}
	public function get__template = null() {
		$GLOBALS['%s']->push("JViewLegacy::get__template = null");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$GLOBALS['%s']->pop();
			return $this->__inst->_template = null;
		}
		$GLOBALS['%s']->pop();
	}
	public function get__output = null() {
		$GLOBALS['%s']->push("JViewLegacy::get__output = null");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$GLOBALS['%s']->pop();
			return $this->__inst->_output = null;
		}
		$GLOBALS['%s']->pop();
	}
	public function get__escape = 'htmlspecialchars'() {
		$GLOBALS['%s']->push("JViewLegacy::get__escape = 'htmlspecialchars'");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$GLOBALS['%s']->pop();
			return $this->__inst->_escape = 'htmlspecialchars';
		}
		$GLOBALS['%s']->pop();
	}
	public function get__charset = 'UTF-8'() {
		$GLOBALS['%s']->push("JViewLegacy::get__charset = 'UTF-8'");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$GLOBALS['%s']->pop();
			return $this->__inst->_charset = 'UTF-8';
		}
		$GLOBALS['%s']->pop();
	}
	public function touseforescapingstrings<br/>
	*base_path:theparentpath($optional = null) {
		$GLOBALS['%s']->push("JViewLegacy::touseforescapingstrings<br/>\x0A\x09*base_path:theparentpath");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->touseforescapingstrings<br/>
	*base_path:theparentpath($optional);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function s)
		if($array_key_exists('charset' = null, $config = null) {
		$GLOBALS['%s']->push("JViewLegacy::s)\x0A\x09\x09if");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->s)
		if($array_key_exists('charset', $config);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function display($tpl = null) {
		$GLOBALS['%s']->push("JViewLegacy::display");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->display($tpl);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function assign() {
		$GLOBALS['%s']->push("JViewLegacy::assign");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->assign();
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function assignRef($key = null, $&val = null) {
		$GLOBALS['%s']->push("JViewLegacy::assignRef");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->assignRef($key, $&val);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function escape($var = null) {
		$GLOBALS['%s']->push("JViewLegacy::escape");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->escape($var);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function get($property = null, $default = null) {
		$GLOBALS['%s']->push("JViewLegacy::get");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->get($property, $default);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function getModel($name = null) {
		$GLOBALS['%s']->push("JViewLegacy::getModel");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->getModel($name);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function getLayout() {
		$GLOBALS['%s']->push("JViewLegacy::getLayout");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->getLayout();
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function getLayoutTemplate() {
		$GLOBALS['%s']->push("JViewLegacy::getLayoutTemplate");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->getLayoutTemplate();
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function getName() {
		$GLOBALS['%s']->push("JViewLegacy::getName");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->getName();
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function setModel($model = null, $default = null) {
		$GLOBALS['%s']->push("JViewLegacy::setModel");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->setModel($model, $default);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function setLayout($layout = null) {
		$GLOBALS['%s']->push("JViewLegacy::setLayout");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->setLayout($layout);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function setLayoutExt($value = null) {
		$GLOBALS['%s']->push("JViewLegacy::setLayoutExt");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->setLayoutExt($value);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function setEscape($spec = null) {
		$GLOBALS['%s']->push("JViewLegacy::setEscape");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->setEscape($spec);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function addTemplatePath($path = null) {
		$GLOBALS['%s']->push("JViewLegacy::addTemplatePath");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->addTemplatePath($path);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function addHelperPath($path = null) {
		$GLOBALS['%s']->push("JViewLegacy::addHelperPath");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->addHelperPath($path);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function loadTemplate($tpl = null) {
		$GLOBALS['%s']->push("JViewLegacy::loadTemplate");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->loadTemplate($tpl);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function loadHelper($hlp = null) {
		$GLOBALS['%s']->push("JViewLegacy::loadHelper");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->loadHelper($hlp);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function _setPath($type = null, $path = null) {
		$GLOBALS['%s']->push("JViewLegacy::_setPath");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->_setPath($type, $path);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function _addPath($type = null, $path = null) {
		$GLOBALS['%s']->push("JViewLegacy::_addPath");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->_addPath($type, $path);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function _createFileName($type = null, $parts = null) {
		$GLOBALS['%s']->push("JViewLegacy::_createFileName");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->_createFileName($type, $parts);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function getForm() {
		$GLOBALS['%s']->push("JViewLegacy::getForm");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->__inst->getForm();
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function resolve($field) {
		$GLOBALS['%s']->push("JViewLegacy::resolve");
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
	static $__properties__ = array("get__charset = 'UTF-8'" => "get__charset = 'UTF-8'","get__escape = 'htmlspecialchars'" => "get__escape = 'htmlspecialchars'","get__output = null" => "get__output = null","get__template = null" => "get__template = null","get__path = array('template' => array(), 'helper' => array())" => "get__path = array('template' => array(), 'helper' => array())","get__layoutTemplate = '_'" => "get__layoutTemplate = '_'","get__layoutExt = 'php'" => "get__layoutExt = 'php'","get__layout = 'default'" => "get__layout = 'default'","get__defaultModel = null" => "get__defaultModel = null","get__basePath = null" => "get__basePath = null","get__models = array()" => "get__models = array()","get__name = null" => "get__name = null");
	function __toString() { return 'JViewLegacy'; }
}
require_once '/Applications/MAMPold/htdocs_artworks/libraries/legacy/view/legacy.php';
