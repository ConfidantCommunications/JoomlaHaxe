package ;


import php.Lib;
import php.NativeArray;
//import JTable;

@:build(PHP.generateExtern("legacy/model/list.php")) 
class JModelList implements Dynamic { }

//@:build(PHP.generateExtern("joomla/object/object.php")) 
//class JObject implements Dynamic { }


class JoomlahaxeModelJoomlahaxes extends JModelList
{
	
	public static function main () {
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
	public function delete(whichEntries:NativeArray):Bool
	{
		// Warning: this is an oversimplified version of a delete function with no ACL or filter functions. 
		var iii=Lib.toHaxeArray(whichEntries);

		for(thisEntry in iii){

			var db = untyped __call__('JFactory::getDbo'); //creates a JDatabaseDriverMysqli Object

			var a=db.quoteName('#__joomlahaxe');
			var query = db.getQuery(true);
			query.from(a);
			query.delete();


			query.where('id = ' + thisEntry);

			//untyped __php__("print_r($query->__toString())");
			//untyped __php__('die()');
			db.setQuery(query);

			//$this->setError((string) $query);

			try
			{
				db.execute();
			}
			catch (e:Dynamic)
			{
				Lib.print(e);
				untyped __php__('die()');
				//this.setError(e.getMessage());

				return false;
			}

		
			
		}
			
			
		return true;

		
	}
}
