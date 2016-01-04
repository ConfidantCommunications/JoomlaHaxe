/**
 * @package     Joomla.Legacy
 * @subpackage  Request
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

//defined('JPATH_PLATFORM') or die;

/**
 * Create the request global object
 */
//GLOBALS.set('_JREQUEST') = [];

/**
 * Set the available masks for cleaning variables
 
static inline public var JREQUEST_NOTRIM    = 1;
static inline public var JREQUEST_ALLOWRAW  = 2;
static inline public var JREQUEST_ALLOWHTML = 4;

JLog.add('JRequest is deprecated.', JLog.WARNING, 'deprecated');
*/
/**
 * JRequest Class
 *
 * This class serves to provide the Joomla Platform with a common interface to access
 * request variables.  This includes $_POST, $_GET, and naturally $_REQUEST.  Variables
 * can be passed through an input filter to avoid injection or returned raw.
 *
 * @since       11.1
 * @deprecated  12.1 (Platform) & 4.0 (CMS) - Get the JInput object from the application instead
 */
import php.NativeArray;
extern class JRequest
{
	/**
	 * Gets the full request path.
	 * @since   11.1
	 * @deprecated   12.1
	 */
	public static function getUri() : String;

	/**
	 * Gets the request method.
	 * @since   11.1
	 * @deprecated   12.1 Use JInput::getMethod() instead
	 */
	public static function getMethod() : String;

	/**
	 * Fetches and returns a given variable.
	 * The default behaviour is fetching variables depending on the
	 * current request method: GET and HEAD will result in returning
	 * an entry from $_GET, POST and PUT will result in returning an
	 * entry from $_POST.
	 * You can force the source by setting the $hash parameter:
	 * post    $_POST
	 * get     $_GET
	 * files   $_FILES
	 * cookie  $_COOKIE
	 * env     $_ENV
	 * server  $_SERVER
	 * method  via current $_SERVER['REQUEST_METHOD']
	 * default $_REQUEST
	 * @param   name     Variable name.
	 * @param   default  Default value if the variable does not exist.
	 * @param   hash     Where the var should come from (POST, GET, FILES, COOKIE, METHOD).
	 * @param   type     Return type for the variable, for valid values see {@link JFilterInput::clean()}.
	 * @param   mask     Filter mask for the variable.
	 * @return  mixed  Requested variable.
	 * @since   11.1
	 * @deprecated   12.1  Use JInput::Get
	 */
	public static function getVar(name:String, defaultStr:String=null, hash:String='default', type:String='none', mask:Int=0) : Dynamic;

	public static function getInt(name:String, defaultInt:Int=0, hash:String='default') : Int;

	public static function getUInt(name:String, defaultUInt:UInt=0, hash:String='default') : UInt;

	public static function getFloat(name:String, defaultFloat:Float=0.0, hash:String='default') : Float;

	public static function getBool(name:String, defaultBool:Bool=false, hash:String='default') : Bool;

	public static function getWord(name:String, defaultStr:String='', hash:String='default') : String;
 
	public static function getCmd(name:String, defaultStr:String='', hash:String='default') : String;
 
	public static function getString(name:String, defaultStr:String='', hash:String='default', mask:Float=0) : String;

	/**
	 * Set a variable in one of the request variables.
	 * @param   name       Name
	 * @param   value      Value
	 * @param   hash       Hash
	 * @param   overwrite  Boolean
	 * @return  string   Previous value
	 * @since   11.1
	 * @deprecated   12.1
	 */
	public static function setVar(name:String, value:String=null, ?hash:String='method', ?overwrite:Bool=true) : String;

	/**
	 * Fetches and returns a request array.
	 * The default behaviour is fetching variables depending on the
	 * current request method: GET and HEAD will result in returning
	 * $_GET, POST and PUT will result in returning $_POST.
	 * You can force the source by setting the $hash parameter:
	 * post     $_POST
	 * get      $_GET
	 * files    $_FILES
	 * cookie   $_COOKIE
	 * env      $_ENV
	 * server   $_SERVER
	 * method   via current $_SERVER['REQUEST_METHOD']
	 * default  $_REQUEST
	 * @param   hash  to get (POST, GET, FILES, METHOD).
	 * @param   mask  Filter mask for the variable.
	 * @return  mixed    Request hash.
	 * @deprecated  12.1   User JInput::get
	 * @see         JInput
	 * @since       11.1
	 */
	public static function get(hash:String='default', mask:Int=0) : Dynamic;

	/**
	 * Sets a request variable.
	 * @param   array      An associative array of key-value pairs.
	 * @param   hash       The request variable to set (POST, GET, FILES, METHOD).
	 * @param   overwrite  If true and an existing key is found, the value is overwritten, otherwise it is ignored.
	 * @deprecated  12.1  Use JInput::set()
	 * @see         JInput::set()
	 * @since       11.1
	 */
	public static function set(array:NativeArray, hash:String='default', overwrite:Bool=true) : Void;

	/**
	 * Checks for a form token in the request.
	 * Use in conjunction with JHtml::_('form.token').
	 * @param   method  The request method in which to look for the token key.
	 * @return  boolean  True if found and valid, false otherwise.
	 * @deprecated  12.1 Use JSession::checkToken() instead. Note that 'default' has to become 'request'.
	 * @since       11.1
	 */
	public static function checkToken(method:String='post') : Bool;
}
