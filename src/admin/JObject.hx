import php.Lib;
import php.NativeArray;
extern class JObject
{

	/**
	 * Class constructor, overridden in descendant classes.
	 * @param   properties  Either and associative array or another
	 *                              object to set the initial properties of the object.
	 * @since   11.1
	 */
	public function __construct(properties:Dynamic=null):Void;

	/**
	 * Magic method to convert the object to a string gracefully.
	 * @return  string  The classname.
	 * @since   11.1
	 * @deprecated 12.3  Classes should provide their own __toString() implementation.
	 */
	public function __toString() : String;

	/**
	 * Sets a default value if not already assigned
	 * @param   property  The name of the property.
	 * @param   default   The default value.
	 * @since   11.1
	 */
	public function def(property:String, dflt:Dynamic=null) : Dynamic;

	/**
	 * Returns a property of the object or the default value if the property is not set.
	 * @param   property  The name of the property.
	 * @param   default   The default value.
	 * @return  mixed    The value of the property.
	 * @since   11.1
	 * @see     JObject::getProperties()
	 */
	public function get(property:String, dflt:Dynamic=null) : Dynamic;

	/**
	 * Returns an associative array of object properties.
	 * @param   public  If true, returns only the public properties.
	 * @since   11.1
	 * @see     JObject::get()
	 */
	public function getProperties(pblc:Bool=true) : NativeArray;

	/**
	 * Get the most recent error message.
	 * @param   i         Option error index.
	 * @param   toString  Indicates if JError objects should return their error message.
	 * @return  string   Error message
	 * @since   11.1
	 * @see     JError
	 * @deprecated 12.3  JError has been deprecated
	 */
	public function getError(i:Int=null, toString:Bool=true) : String;

	/**
	 * Return all errors, if any.
	 * @return  array  Array of error messages or JErrors.
	 * @since   11.1
	 * @see     JError
	 * @deprecated 12.3  JError has been deprecated
	 */
	public function getErrors() : NativeArray;

	/**
	 * Modifies a property of the object, creating it if it does not already exist.
	 * @param   property  The name of the property.
	 * @param   value     The value of the property to set.
	 * @return  mixed  Previous value of the property.
	 * @since   11.1
	 */
	public function set(property:String, value:Dynamic=null) : Dynamic;

	/**
	 * Set the object properties based on a named array/hash.
	 * @param   properties  Either an associative array or another object.
	 * @since   11.1
	 * @see     JObject::set()
	 */
	public function setProperties(properties:Dynamic) : Bool;

	/**
	 * Add an error message.
	 * @param   error  Error message.
	 * @since   11.1
	 * @see     JError
	 * @deprecated 12.3  JError has been deprecated
	 */
	public function setError(error:String) : Void;
}
