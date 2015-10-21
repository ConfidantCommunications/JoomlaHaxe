package;


import php.Lib;
@:build(PHP.generateExtern("legacy/view/legacy.php",null,"/Applications/MAMPold/htdocs_artworks/libraries/","/Users/allan/Documents/haXe/JoomlaHaxeTest/src/libraries/")) 
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
		untyped {
			__call__("defined('_JEXEC') or die","no joomla here");
		}
		
	}
	override public function display(?tpl:Dynamic) 
		{
			// Assign data to the view
			msg = 'Hello World';

			// Display the view
// 			untyped{
// 				__call__("parent::display","$tpl");
// 			}
			
			//here tpl is a string which determines which view to use.
			//Joomla will load default.php but if tpl=="sausage" then Joomla will display default_sausage.php
			return super.display(tpl);
			
		}
	
	
}
