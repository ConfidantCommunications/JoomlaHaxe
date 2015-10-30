package ;


import php.Lib;
//import sys.db.Connection;
//import Entry;

@:build(PHP.generateExtern("legacy/model/list.php")) 
class JModelList implements Dynamic { }

//@:build(PHP.generateExtern("joomla/database/query/mysqli.php")) 
//class JDatabaseQueryMysqli implements Dynamic { }


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

		
	}
	override public function getListQuery()
	{
		// Create a new query object.		
		var db = untyped __call__('JFactory::getDbo');
		var query = db.getQuery(true);
		// Select some fields
		query.select('id,name,details,enabled');
		
		// From the joomlahaxe table
		query.from('#__joomlahaxe');
		//query.setLimit('10');
		
		
		return query;
	}
	
	
}
