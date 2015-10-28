package;


import php.Lib;
//import joomla.JApplicationCms;
import JoomlahaxeController;

class MainAdmin
{
	@libdirLive("/Applications/MAMPold/htdocs_artworks/libraries/") var ld1:String;
	@libdirLocal("/Users/allan/Documents/haXe/JoomlaHaxeTest/src/libraries/") var ld2:String;
	
	var gc:JoomlahaxeController;
	public static function main () {
		
		new MainAdmin ();
		
	}
    public function new()
    {
		/*
defined('_JEXEC') or die;
JHtml::_('behavior.tabstate');

if (!JFactory::getUser()->authorise('core.manage', 'com_contact'))
{
	return JError::raiseWarning(404, JText::_('JERROR_ALERTNOAUTHOR'));
}

$controller = JControllerLegacy::getInstance('contact');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
*/
		untyped __call__("defined('_JEXEC') or die","no joomla here");
		
		var auth=untyped __call__("!JFactory::getUser()->authorise",'core.manage', 'com_contact');
		if (auth)
			{
				return untyped __call__("JError::raiseWarning();","404, JText::_('JERROR_ALERTNOAUTHOR')");
			}

		
		untyped {
			__call__("require_once", "JoomlahaxeController.class.php");
			__call__("require_once", "JControllerLegacyAdmin.class.php");
		}
		
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


