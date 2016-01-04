package;

import JToolbarHelper; //generated using http://phptohaxe.haqteam.com/extern.php and then hand edited
import php.Lib;
@:build(PHP.generateExtern("legacy/view/legacy.php")) 
class JViewLegacy implements Dynamic { }

//admin/views/helloworld/view.html.php
class JoomlahaxeViewJoomlahaxe extends JViewLegacy
{
	var i:Dynamic;
	var f:Dynamic;
	public static function main () {
		
	}
	override public function display(?tpl:Dynamic) 
		{
			
			try{
				i = get('Item'); 
				f = get('Form'); //calls "getForm" on the model
			} catch (e:Dynamic){
				Lib.print(e);
				return false;
			}
			// Assign data to the view
			this.item = i;
			this.form = f;
			
			addToolBar(i,f);
			// Display the template
			super.display(tpl);
			return null;
		}
	
	private function addToolBar(theItem,theForm) 
	{
		var input = untyped __php__('JFactory::getApplication()->input;');
		input.set('hidemainmenu', true);
		var isNew:Bool=false;
		//Lib.print("Item:");
		untyped __php__("print_r($theItem);");
		Lib.print("<br /><br />");
		
		untyped __php__("print_r($theForm);");		
		//Lib.print("<br />Form:");
		//Lib.print(theForm);
			//Lib.print("id:"+this.item.id);
		try{
			isNew=(theItem.id=="0");
			
		} catch (e:Dynamic){
			Lib.print(e);
			isNew=false;
			//return false;
		}
		//var isNew=untyped __php__("$this->item->id == 0");
		JToolbarHelper.title(isNew ? 'New item' : 'Edit item');
		JToolbarHelper.save('joomlahaxe.save','Save');
		JToolbarHelper.cancel('joomlahaxe.cancel', isNew ? 'Cancel' : 'Close');
		return true;
	}
	
}
