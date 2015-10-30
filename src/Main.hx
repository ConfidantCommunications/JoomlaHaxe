package ;

//https://docs.joomla.org/J2.5:Developing_a_MVC_Component  //refer to the menu in the right column for various topics

/*
	This macro below is derived from https://gist.github.com/gamedevsam/a53263ef7ff9de6da5c3 by Samuel Batista; big thanks!
	You will note that I have copied the Joomla files (version 3.4.4) into the "libraries" folder; you may wish to update that or
	make a symlink to your live site. 

*/


import JoomlahaxeController;
import php.Lib;

@:build(
	PHP.generateExtern("cms/application/cms.php")
) 
class JApplicationCms implements Dynamic { }




class Main
{
	
	//change these to suit your needs. They are accessed by the "PHP" macro Class.
	@libdirLive("/Applications/MAMPold/htdocs_artworks/libraries/") var ld1:String;
	@libdirLocal("/Users/allan/Documents/haXe/JoomlaHaxeTest/src/libraries/") var ld2:String;
	
	

	var input:JApplicationCms;
	var gc:JoomlahaxeController;
	public static function main () {
		
		new Main ();
		
	}
	
    public function new()
    {
        //Lib.print ('Haxe is great!');
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

	