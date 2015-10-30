package;

import JToolbarHelper; //generated using http://phptohaxe.haqteam.com/extern.php and then hand edited
import php.Lib;
@:build(PHP.generateExtern("legacy/view/legacy.php")) 
class JViewLegacy implements Dynamic { }


//in the tutorial they named this class "helloworlds" (with an s) which is confusing because they also had a view called "helloworld". I will name this one "Joomlahaxe" (JoomlahaxeViewJoomlahaxe) and the latter "Jhaxe"
class JoomlahaxeViewJoomlahaxe extends JViewLegacy
{
	public static function main () {
		
		new JoomlahaxeViewJoomlahaxe ();
		
	}
    public function new()
    {
		var config;
		config=untyped{
			__call__("Array","[\"name\":\"Joomlahaxe\"]");
			
		}
		super(config);
		untyped __call__("defined('_JEXEC') or die","no joomla here");
		
	}
	override public function display(?tpl:Dynamic) 
		{
			// Get data from the model
			var i = get('Items');
			var p = get('Pagination');
			
			// Check for errors.
			var errors = get('Errors');
			if (errors!=null) 
			{
				//untyped __php__("JError::raiseError(500, implode('<br />', $errors));");
				//return false;
			}
			// Assign data to the view
			this.items = i;
			this.pagination = p;
			
			addToolBar();
			// Display the template
			super.display(tpl);
			return null;
		}
	
	private function addToolBar() 
	{
		JToolbarHelper.title(untyped __php__("JText::_('COM_JOOMLAHAXE_JOOMLAHAXE_VIEW_DEFAULT_TITLE')"));
		JToolbarHelper.deleteList('', 'joomlahaxe.delete');
		JToolbarHelper.editList('jhaxe.edit');
		JToolbarHelper.addNew('jhaxe.add');
	}
}
