package;
extern class JToolbarHelper
{
	/**
	 * Title cell.
	 * For the title and toolbar to be rendered correctly,
	 * this title fucntion must be called before the starttable function and the toolbars icons
	 * this is due to the nature of how the css has been used to postion the title in respect to the toolbar.
	 * @param   title  The title.
	 * @param   icon   The space-separated names of the image.
	 * @since   1.5
	 */
	public static function title(title:String, icon:String='generic.png') : Void;

	/**
	 * Writes a spacer cell.
	 * @param   width  The width for the cell
	 * @since   1.5
	 */
	public static function spacer(width:String='') : Void;

	/**
	 * Writes a divider between menu buttons
	 * @since   1.5
	 */
	public static function divider() : Void;

	/**
	 * Writes a custom option and task button for the button bar.
	 * @param   task        The task to perform (picked up by the switch($task) blocks.
	 * @param   icon        The image to display.
	 * @param   iconOver    The image to display when moused over.
	 * @param   alt         The alt text for the icon image.
	 * @param   listSelect  True if required to check that a standard list item is checked.
	 * @since   1.5
	 */
	public static function custom(task:String='', icon:String='', iconOver:String='', alt:String='', listSelect:Bool=true) : Void;

	/**
	 * Writes a preview button for a given option (opens a popup window).
	 * @param   url            The name of the popup file (excluding the file extension)
	 * @param   updateEditors  Unused
	 * @since   1.5
	 */
	public static function preview(url:String='', updateEditors:Bool=false) : Void;

	/**
	 * Writes a preview button for a given option (opens a popup window).
	 * @param   ref        The name of the popup file (excluding the file extension for an xml file).
	 * @param   com        Use the help file in the component directory.
	 * @param   override   Use this URL instead of any other
	 * @param   component  Name of component to get Help (null for current component)
	 * @since   1.5
	 */
	public static function help(ref:String, com:Bool=false, or:String=null, component:String=null) : Void;

	/**
	 * Writes a cancel button that will go back to the previous page without doing
	 * any other operation.
	 * @param   alt   Alternative text.
	 * @param   href  URL of the href attribute.
	 * @since   1.5
	 */
	public static function back(alt:String='JTOOLBAR_BACK', href:String='javascript:history.back();') : Void;

	/**
	 * Writes a media_manager button.
	 * @param   directory  The sub-directory to upload the media to.
	 * @param   alt        An override for the alt text.
	 * @since   1.5
	 */
	public static function media_manager(directory:String='', alt:String='JTOOLBAR_UPLOAD') : Void;

	/**
	 * Writes a common 'default' button for a record.
	 * @param   task  An override for the task.
	 * @param   alt   An override for the alt text.
	 * @since   1.5
	 */
	public static function makeDefault(task:String='default', alt:String='JTOOLBAR_DEFAULT') : Void;

	/**
	 * Writes a common 'assign' button for a record.
	 * @param   task  An override for the task.
	 * @param   alt   An override for the alt text.
	 * @since   1.5
	 */
	public static function assign(task:String='assign', alt:String='JTOOLBAR_ASSIGN') : Void;

	/**
	 * Writes the common 'new' icon for the button bar.
	 * @param   task   An override for the task.
	 * @param   alt    An override for the alt text.
	 * @param   check  True if required to check that a standard list item is checked.
	 * @since   1.5
	 */
	public static function addNew(task:String='add', alt:String='JTOOLBAR_NEW', check:Bool=false) : Void;

	/**
	 * Writes a common 'publish' button.
	 * @param   task   An override for the task.
	 * @param   alt    An override for the alt text.
	 * @param   check  True if required to check that a standard list item is checked.
	 * @since   1.5
	 */
	public static function publish(task:String='publish', alt:String='JTOOLBAR_PUBLISH', check:Bool=false) : Void;

	/**
	 * Writes a common 'publish' button for a list of records.
	 * @param   task  An override for the task.
	 * @param   alt   An override for the alt text.
	 * @since   1.5
	 */
	public static function publishList(task:String='publish', alt:String='JTOOLBAR_PUBLISH') : Void;

	/**
	 * Writes a common 'unpublish' button.
	 * @param   task   An override for the task.
	 * @param   alt    An override for the alt text.
	 * @param   check  True if required to check that a standard list item is checked.
	 * @since   1.5
	 */
	public static function unpublish(task:String='unpublish', alt:String='JTOOLBAR_UNPUBLISH', check:Bool=false) : Void;

	/**
	 * Writes a common 'unpublish' button for a list of records.
	 * @param   task  An override for the task.
	 * @param   alt   An override for the alt text.
	 * @since   1.5
	 */
	public static function unpublishList(task:String='unpublish', alt:String='JTOOLBAR_UNPUBLISH') : Void;

	/**
	 * Writes a common 'archive' button for a list of records.
	 * @param   task  An override for the task.
	 * @param   alt   An override for the alt text.
	 * @since   1.5
	 */
	public static function archiveList(task:String='archive', alt:String='JTOOLBAR_ARCHIVE') : Void;

	/**
	 * Writes an unarchive button for a list of records.
	 * @param   task  An override for the task.
	 * @param   alt   An override for the alt text.
	 * @since   1.5
	 */
	public static function unarchiveList(task:String='unarchive', alt:String='JTOOLBAR_UNARCHIVE') : Void;

	/**
	 * Writes a common 'edit' button for a list of records.
	 * @param   task  An override for the task.
	 * @param   alt   An override for the alt text.
	 * @since   1.5
	 */
	public static function editList(task:String='edit', alt:String='JTOOLBAR_EDIT') : Void;

	/**
	 * Writes a common 'edit' button for a template html.
	 * @param   task  An override for the task.
	 * @param   alt   An override for the alt text.
	 * @since   1.5
	 */
	public static function editHtml(task:String='edit_source', alt:String='JTOOLBAR_EDIT_HTML') : Void;

	/**
	 * Writes a common 'edit' button for a template css.
	 * @param   task  An override for the task.
	 * @param   alt   An override for the alt text.
	 * @since   1.5
	 */
	public static function editCss(task:String='edit_css', alt:String='JTOOLBAR_EDIT_CSS') : Void;

	/**
	 * Writes a common 'delete' button for a list of records.
	 * @param   msg   Postscript for the 'are you sure' message.
	 * @param   task  An override for the task.
	 * @param   alt   An override for the alt text.
	 * @since   1.5
	 */
	public static function deleteList(msg:String='', task:String='remove', alt:String='JTOOLBAR_DELETE') : Void;

	/**
	 * Writes a common 'trash' button for a list of records.
	 * @param   task   An override for the task.
	 * @param   alt    An override for the alt text.
	 * @param   check  True to allow lists.
	 * @since   1.5
	 */
	public static function trash(task:String='remove', alt:String='JTOOLBAR_TRASH', check:Bool=true) : Void;

	/**
	 * Writes a save button for a given option.
	 * Apply operation leads to a save action only (does not leave edit mode).
	 * @param   task  An override for the task.
	 * @param   alt   An override for the alt text.
	 * @since   1.5
	 */
	public static function apply(task:String='apply', alt:String='JTOOLBAR_APPLY') : Void;

	/**
	 * Writes a save button for a given option.
	 * Save operation leads to a save and then close action.
	 * @param   task  An override for the task.
	 * @param   alt   An override for the alt text.
	 * @since   1.5
	 */
	public static function save(task:String='save', alt:String='JTOOLBAR_SAVE') : Void;

	/**
	 * Writes a save and create new button for a given option.
	 * Save and create operation leads to a save and then add action.
	 * @param   task  An override for the task.
	 * @param   alt   An override for the alt text.
	 * @since   1.6
	 */
	public static function save2new(task:String='save2new', alt:String='JTOOLBAR_SAVE_AND_NEW') : Void;

	/**
	 * Writes a save as copy button for a given option.
	 * Save as copy operation leads to a save after clearing the key,
	 * then returns user to edit mode with new key.
	 * @param   task  An override for the task.
	 * @param   alt   An override for the alt text.
	 * @since   1.6
	 */
	public static function save2copy(task:String='save2copy', alt:String='JTOOLBAR_SAVE_AS_COPY') : Void;

	/**
	 * Writes a checkin button for a given option.
	 * @param   task   An override for the task.
	 * @param   alt    An override for the alt text.
	 * @param   check  True if required to check that a standard list item is checked.
	 * @since   1.7
	 */
	public static function checkin(task:String='checkin', alt:String='JTOOLBAR_CHECKIN', check:Bool=true) : Void;

	/**
	 * Writes a cancel button and invokes a cancel operation (eg a checkin).
	 * @param   task  An override for the task.
	 * @param   alt   An override for the alt text.
	 * @since   1.5
	 */
	public static function cancel(task:String='cancel', alt:String='JTOOLBAR_CANCEL') : Void;

	/**
	 * Writes a configuration button and invokes a cancel operation (eg a checkin).
	 * @param   component  The name of the component, eg, com_content.
	 * @param   height     The height of the popup. [UNUSED]
	 * @param   width      The width of the popup. [UNUSED]
	 * @param   alt        The name of the button.
	 * @param   path       An alternative path for the configuation xml relative to JPATH_SITE.
	 * @since   1.5
	 */
	public static function preferences(component:String, height:Int='550', width:Int='875', alt:String='JToolbar_Options', path:String='') : Void;

	/**
	 * Writes a version history
	 * @param   typeAlias  The component and type, for example 'com_content.article'
	 * @param   itemId     The id of the item, for example the article id.
	 * @param   height     The height of the popup.
	 * @param   width      The width of the popup.
	 * @param   alt        The name of the button.
	 * @since   3.2
	 */
	public static function versions(typeAlias:String, itemId:Int, height:Int=800, width:Int=500, alt:String='JTOOLBAR_VERSIONS') : Void;

	/**
	 * Displays a modal button
	 * @param   targetModalId  ID of the target modal box
	 * @param   icon           Icon class to show on modal button
	 * @param   alt            Title for the modal button
	 * @since   3.2
	 */
	public static function modal(targetModalId:String, icon:String, alt:String) : Void;
}
