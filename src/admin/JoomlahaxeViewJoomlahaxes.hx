package;

import JToolbarHelper; //generated using http://phptohaxe.haqteam.com/extern.php and then hand edited
import php.Lib;
@:build(PHP.generateExtern("legacy/view/legacy.php")) 
class JViewLegacy implements Dynamic { }



//admin/views/helloworlds/view.html.php
class JoomlahaxeViewJoomlahaxes extends JViewLegacy
{
	var i:Dynamic;
	var p:Dynamic;
	public static function main () {
	}
	override public function display(?tpl:Dynamic) 
		{
			// Get data from the model
			
			try{
				i = get('Items');
				p = get('Pagination');
			}catch (e:Dynamic){
				Lib.print(e);
				return false;
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
		JToolbarHelper.deleteList('', 'joomlahaxes.delete','Delete');
		JToolbarHelper.editList('joomlahaxe.edit','Edit');
		JToolbarHelper.addNew('joomlahaxe.add','New');
	}
}
