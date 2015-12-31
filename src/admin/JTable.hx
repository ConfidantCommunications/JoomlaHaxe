package;
import php.
extern class JTable extends JObject 
{

	/**
	 * Object constructor to set table and key fields.  In most cases this will
	 * be overridden by child classes to explicitly set the table and key fields
	 * for a particular database table.
	 * @param   table  Name of the table to model.
	 * @param   key    Name of the primary key field in the table or array of field names that compose the primary key.
	 * @param   db     JDatabaseDriver object.
	 * @since   11.1
	 */
	public function __construct(table:String, key:Dynamic, db:JDatabaseDriver):Void;

	/**
	 * Implement JObservableInterface:
	 * Adds an observer to this instance.
	 * This method will be called fron the constructor of classes implementing JObserverInterface
	 * which is instanciated by the constructor of $this with JObserverMapper::attachAllObservers($this)
	 * @param   JObserverInterface|JTableObserver  $observer  The observer object
	 * @since   3.1.2
	 */
	public function attachObserver(observer:JObserverInterface) : Void;

	/**
	 * Gets the instance of the observer of class $observerClass
	 * @param   observerClass  The observer class-name to return the object of
	 * @return  JTableObserver|null
	 * @since   3.1.2
	 */
	public function getObserverOfClass(observerClass:String) : JTableObserver;

	/**
	 * Get the columns from database table.
	 * @return  mixed  An array of the field names, or false if an error occurs.
	 * @since   11.1
	 * @throws  UnexpectedValueException
	 */
	public function getFields() : Dynamic;

	/**
	 * Static method to get an instance of a JTable class if it can be found in
	 * the table include paths.  To add include paths for searching for JTable
	 * classes see JTable::addIncludePath().
	 * @param   type    The type (name) of the JTable class to get an instance of.
	 * @param   prefix  An optional prefix for the table class name.
	 * @param   config  An optional array of configuration values for the JTable object.
	 * @return  JTable|boolean   A JTable object if found or boolean false on failure.
	 * @link    https://docs.joomla.org/JTable/getInstance
	 * @since   11.1
	 */
	public static function getInstance(type:String, prefix:String='JTable', config:NativeArray=untyped __php__("array()")) : JTable;

	/**
	 * Add a filesystem path where JTable should search for table class files.
	 * You may either pass a string or an array of paths.
	 * @param   path  A filesystem path or array of filesystem paths to add.
	 * @return  array  An array of filesystem paths to find JTable classes in.
	 * @link    https://docs.joomla.org/JTable/addIncludePath
	 * @since   11.1
	 */
	public static function addIncludePath(path:Dynamic=null) : NativeArray;

	/**
	 * Method to append the primary keys for this table to a query.
	 * @param   query  A query object to append.
	 * @param   pk     Optional primary key parameter.
	 * @since   12.3
	 */
	public function appendPrimaryKeys(query:JDatabaseQuery, pk:Dynamic=null) : Void;

	/**
	 * Method to get the database table name for the class.
	 * @return  string  The name of the database table being modeled.
	 * @since   11.1
	 * @link    https://docs.joomla.org/JTable/getTableName
	 */
	public function getTableName() : String;

	/**
	 * Method to get the primary key field name for the table.
	 * @param   multiple  True to return all primary keys (as an array) or false to return just the first one (as a string).
	 * @return  mixed  Array of primary key field names or string containing the first primary key field.
	 * @link    https://docs.joomla.org/JTable/getKeyName
	 * @since   11.1
	 */
	public function getKeyName(multiple:Bool=false) : Dynamic;

	/**
	 * Method to get the JDatabaseDriver object.
	 * @return  JDatabaseDriver  The internal database driver object.
	 * @link    https://docs.joomla.org/JTable/getDBO
	 * @since   11.1
	 */
	public function getDbo() : JDatabaseDriver;

	/**
	 * Method to set the JDatabaseDriver object.
	 * @param   db  A JDatabaseDriver object to be used by the table object.
	 * @return  boolean  True on success.
	 * @link    https://docs.joomla.org/JTable/setDBO
	 * @since   11.1
	 */
	public function setDbo(db:JDatabaseDriver) : Bool;

	/**
	 * Method to set rules for the record.
	 * @param   input  A JAccessRules object, JSON string, or array.
	 * @since   11.1
	 */
	public function setRules(input:Dynamic) : Void;

	/**
	 * Method to get the rules for the record.
	 * @return  JAccessRules object
	 * @since   11.1
	 */
	public function getRules() : JAccessRules;

	/**
	 * Method to reset class properties to the defaults set in the class
	 * definition. It will ignore the primary key as well as any private class
	 * properties (except $_errors).
	 * @link    https://docs.joomla.org/JTable/reset
	 * @since   11.1
	 */
	public function reset() : Void;

	/**
	 * Method to bind an associative array or object to the JTable instance.This
	 * method only binds properties that are publicly accessible and optionally
	 * takes an array of properties to ignore when binding.
	 * @param   src     An associative array or object to bind to the JTable instance.
	 * @param   ignore  An optional array or space separated list of properties to ignore while binding.
	 * @return  boolean  True on success.
	 * @since   11.1
	 * @throws  InvalidArgumentException
	 */
	public function bind(src:Dynamic, ignore:Dynamic=untyped __php__("array()")) : Bool;

	/**
	 * Method to load a row from the database by primary key and bind the fields
	 * to the JTable instance properties.
	 * @param   keys   An optional primary key value to load the row by, or an array of fields to match.  If not
	 *                           set the instance property value is used.
	 * @param   reset  True to reset the default values before loading the new row.
	 * @return  boolean  True if successful. False if row not found.
	 * @link    https://docs.joomla.org/JTable/load
	 * @since   11.1
	 * @throws  InvalidArgumentException
	 * @throws  RuntimeException
	 * @throws  UnexpectedValueException
	 */
	public function load(keys:Dynamic=null, reset:Bool=true) : Bool;

	/**
	 * Method to perform sanity checks on the JTable instance properties to ensure
	 * they are safe to store in the database.  Child classes should override this
	 * method to make sure the data they are storing in the database is safe and
	 * as expected before storage.
	 * @return  boolean  True if the instance is sane and able to be stored in the database.
	 * @link    https://docs.joomla.org/JTable/check
	 * @since   11.1
	 */
	public function check() : Bool;

	/**
	 * Method to store a row in the database from the JTable instance properties.
	 * If a primary key value is set the row with that primary key value will be
	 * updated with the instance property values.  If no primary key value is set
	 * a new row will be inserted into the database with the properties from the
	 * JTable instance.
	 * @param   updateNulls  True to update fields even if they are null.
	 * @return  boolean  True on success.
	 * @link    https://docs.joomla.org/JTable/store
	 * @since   11.1
	 */
	public function store(updateNulls:Bool=false) : Bool;

	/**
	 * Method to provide a shortcut to binding, checking and storing a JTable
	 * instance to the database table.  The method will check a row in once the
	 * data has been stored and if an ordering filter is present will attempt to
	 * reorder the table rows based on the filter.  The ordering filter is an instance
	 * property name.  The rows that will be reordered are those whose value matches
	 * the JTable instance for the property specified.
	 * @param   src             An associative array or object to bind to the JTable instance.
	 * @param   orderingFilter  Filter for the order updating
	 * @param   ignore          An optional array or space separated list of properties
	 *                                   to ignore while binding.
	 * @return  boolean  True on success.
	 * @link    https://docs.joomla.org/JTable/save
	 * @since   11.1
	 */
	public function save(src:Dynamic, orderingFilter:String='', ignore:Dynamic='') : Bool;

	/**
	 * Method to delete a row from the database table by primary key value.
	 * @param   pk  An optional primary key value to delete.  If not set the instance property value is used.
	 * @return  boolean  True on success.
	 * @link    https://docs.joomla.org/JTable/delete
	 * @since   11.1
	 * @throws  UnexpectedValueException
	 */
	public function delete(pk:Dynamic=null) : Bool;

	/**
	 * Method to check a row out if the necessary properties/fields exist.  To
	 * prevent race conditions while editing rows in a database, a row can be
	 * checked out if the fields 'checked_out' and 'checked_out_time' are available.
	 * While a row is checked out, any attempt to store the row by a user other
	 * than the one who checked the row out should be held until the row is checked
	 * in again.
	 * @param   userId  The Id of the user checking out the row.
	 * @param   pk      An optional primary key value to check out.  If not set
	 *                            the instance property value is used.
	 * @return  boolean  True on success.
	 * @link    https://docs.joomla.org/JTable/checkOut
	 * @since   11.1
	 * @throws  UnexpectedValueException
	 */
	public function checkOut(userId:Int, pk:Dynamic=null) : Bool;

	/**
	 * Method to check a row in if the necessary properties/fields exist.  Checking
	 * a row in will allow other users the ability to edit the row.
	 * @param   pk  An optional primary key value to check out.  If not set the instance property value is used.
	 * @return  boolean  True on success.
	 * @link    https://docs.joomla.org/JTable/checkIn
	 * @since   11.1
	 * @throws  UnexpectedValueException
	 */
	public function checkIn(pk:Dynamic=null) : Bool;

	/**
	 * Validate that the primary key has been set.
	 * @return  boolean  True if the primary key(s) have been set.
	 * @since   12.3
	 */
	public function hasPrimaryKey() : Bool;

	/**
	 * Method to increment the hits for a row if the necessary property/field exists.
	 * @param   pk  An optional primary key value to increment. If not set the instance property value is used.
	 * @return  boolean  True on success.
	 * @link    https://docs.joomla.org/JTable/hit
	 * @since   11.1
	 * @throws  UnexpectedValueException
	 */
	public function hit(pk:Dynamic=null) : Bool;

	/**
	 * Method to determine if a row is checked out and therefore uneditable by
	 * a user. If the row is checked out by the same user, then it is considered
	 * not checked out -- as the user can still edit it.
	 * @param   with     The userid to preform the match with, if an item is checked
	 *                             out by this user the function will return false.
	 * @param   against  The userid to perform the match against when the function
	 *                             is used as a static function.
	 * @return  boolean  True if checked out.
	 * @link    https://docs.joomla.org/JTable/isCheckedOut
	 * @since   11.1
	 */
	public function isCheckedOut(with:Int=0, against:Int=null) : Bool;

	/**
	 * Method to get the next ordering value for a group of rows defined by an SQL WHERE clause.
	 * This is useful for placing a new item last in a group of items in the table.
	 * @param   where  WHERE clause to use for selecting the MAX(ordering) for the table.
	 * @return  mixed  Boolean false an failure or the next ordering value as an integer.
	 * @link    https://docs.joomla.org/JTable/getNextOrder
	 * @since   11.1
	 * @throws  UnexpectedValueException
	 */
	public function getNextOrder(where:String='') : Dynamic;

	/**
	 * Get the primary key values for this table using passed in values as a default.
	 * @param   keys  Optional primary key values to use.
	 * @return  array  An array of primary key names and values.
	 * @since   12.3
	 */
	public function getPrimaryKey() : NativeArray;

	/**
	 * Method to compact the ordering values of rows in a group of rows
	 * defined by an SQL WHERE clause.
	 * @param   where  WHERE clause to use for limiting the selection of rows to compact the ordering values.
	 * @return  mixed  Boolean  True on success.
	 * @link    https://docs.joomla.org/JTable/reorder
	 * @since   11.1
	 * @throws  UnexpectedValueException
	 */
	public function reorder(where:String='') : Dynamic;

	/**
	 * Method to move a row in the ordering sequence of a group of rows defined by an SQL WHERE clause.
	 * Negative numbers move the row up in the sequence and positive numbers move it down.
	 * @param   delta  The direction and magnitude to move the row in the ordering sequence.
	 * @param   where  WHERE clause to use for limiting the selection of rows to compact the
	 *                           ordering values.
	 * @return  mixed    Boolean  True on success.
	 * @link    https://docs.joomla.org/JTable/move
	 * @since   11.1
	 * @throws  UnexpectedValueException
	 */
	public function move(delta:Int, where:String='') : Dynamic;

	/**
	 * Method to set the publishing state for a row or list of rows in the database
	 * table.  The method respects checked out rows by other users and will attempt
	 * to checkin rows that it can after adjustments are made.
	 * @param   pks     An optional array of primary key values to update.
	 *                            If not set the instance property value is used.
	 * @param   state   The publishing state. eg. [0 = unpublished, 1 = published]
	 * @param   userId  The user id of the user performing the operation.
	 * @return  boolean  True on success; false if $pks is empty.
	 * @link    https://docs.joomla.org/JTable/publish
	 * @since   11.1
	 */
	public function publish(pks:Dynamic=null, state:Int=1, userId:Int=0) : Bool;

	/**
	 * Method to return the real name of a "special" column such as ordering, hits, published
	 * etc etc. In this way you are free to follow your db naming convention and use the
	 * built in Joomla functions.
	 * @param   column  Name of the "special" column (ie ordering, hits)
	 * @return  string  The string that identify the special
	 * @since   3.4
	 */
	public function getColumnAlias(column:String) : String;

	/**
	 * Method to register a column alias for a "special" column.
	 * @param   column       The "special" column (ie ordering)
	 * @param   columnAlias  The real column name (ie foo_ordering)
	 * @since   3.4
	 */
	public function setColumnAlias(column:String, columnAlias:String) : Void;
}
