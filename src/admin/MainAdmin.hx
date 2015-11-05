package;


import php.Lib;
//import joomla.JApplicationCms;
//import JoomlahaxeController;
/*
@:build(PHP.generateExtern("legacy/controller/legacy.php")) 
class JControllerLegacy implements Dynamic { }

@:build(PHP.generateExtern("legacy/request/request.php")) 
class JRequest implements Dynamic { }*/

class MainAdmin
{
	@libdirLive("/Applications/MAMPold/htdocs_artworks/libraries/") var ld1:String;
	@libdirLocal("/Users/allan/Documents/haXe/JoomlaHaxeTest/src/libraries/") var ld2:String;
	
	//var gc:JoomlahaxeController;
	public static function main () {
		
		new MainAdmin ();
		
	}
    public function new()
    {
		
		untyped __call__("defined('_JEXEC') or die","no joomla here");
		
		var auth=untyped __call__("!JFactory::getUser()->authorise",'core.manage', 'com_contact');
		if (auth)
			{
				//deprecated JError
				//return untyped __call__("JError::raiseWarning();","404, JText::_('JERROR_ALERTNOAUTHOR')");
			}

		
		untyped {
			__call__("require_once", "JoomlahaxeController.class.php");
			//__call__("require_once", "JControllerLegacy.class.php");
		}
		
		var config;
		config=untyped{
			__call__("Array","[\"name\":\"Joomlahaxe\"]");
			
		}
		
// 		gc=new JoomlahaxeController(config);
// 		var task=untyped __call__("JFactory::getApplication()->input->get","task");
// 		gc.execute(task);
// 		gc.redirect();
		
		// Get an instance of the controller prefixed by HelloWorld
		var gc = untyped __php__("JControllerLegacy::getInstance('Joomlahaxe')");

		// Perform the Request task
		gc.execute(untyped __php__("JRequest::getCmd('task')"));
	}
	
	
	
}


