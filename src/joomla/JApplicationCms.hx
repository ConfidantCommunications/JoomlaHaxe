package joomla;
/**
 * @package     Joomla.Libraries
 * @subpackage  Application
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

//defined('JPATH_PLATFORM') or die;

//use Joomla\Registry\Registry;

/**
 * Joomla! CMS Application class
 *
 * @since  3.2
 */
extern class JApplicationCms
{

	/**
	 * The scope of the application.
	 * @since  3.2
	 */
	public var scope : String;// = null;

	/**
	 * Class constructor.
	 * @param   input   An optional argument to provide dependency injection for the application's
	 *                                          input object.  If the argument is a JInput object that object will become
	 *                                          the application's input object, otherwise a default input object is created.
	 * @param   config  An optional argument to provide dependency injection for the application's
	 *                                          config object.  If the argument is a Registry object that object will become
	 *                                          the application's config object, otherwise a default config object is created.
	 * @param   client  An optional argument to provide dependency injection for the application's
	 *                                          client object.  If the argument is a JApplicationWebClient object that object will become
	 *                                          the application's client object, otherwise a default client object is created.
	 * @since   3.2
	 */
	public function __construct(input:Dynamic=null, config:Dynamic=null, client:Dynamic=null):Void;

	/**
	 * After the session has been started we need to populate it with some default values.
	 * @since   3.2
	 */
	public function afterSessionStart() : Void;

	/**
	 * Checks the user session.
	 * If the session record doesn't exist, initialise it.
	 * If session is new, create session variables
	 * @since   3.2
	 * @throws  RuntimeException
	 */
	public function checkSession() : Void;

	/**
	 * Enqueue a system message.
	 * @param   msg   The message to enqueue.
	 * @param   type  The message type. Default is message.
	 * @since   3.2
	 */
	public function enqueueMessage(msg:String, type:String='message') : Void;

	/**
	 * Execute the application.
	 * @since   3.2
	 */
	public function execute() : Void;

	/**
	 * Gets a configuration value.
	 * @param   varname  The name of the value to get.
	 * @param   default  Default value to return
	 * @return  mixed  The user state.
	 * @since   3.2
	 * @deprecated  4.0  Use get() instead
	 */
	public function getCfg(varname:String, defaultAllan:String=null) : Dynamic;

	/**
	 * Gets the client id of the current running application.
	 * @return  integer  A client identifier.
	 * @since   3.2
	 */
	public function getClientId() : Int;

	/**
	 * Returns a reference to the global JApplicationCms object, only creating it if it doesn't already exist.
	 * This method must be invoked as: $web = JApplicationCms::getInstance();
	 * @param   name  The name (optional) of the JApplicationCms class to instantiate.
	 * @since   3.2
	 * @throws  RuntimeException
	 */
	public static function getInstance(name:String=null) : JApplicationCms;

	/**
	 * Returns the application JMenu object.
	 * @param   name     The name of the application/client.
	 * @param   options  An optional associative array of configuration settings.
	 * @since   3.2
	 */
	public function getMenu(name:String=null, options:Dynamic=untyped __php__("array()")) : Dynamic;

	/**
	 * Get the system message queue.
	 * @return  array  The system message queue.
	 * @since   3.2
	 */
	public function getMessageQueue() : Dynamic;

	/**
	 * Gets the name of the current running application.
	 * @return  string  The name of the application.
	 * @since   3.2
	 */
	public function getName() : String;

	/**
	 * Returns the application JPathway object.
	 * @param   name     The name of the application.
	 * @param   options  An optional associative array of configuration settings.
	 * @since   3.2
	 */
	public function getPathway(name:String=null, options:Dynamic=untyped __php__("array()")) : Dynamic;

	/**
	 * Returns the application JRouter object.
	 * @param   name     The name of the application.
	 * @param   options  An optional associative array of configuration settings.
	 * @since   3.2
	 */
	public static function getRouter(name:String=null ) : Dynamic;

	/**
	 * Gets the name of the current template.
	 * @param   params  An optional associative array of configuration settings
	 * @return  mixed  System is the fallback.
	 * @since   3.2
	 */
	public function getTemplate(params:Bool=false) : Dynamic;

	/**
	 * Gets a user state.
	 * @param   key      The path of the state.
	 * @param   default  Optional default value, returned if the internal value is null.
	 * @return  mixed  The user state or null.
	 * @since   3.2
	 */
	public function getUserState(key:String, defaultAllan:Dynamic=null) : Dynamic;

	/**
	 * Gets the value of a user state variable.
	 * @param   key      The key of the user state variable.
	 * @param   request  The name of the variable passed in a request.
	 * @param   default  The default value for the variable if not found. Optional.
	 * @param   type     Filter for the variable, for valid values see {@link JFilterInput::clean()}. Optional.
	 * @return  object  The request user state.
	 * @since   3.2
	 */
	public function getUserStateFromRequest(key:String, request:String, defaultAllan:String=null, type:String='none') : Dynamic;

	/**
	 * Is admin interface?
	 * @return  boolean  True if this application is administrator.
	 * @since   3.2
	 */
	public function isAdmin() : Bool;

	/**
	 * Is site interface?
	 * @return  boolean  True if this application is site.
	 * @since   3.2
	 */
	public function isSite() : Bool;

	/**
	 * Allows the application to load a custom or default session.
	 * The logic and options for creating this object are adequately generic for default cases
	 * but for many applications it will make sense to override this method and create a session,
	 * if required, based on more specific needs.
	 * @param   session  An optional session object. If omitted, the session is created.
	 * @return  JApplicationCms  This method is chainable.
	 * @since   3.2
	 */
	public function loadSession(session:Dynamic=null) : JApplicationCms;

	/**
	 * Login authentication function.
	 * Username and encoded password are passed the onUserLogin event which
	 * is responsible for the user validation. A successful validation updates
	 * the current session record with the user's details.
	 * Username and encoded password are sent as credentials (along with other
	 * possibilities) to each observer (authentication plugin) for user
	 * validation.  Successful validation will update the current session with
	 * the user details.
	 * @param   credentials  Array('username' => string, 'password' => string)
	 * @param   options      Array('remember' => boolean)
	 * @return  boolean  True on success.
	 * @since   3.2
	 */
	public function login(credentials:Dynamic, options:Dynamic=untyped __php__("array()")) : Bool;

	/**
	 * Logout authentication function.
	 * Passed the current user information to the onUserLogout event and reverts the current
	 * session record back to 'anonymous' parameters.
	 * If any of the authentication plugins did not successfully complete
	 * the logout routine then the whole method fails. Any errors raised
	 * should be done in the plugin as this provides the ability to give
	 * much more information about why the routine may have failed.
	 * @param   userid   The user to load - Can be an integer or string - If string, it is converted to ID automatically
	 * @param   options  Array('clientid' => array of client id's)
	 * @return  boolean  True on success
	 * @since   3.2
	 */
	public function logout(userid:Int=null, options:Dynamic=untyped __php__("array()")) : Bool;

	/**
	 * Redirect to another URL.
	 * If the headers have not been sent the redirect will be accomplished using a "301 Moved Permanently"
	 * or "303 See Other" code in the header pointing to the new location. If the headers have already been
	 * sent this will be accomplished using a JavaScript statement.
	 * @param   url     The URL to redirect to. Can only be http/https URL
	 * @param   status  The HTTP 1.1 status code to be provided. 303 is assumed by default.
	 * @since   3.2
	 */
	public function redirect(url:String, status:Int=303) : Void;

	/**
	 * Sets the value of a user state variable.
	 * @param   key    The path of the state.
	 * @param   value  The value of the variable.
	 * @return  mixed  The previous state, if one existed.
	 * @since   3.2
	 */
	public function setUserState(key:String, value:String) : Dynamic;

	/**
	 * Sends all headers prior to returning the string
	 * @param   compress  If true, compress the data
	 * @since   3.2
	 */
	public function toString(compress:Bool=false) : String;
	public function getCmd(s:String):Dynamic;
}
