<?php

class JApplicationCms {
	public function __construct($JInputinput = null, $Registryconfig = null, $JApplicationWebClientclient = null) {
		if(!php_Boot::$skip_constructor) {
		$this->__inst = new cms($JInputinput, $Registryconfig, $JApplicationWebClientclient);
		return;
	}}
	public $__inst;
	public function get_scope = null() {
		return $this->__inst->scope = null;
	}
	public function set_scope = null($value = null) {
		return $this->__inst->scope = null = $value;
	}
	public function get_docOptions = array()() {
		return $this->__inst->docOptions = array();
	}
	public function get__clientId = null() {
		return $this->__inst->_clientId = null;
	}
	public function get__messageQueue = array()() {
		return $this->__inst->_messageQueue = array();
	}
	public function get__name = null() {
		return $this->__inst->_name = null;
	}
	public function get_profiler = null() {
		return $this->__inst->profiler = null;
	}
	public function get_template = null() {
		return $this->__inst->template = null;
	}
	public function afterSessionStart() {
		return $this->__inst->afterSessionStart();
	}
	public function checkSession() {
		return $this->__inst->checkSession();
	}
	public function enqueueMessage($msg = null, $type = null) {
		return $this->__inst->enqueueMessage($msg, $type);
	}
	public function execute() {
		return $this->__inst->execute();
	}
	public function checkUserRequireReset($option = null, $view = null, $layout = null, $tasks = null) {
		return $this->__inst->checkUserRequireReset($option, $view, $layout, $tasks);
	}
	public function getCfg($varname = null, $default = null) {
		return $this->__inst->getCfg($varname, $default);
	}
	public function getClientId() {
		return $this->__inst->getClientId();
	}
	public function getInstance($name = null) {
		return $this->__inst->getInstance($name);
	}
	public function getMenu($name = null, $options = null) {
		return $this->__inst->getMenu($name, $options);
	}
	public function getMessageQueue() {
		return $this->__inst->getMessageQueue();
	}
	public function getName() {
		return $this->__inst->getName();
	}
	public function getPathway($name = null, $options = null) {
		return $this->__inst->getPathway($name, $options);
	}
	public function getRouter($name = null, $arrayoptions = null) {
		return $this->__inst->getRouter($name, $arrayoptions);
	}
	public function getTemplate($params = null) {
		return $this->__inst->getTemplate($params);
	}
	public function getUserState($key = null, $default = null) {
		return $this->__inst->getUserState($key, $default);
	}
	public function getUserStateFromRequest($key = null, $request = null, $default = null, $type = null) {
		return $this->__inst->getUserStateFromRequest($key, $request, $default, $type);
	}
	public function initialiseApp($options = null) {
		return $this->__inst->initialiseApp($options);
	}
	public function isAdmin() {
		return $this->__inst->isAdmin();
	}
	public function isSite() {
		return $this->__inst->isSite();
	}
	public function loadSession($JSessionsession = null) {
		return $this->__inst->loadSession($JSessionsession);
	}
	public function .
	*
	*UsernameandencodedpasswordarepassedtheonUserLogineventwhich
	*isresponsiblefortheuservalidation.Asuccessfulvalidationupdates
	*thecurrentsessionrecordwiththeuser'sdetails.
	*
	*Usernameandencodedpasswordaresentascredentials($alongwithother
	*possibilities = null) {
		return $this->__inst->.
	*
	*UsernameandencodedpasswordarepassedtheonUserLogineventwhich
	*isresponsiblefortheuservalidation.Asuccessfulvalidationupdates
	*thecurrentsessionrecordwiththeuser'sdetails.
	*
	*Usernameandencodedpasswordaresentascredentials($alongwithother
	*possibilities);
	}
	public function login($credentials = null, $options = null) {
		return $this->__inst->login($credentials, $options);
	}
	public function .
	*
	*PassedthecurrentuserinformationtotheonUserLogouteventandrevertsthecurrent
	*sessionrecordbackto'anonymous'parameters.
	*Ifanyoftheauthenticationpluginsdidnotsuccessfullycomplete
	*thelogoutroutinethenthewholemethodfails.Anyerrorsraised
	*shouldbedoneinthepluginasthisprovidestheabilitytogive
	*muchmoreinformationaboutwhytheroutinemayhavefailed.
	*
	*@paraminteger$useridTheusertoload-Canbeanintegerorstring-Ifstring,itisconvertedtoIDautomatically
	*@paramarray$optionsArray($'clientid' = null) {
		return $this->__inst->.
	*
	*PassedthecurrentuserinformationtotheonUserLogouteventandrevertsthecurrent
	*sessionrecordbackto'anonymous'parameters.
	*Ifanyoftheauthenticationpluginsdidnotsuccessfullycomplete
	*thelogoutroutinethenthewholemethodfails.Anyerrorsraised
	*shouldbedoneinthepluginasthisprovidestheabilitytogive
	*muchmoreinformationaboutwhytheroutinemayhavefailed.
	*
	*@paraminteger$useridTheusertoload-Canbeanintegerorstring-Ifstring,itisconvertedtoIDautomatically
	*@paramarray$optionsArray($'clientid');
	}
	public function logout($userid = null, $options = null) {
		return $this->__inst->logout($userid, $options);
	}
	public function redirect($url = null, $status = null) {
		return $this->__inst->redirect($url, $status);
	}
	public function isdeprecated
				JLog::add($
					'PassingamessageandmessagetypetoJFactory::getApplication( = null) {
		return $this->__inst->isdeprecated
				JLog::add($
					'PassingamessageandmessagetypetoJFactory::getApplication();
	}
	public function render() {
		return $this->__inst->render();
	}
	public function route() {
		return $this->__inst->route();
	}
	public function setUserState($key = null, $value = null) {
		return $this->__inst->setUserState($key, $value);
	}
	public function toString($compress = null) {
		return $this->__inst->toString($compress);
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
	static $__properties__ = array("get_template = null" => "get_template = null","get_profiler = null" => "get_profiler = null","get__name = null" => "get__name = null","get__messageQueue = array()" => "get__messageQueue = array()","get__clientId = null" => "get__clientId = null","get_docOptions = array()" => "get_docOptions = array()","set_scope = null" => "set_scope = null","get_scope = null" => "get_scope = null");
	function __toString() { return $this->toString(); }
}
require_once '/Applications/MAMPold/htdocs_artworks/libraries/cms/application/cms.php';
