<?php

class JFactory {
	public function __construct() {
		if(!php_Boot::$skip_constructor) {
		$this->__inst = new factory();
		return;
	}}
	public $__inst;
	public function getApplication($id = null, $arrayconfig = null) {
		return $this->__inst->getApplication($id, $arrayconfig);
	}
	public function getConfig($file = null, $type = null, $namespace = null) {
		return $this->__inst->getConfig($file, $type, $namespace);
	}
	public function getSession($arrayoptions = null) {
		return $this->__inst->getSession($arrayoptions);
	}
	public function getLanguage() {
		return $this->__inst->getLanguage();
	}
	public function getDocument() {
		return $this->__inst->getDocument();
	}
	public function getUser($id = null) {
		return $this->__inst->getUser($id);
	}
	public function getCache($group = null, $handler = null, $storage = null) {
		return $this->__inst->getCache($group, $handler, $storage);
	}
	public function ')?'callback':$handler;

		$options=array($'defaultgroup' = null) {
		return $this->__inst->')?'callback':$handler;

		$options=array($'defaultgroup');
	}
	public function getAcl() {
		return $this->__inst->getAcl();
	}
	public function getDbo() {
		return $this->__inst->getDbo();
	}
	public function getMailer() {
		return $this->__inst->getMailer();
	}
	public function getFeedParser($url = null, $cache_time = null) {
		return $this->__inst->getFeedParser($url, $cache_time);
	}
	public function getXml($data = null, $isFile = null) {
		return $this->__inst->getXml($data, $isFile);
	}
	public function getEditor($editor = null) {
		return $this->__inst->getEditor($editor);
	}
	public function getUri($uri = null) {
		return $this->__inst->getUri($uri);
	}
	public function getDate($time = null, $tzOffset = null) {
		return $this->__inst->getDate($time, $tzOffset);
	}
	public function createConfig($file = null, $type = null, $namespace = null) {
		return $this->__inst->createConfig($file, $type, $namespace);
	}
	public function createSession($arrayoptions = null) {
		return $this->__inst->createSession($arrayoptions);
	}
	public function createDbo() {
		return $this->__inst->createDbo();
	}
	public function createMailer() {
		return $this->__inst->createMailer();
	}
	public function 
		switch($mailer = null) {
		return $this->__inst->
		switch($mailer);
	}
	public function createLanguage() {
		return $this->__inst->createLanguage();
	}
	public function createDocument() {
		return $this->__inst->createDocument();
	}
	public function getStream($use_prefix = null, $use_network = null, $ua = null, $uamask = null) {
		return $this->__inst->getStream($use_prefix, $use_network, $ua, $uamask);
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
	function __toString() { return 'JFactory'; }
}
require_once '/Applications/MAMPold/htdocs_artworks/libraries/joomla/factory.php';
