package ;


import php.Lib;
@:build(PHP.generateExtern("legacy/view/legacy.php")) 
class JViewLegacy implements Dynamic { }

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
// 	override public function display(?tpl) 
// 		{
// 			// Assign data to the view
// 			//$this->msg = 'Hello World';

// 			// Display the view
// 			untyped{
// 				__call__("parent::display","$tpl");
// 			}
// 		}
	
	
}
