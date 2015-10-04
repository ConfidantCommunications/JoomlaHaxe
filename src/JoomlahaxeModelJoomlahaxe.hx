package ;


import php.Lib;
@:build(PHP.generateExtern("legacy/model/legacy.php")) 
class JModelLegacy implements Dynamic { }

@:build(PHP.generateExtern("joomla/factory.php")) 
class JFactory implements Dynamic { }

class JoomlahaxeModelJoomlahaxe extends JModelLegacy
{
	var msg:String;
	public static function main () {
		
		new JoomlahaxeModelJoomlahaxe ();
		
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
	
	//getMsg() gets called when the view does this.get('Msg');
	//Joomla looks for this function name based on the parameter passed
	
	public function getMsg() 
	{
		if (msg==null) 
		{
			msg = 'Hello Model!';
		}
			
		//var dbo=untyped{ __call__("JFactory::getDbo","");}
		//var dbc=dbo.getConnection();
			
			
		return msg;
	}
	
}
