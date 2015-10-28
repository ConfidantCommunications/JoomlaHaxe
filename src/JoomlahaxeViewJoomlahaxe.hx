package ;


import php.Lib;
@:build(PHP.generateExtern("legacy/view/legacy.php")) 
class JViewLegacy implements Dynamic { }

class JoomlahaxeViewJoomlahaxe extends JViewLegacy
{
	var msg:String;
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
			// Assign data to the view
			//msg = 'Hello World';

			//Note: $this->get() is a member of JView::get which is a proxy to get* methods of the default model where * is populated with the value of the first parameter passed to get()
			
			msg = get('Msg');
			
			//here tpl is a string which determines which view to use.
			//Joomla will load default.php but if tpl=="sausage" then Joomla will display default_sausage.php
			return super.display(tpl);
			
		}
	
	
}
