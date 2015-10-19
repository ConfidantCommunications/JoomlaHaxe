package ;


import php.Lib;
//import joomla.JApplicationCms;
import JoomlahaxeController;

@:build(PHP.generateExtern("cms/application/cms.php")) 
class JApplicationCms implements Dynamic { }

class Main
{
	var input:JApplicationCms;
	var gc:JoomlahaxeController;
	public static function main () {
		
		new Main ();
		
	}
    public function new()
    {
        Lib.print ('Haxe is great!');
		untyped __call__("defined('_JEXEC') or die","no joomla here");
		untyped {
			__call__("require_once", "JoomlahaxeController.class.php");
		}
		//Lib.loadLib("lib/JoomlahaxeController.class.php");
		// Get an instance of the controller prefixed by Joomlahaxe
		
		var config;
		config=untyped{
			__call__("Array","[\"name\":\"Joomlahaxe\"]");
			
		}
		
		gc=new JoomlahaxeController(config);
		var task=untyped __call__("JFactory::getApplication()->input->get","task");
		gc.execute(task);
		gc.redirect();
	}
	
	
	
}