package ;


import php.Lib;
import php.NativeArray;
//import JTable;

@:build(PHP.generateExtern("legacy/model/admin.php"))
class JModelAdmin implements Dynamic { }

//@:build(PHP.generateExtern("joomla/object/object.php"))
//class JObject implements Dynamic { }


class JoomlahaxeModelJoomlahaxe extends JModelAdmin
{

	public static function main () {
	}
	public function getTable(type = 'Joomlahaxe', prefix = 'JoomlahaxeTable', config=null)
	{
 		if (config==null)
		{
			config=untyped __php__('array()');
		}

		return untyped __php__("JTable::getInstance($type, $prefix, $config)");
	}
	public function getForm(data = null, loadData = true)
	{
		//untyped __php__('die("getForm die, line 31")');
		if (data==null)
		{
 			data=untyped __php__('array()');//=Lib.toPhpArray(new Array<Dynamic>());
			//untyped __php__('die("getForm die, line 35")');
		}
			

		var form:Dynamic = untyped __php__("$this->loadForm('com_joomlahaxe.joomlahaxe', 'joomlahaxe', array('control' => 'jform', 'load_data' => $loadData))");

		if (form==null)
		{
			untyped __php__('die("getForm die, line 54")');
			return false;
		}
		return form;
	}
	private function loadFormData()
	{
		// Check the session for previously entered form data.
		var data = untyped __php__("JFactory::getApplication()->getUserState('com_joomlahaxe.edit.joomlahaxe.data', array())");
		if (data==null)
		{
			data = this.getItem();
		}
		var d:String="asdf";
		return data;
	}


}
