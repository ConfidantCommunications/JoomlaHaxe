package;

import JToolbarHelper; //generated using http://phptohaxe.haqteam.com/extern.php and then hand edited
import php.Lib;
@:build(PHP.generateExtern("legacy/view/legacy.php")) 
class JViewLegacy implements Dynamic { }

//admin/views/helloworld/view.html.php
class JoomlahaxeViewJhaxe extends JViewLegacy
{
	public static function main () {
		
		new JoomlahaxeViewJhaxe ();
		
	}
    public function new()
    {
		var config;
		config=untyped{
			__call__("Array","[\"name\":\"Jhaxe\"]");
			
		}
		super(config);
		untyped __call__("defined('_JEXEC') or die","no joomla here");
		untyped __call__("jimport", "joomla.application.component.view");
	}
	override public function display(?tpl:Dynamic) 
		{
			// Get data from the model
			var i = get('Item');
			var f = get('Form');
			
			// Check for errors.
			var errors = get('Errors');
			if (errors!=null) 
			{
				//untyped __php__("JError::raiseError(500, implode('<br />', $errors));");
				//return false;
			}
			// Assign data to the view
			this.item = i;
			this.form = f;
			
			addToolBar();
			// Display the template
			super.display(tpl);
			return null;
		}
	
	private function addToolBar() 
	{
		var input = untyped __php__('JFactory::getApplication()->input;');
		input.set('hidemainmenu', true);
		var isNew = (this.item.id == 0);
		JToolbarHelper.title(isNew ? 'New item' : 'Edit item');
		JToolbarHelper.save('jhaxe.save');
		JToolbarHelper.cancel('jhaxe.cancel', isNew ? 'Cancel' : 'Close');
		
		
		/*JToolbarHelper.title(untyped __php__("JText::_('COM_JOOMLAHAXE_JOOMLAHAXE_VIEW_DEFAULT_TITLE')"));
		JToolbarHelper.deleteList('', 'joomlahaxe.delete');
		JToolbarHelper.editList('jhaxe.edit');
		JToolbarHelper.addNew('jhaxe.add');*/
	}
}
