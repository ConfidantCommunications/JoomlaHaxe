package;


import php.Lib;
@:build(PHP.generateExtern("legacy/controller/legacy.php",null,"/Applications/MAMPold/htdocs_artworks/libraries/","/Users/allan/Documents/haXe/JoomlaHaxeTest/src/libraries/")) 
class JControllerLegacy implements Dynamic { }

class JoomlahaxeController extends JControllerLegacy
{
    static public function main()
    {
		
        new JoomlahaxeController(null);
		
		
	}
	
	public function new(config:Dynamic){
		var config;
		config=untyped{
			__call__("Array","[\"name\":\"Joomlahaxe\"]");
			
		}
		super(config);
		untyped __call__("defined('_JEXEC') or die");
		untyped {
			//__call__("jimport", "joomla.application.component.controller");
		}
	}
}

