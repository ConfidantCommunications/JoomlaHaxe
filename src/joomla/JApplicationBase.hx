package joomla;
/**
 * @package     Joomla.Platform
 * @subpackage  Application
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

//defined('JPATH_PLATFORM') or die;

//use Joomla\Application\AbstractApplication;
//use Joomla\Registry\Registry;

/**
 * Joomla Platform Base Application Class
 *
 * @property-read  JInput  $input  The application input object
 *
 * @since  12.1
 */
extern class JApplicationBase
{

	/**
	 * Class constructor.
	 * @param   input   An optional argument to provide dependency injection for the application's
	 *                             input object.  If the argument is a JInput object that object will become
	 *                             the application's input object, otherwise a default input object is created.
	 * @param   config  An optional argument to provide dependency injection for the application's
	 *                             config object.  If the argument is a Registry object that object will become
	 *                             the application's config object, otherwise a default config object is created.
	 * @since   12.1
	 */
	public function __construct(input:Dynamic=null, config:Dynamic=null):Void;

	/**
	 * Get the application identity.
	 * @return  mixed  A JUser object or null.
	 * @since   12.1
	 */
	public function getIdentity() : Dynamic;

	/**
	 * Registers a handler to a particular event group.
	 * @param   event    The event name.
	 * @param   handler  The handler, a function or an instance of a event object.
	 * @return  JApplicationBase  The application to allow chaining.
	 * @since   12.1
	 */
	//Allan public function registerEvent(event:String, handler:callable) : JApplicationBase;

	/**
	 * Calls all handlers associated with an event group.
	 * @param   event  The event name.
	 * @param   args   An array of arguments (optional).
	 * @return  array   An array of results from each function call, or null if no dispatcher is defined.
	 * @since   12.1
	 */
	public function triggerEvent(event:String) : Dynamic;

	/**
	 * Allows the application to load a custom or default dispatcher.
	 * The logic and options for creating this object are adequately generic for default cases
	 * but for many applications it will make sense to override this method and create event
	 * dispatchers, if required, based on more specific needs.
	 * @param   dispatcher  An optional dispatcher object. If omitted, the factory dispatcher is created.
	 * @return  JApplicationBase This method is chainable.
	 * @since   12.1
	 */
	public function loadDispatcher(dispatcher:Dynamic=null) : JApplicationBase;

	/**
	 * Allows the application to load a custom or default identity.
	 * The logic and options for creating this object are adequately generic for default cases
	 * but for many applications it will make sense to override this method and create an identity,
	 * if required, based on more specific needs.
	 * @param   identity  An optional identity object. If omitted, the factory user is created.
	 * @return  JApplicationBase This method is chainable.
	 * @since   12.1
	 */
	public function loadIdentity(identity:Dynamic=null) : JApplicationBase;

}
