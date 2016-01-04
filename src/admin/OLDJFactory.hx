package;
extern class JFactory
{
	/**
	 * Global application object
	 * @since  11.1
	 */
	public static var application : JApplicationCms = null;

	/**
	 * Global cache object
	 * @since  11.1
	 */
	public static var cache : JCache = null;

	/**
	 * Global configuraiton object
	 * @since  11.1
	 */
	public static var config : JConfig = null;

	/**
	 * Container for JDate instances
	 * @since  11.3
	 */
	public static var dates : NativeArray = [];

	/**
	 * Global session object
	 * @since  11.1
	 */
	public static var session : JSession = null;

	/**
	 * Global language object
	 * @since  11.1
	 */
	public static var language : JLanguage = null;

	/**
	 * Global document object
	 * @since  11.1
	 */
	public static var document : JDocument = null;

	/**
	 * Global ACL object
	 * @since  11.1
	 * @deprecated  13.3 (Platform) & 4.0 (CMS)
	 */
	public static var acl : JAccess = null;

	/**
	 * Global database object
	 * @since  11.1
	 */
	public static var database : JDatabaseDriver = null;

	/**
	 * Global mailer object
	 * @since  11.1
	 */
	public static var mailer : JMail = null;

	/**
	 * Get a application object.
	 * Returns the global {@link JApplicationCms} object, only creating it if it doesn't already exist.
	 * @param   id      A client identifier or name.
	 * @param   config  An optional associative array of configuration settings.
	 * @param   prefix  Application prefix
	 * @return  JApplicationCms object
	 * @see     JApplication
	 * @since   11.1
	 * @throws  Exception
	 */
	public static function getApplication(id:Dynamic=null, , prefix:String='J') : JApplicationCms;

	/**
	 * Get a configuration object
	 * Returns the global {@link JConfig} object, only creating it if it doesn't already exist.
	 * @param   file       The path to the configuration file
	 * @param   type       The type of the configuration file
	 * @param   namespace  The namespace of the configuration file
	 * @see     Registry
	 * @since   11.1
	 */
	public static function getConfig(file:String=null, type:String='PHP', namespace:String='') : Registry;

	/**
	 * Get a session object.
	 * Returns the global {@link JSession} object, only creating it if it doesn't already exist.
	 * @param   options  An array containing session options
	 * @return  JSession object
	 * @see     JSession
	 * @since   11.1
	 */
	public static function getSession() : JSession;

	/**
	 * Get a language object.
	 * Returns the global {@link JLanguage} object, only creating it if it doesn't already exist.
	 * @return  JLanguage object
	 * @see     JLanguage
	 * @since   11.1
	 */
	public static function getLanguage() : JLanguage;

	/**
	 * Get a document object.
	 * Returns the global {@link JDocument} object, only creating it if it doesn't already exist.
	 * @return  JDocument object
	 * @see     JDocument
	 * @since   11.1
	 */
	public static function getDocument() : JDocument;

	/**
	 * Get an user object.
	 * Returns the global {@link JUser} object, only creating it if it doesn't already exist.
	 * @param   id  The user to load - Can be an integer or string - If string, it is converted to ID automatically.
	 * @return  JUser object
	 * @see     JUser
	 * @since   11.1
	 */
	public static function getUser(id:Int=null) : JUser;

	/**
	 * Get a cache object
	 * Returns the global {@link JCache} object
	 * @param   group    The cache group name
	 * @param   handler  The handler to use
	 * @param   storage  The storage method
	 * @return  JCacheController object
	 * @see     JCache
	 * @since   11.1
	 */
	public static function getCache(group:String='', handler:String='callback', storage:String=null) : JCacheController;

	/**
	 * Get an authorization object
	 * Returns the global {@link JAccess} object, only creating it
	 * if it doesn't already exist.
	 * @return  JAccess object
	 * @deprecated  13.3 (Platform) & 4.0 (CMS) - Use JAccess directly.
	 */
	public static function getAcl() : JAccess;

	/**
	 * Get a database object.
	 * Returns the global {@link JDatabaseDriver} object, only creating it if it doesn't already exist.
	 * @see     JDatabaseDriver
	 * @since   11.1
	 */
	public static function getDbo() : JDatabaseDriver;

	/**
	 * Get a mailer object.
	 * Returns the global {@link JMail} object, only creating it if it doesn't already exist.
	 * @return  JMail object
	 * @see     JMail
	 * @since   11.1
	 */
	public static function getMailer() : JMail;

	/**
	 * Get a parsed XML Feed Source
	 * @param   url         Url for feed source.
	 * @param   cache_time  Time to cache feed for (using internal cache mechanism).
	 * @return  mixed  SimplePie parsed object on success, false on failure.
	 * @since   11.1
	 * @throws  BadMethodCallException
	 * @deprecated  4.0  Use directly JFeedFactory or supply SimplePie instead. Mehod will be proxied to JFeedFactory beginning in 3.2
	 */
	public static function getFeedParser(url:String, cache_time:Int=0) : Dynamic;

	/**
	 * Reads a XML file.
	 * @param   data    Full path and file name.
	 * @param   isFile  true to load a file or false to load a string.
	 * @return  mixed    JXMLElement or SimpleXMLElement on success or false on error.
	 * @see     JXMLElement
	 * @since   11.1
	 * @note    When JXMLElement is not present a SimpleXMLElement will be returned.
	 * @deprecated  13.3 (Platform) & 4.0 (CMS) - Use SimpleXML directly.
	 */
	public static function getXml(data:String, isFile:Bool=true) : Dynamic;

	/**
	 * Get an editor object.
	 * @param   editor  The editor to load, depends on the editor plugins that are installed
	 * @return  JEditor instance of JEditor
	 * @since   11.1
	 * @throws  BadMethodCallException
	 * @deprecated 12.3 (Platform) & 4.0 (CMS) - Use JEditor directly
	 */
	public static function getEditor(editor:String=null) : JEditor;

	/**
	 * Return a reference to the {@link JUri} object
	 * @param   uri  Uri name.
	 * @return  JUri object
	 * @see     JUri
	 * @since   11.1
	 * @deprecated  13.3 (Platform) & 4.0 (CMS) - Use JUri directly.
	 */
	public static function getUri(uri:String='SERVER') : JUri;

	/**
	 * Return the {@link JDate} object
	 * @param   time      The initial time for the JDate object
	 * @param   tzOffset  The timezone offset.
	 * @return  JDate object
	 * @see     JDate
	 * @since   11.1
	 */
	public static function getDate(time:Dynamic='now', tzOffset:Dynamic=null) : JDate;

	/**
	 * Creates a new stream object with appropriate prefix
	 * @param   use_prefix   Prefix the connections for writing
	 * @param   use_network  Use network if available for writing; use false to disable (e.g. FTP, SCP)
	 * @param   ua           UA User agent to use
	 * @param   uamask       User agent masking (prefix Mozilla)
	 * @see     JStream
	 * @since   11.1
	 */
	public static function getStream(use_prefix:Bool=true, use_network:Bool=true, ua:String=null, uamask:Bool=false) : JStream;
}
