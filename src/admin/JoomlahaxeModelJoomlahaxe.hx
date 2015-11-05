package ;


import php.Lib;
import php.NativeArray;
//import JTable;

@:build(PHP.generateExtern("legacy/model/list.php")) 
class JModelList implements Dynamic { }

//@:build(PHP.generateExtern("joomla/object/object.php")) 
//class JObject implements Dynamic { }


class JoomlahaxeModelJoomlahaxe extends JModelList
{
	
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
		untyped __call__("defined('_JEXEC') or die","no joomla here, scallywag");
		
		untyped __call__("jimport", "joomla.application.component.modellist");
		
	}
	override public function getListQuery()
	{
		// This is called for the default admin listing	
		var db = untyped __call__('JFactory::getDbo');
		var query = db.getQuery(true);
		// Select some fields
		//query.select('name,details');
		query.select('id,name,details,enabled');
		
		// From the joomlahaxe table
		query.from('#__joomlahaxe');
		//query.setLimit('10');
		
		
		return query;
	}
	public function delete(whichEntry:Int):Bool
	{
		untyped __php__('die("deleted")');
		return false;
	}
	public function getMsg(id = 1) 
	{
		if (this.messages==null)
		{
			this.messages=Lib.toPhpArray(new Array<Dynamic>());
		}
 
		if (this.messages[id]!=null) 
		{
            //request the selected id
			var jinput = untyped __php__('JFactory::getApplication()->input');
			id = jinput.get('id', 1, 'INT' );
 			
			/*
			switch ($id) 
			{
			case 2:
				$this->msg = 'Good bye World!';
			break;
			default:
			case 1:
				$this->msg = 'Hello World!';
			break;
			}*/
			
			// Get a TableJoomlahaxe instance
			var table = this.getTable(); //goes to function above
 
			// Load the message
			table.load(id);
 
			// Assign the message
			this.messages[id] = table.greeting;
		}
 
		return this.messages[id];
	}
}
