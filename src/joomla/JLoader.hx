/**
 * @package    Joomla.Platform
 *
 * @copyright  Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */


/**
 * Static class to handle loading of libraries.
 *
 * @package  Joomla.Platform
 * @since    11.1
 */
extern class JLoader
{

	/**
	 * Method to discover classes of a given type in a given path.
	 * @param   classPrefix  The class name prefix to use for discovery.
	 * @param   parentPath   Full path to the parent folder for the classes to discover.
	 * @param   force        True to overwrite the autoload path value for the class if it already exists.
	 * @param   recurse      Recurse through all child directories as well as the parent path.
	 * @since   11.1
	 */
	public static function discover(classPrefix:String, parentPath:String, force:Bool=true, recurse:Bool=false) : Void;

	/**
	 * Method to get the list of registered classes and their respective file paths for the autoloader.
	 * @return  array  The array of class => path values for the autoloader.
	 * @since   11.1
	 */
	public static function getClassList() : NativeArray;

	/**
	 * Method to get the list of registered namespaces.
	 * @return  array  The array of namespace => path values for the autoloader.
	 * @since   12.3
	 */
	public static function getNamespaces() : NativeArray;

	/**
	 * Loads a class from specified directories.
	 * @param   key   The class name to look for (dot notation).
	 * @param   base  Search this directory for the class.
	 * @return  boolean  True on success.
	 * @since   11.1
	 */
	//public static function import(key:String, base:String=null) : Bool;

	/**
	 * Load the file for a class.
	 * @param   class  The class to be loaded.
	 * @return  boolean  True on success
	 * @since   11.1
	 */
	public static function load(classAllan:String) : Bool;

	/**
	 * Directly register a class to the autoload list.
	 * @param   class  The class name to register.
	 * @param   path   Full path to the file that holds the class to register.
	 * @param   force  True to overwrite the autoload path value for the class if it already exists.
	 * @since   11.1
	 */
	public static function register(classAllan:String, path:String, force:Bool=true) : Void;

	/**
	 * Register a class prefix with lookup path.  This will allow developers to register library
	 * packages with different class prefixes to the system autoloader.  More than one lookup path
	 * may be registered for the same class prefix, but if this method is called with the reset flag
	 * set to true then any registered lookups for the given prefix will be overwritten with the current
	 * lookup path. When loaded, prefix paths are searched in a "last in, first out" order.
	 * @param   prefix   The class prefix to register.
	 * @param   path     Absolute file path to the library root where classes with the given prefix can be found.
	 * @param   reset    True to reset the prefix with only the given lookup path.
	 * @param   prepend  If true, push the path to the beginning of the prefix lookup paths array.
	 * @throws  RuntimeException
	 * @since   12.1
	 */
	public static function registerPrefix(prefix:String, path:String, reset:Bool=false, prepend:Bool=false) : Void;

	/**
	 * Offers the ability for "just in time" usage of `class_alias()`.
	 * You cannot overwrite an existing alias.
	 * @param   alias     The alias name to register.
	 * @param   original  The original class to alias.
	 * @return  boolean  True if registration was successful. False if the alias already exists.
	 * @since   3.2
	 */
	public static function registerAlias(alias:String, original:String) : Bool;

	/**
	 * Register a namespace to the autoloader. When loaded, namespace paths are searched in a "last in, first out" order.
	 * @param   namespace  A case sensitive Namespace to register.
	 * @param   path       A case sensitive absolute file path to the library root where classes of the given namespace can be found.
	 * @param   reset      True to reset the namespace with only the given lookup path.
	 * @param   prepend    If true, push the path to the beginning of the namespace lookup paths array.
	 * @throws  RuntimeException
	 * @since   12.3
	 */
	public static function registerNamespace(namespace:String, path:String, reset:Bool=false, prepend:Bool=false) : Void;

	/**
	 * Method to setup the autoloaders for the Joomla Platform.
	 * Since the SPL autoloaders are called in a queue we will add our explicit
	 * class-registration based loader first, then fall back on the autoloader based on conventions.
	 * This will allow people to register a class in a specific location and override platform libraries
	 * as was previously possible.
	 * @param   enablePsr       True to enable autoloading based on PSR-0.
	 * @param   enablePrefixes  True to enable prefix based class loading (needed to auto load the Joomla core).
	 * @param   enableClasses   True to enable class map based class loading (needed to auto load the Joomla core).
	 * @since   12.3
	 */
	public static function setup(enablePsr:Bool=true, enablePrefixes:Bool=true, enableClasses:Bool=true) : Void;

	/**
	 * Method to autoload classes that are namespaced to the PSR-0 standard.
	 * @param   class  The fully qualified class name to autoload.
	 * @return  boolean  True on success, false otherwise.
	 * @since   13.1
	 */
	public static function loadByPsr0(classAllan:String) : Bool;

	/**
	 * Method to autoload classes that have been aliased using the registerAlias method.
	 * @param   class  The fully qualified class name to autoload.
	 * @return  boolean  True on success, false otherwise.
	 * @since   3.2
	 */
	public static function loadByAlias(classAllan:String) : Bool;

	/**
	 * Applies a class alias for an already loaded class, if a class alias was created for it.
	 * @param   class  We'll look for and register aliases for this (real) class name
	 * @since   3.4
	 */
	public static function applyAliasFor(classAllan:String) : Void;
}

/**
 * Global application exit.
 * This function provides a single exit point for the platform.
 * @param   message  Exit code or string. Defaults to zero.
 * @codeCoverageIgnore
 * @since   11.1
 */
public function jexit(message:Dynamic=0) : Void; //Allan

/**
 * Intelligent file importer.
 * @param   path  A dot syntax path.
 * @return  boolean  True on success.
 * @since   11.1
 */
public function jimport(path:String) : Bool;
