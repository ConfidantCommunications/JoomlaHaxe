package;


import php.Lib;


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
		
		untyped __php__("defined('_JEXEC') or die('no joomla here')");
		
		/*
		try{
			var auth=untyped __call__("!JFactory::getUser()->authorise",'core.manage', 'com_contact');
		} catch(e:Dynamic){
			Lib.print(e);
		}
			*/
		
		// Get an instance of the controller prefixed by HelloWorld
		var gc = untyped __php__("JControllerLegacy::getInstance('Joomlahaxe')");

		// Perform the Request task
		try{
			gc.execute(untyped __php__("JRequest::getCmd('task')"));
		} catch (e:Dynamic){
			Lib.print(e);
		}
			
		gc.redirect();
	}
	
	
	
}


