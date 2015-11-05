package ;


import php.Lib;
import php.NativeArray;
//import JTable;

@:build(PHP.generateExtern("legacy/model/admin.php")) 
class JModelAdmin implements Dynamic { }

//@:build(PHP.generateExtern("joomla/object/object.php")) 
//class JObject implements Dynamic { }


class JoomlahaxeModelJhaxe extends JModelAdmin
{
	
	public static function main () {
		
		new JoomlahaxeModelJhaxe ();
		
	}
    public function new()
    {
		var config;
		config=untyped{
			__call__("Array","[\"name\":\"Jhaxe\"]");
			
		}
		super(config);
		untyped __call__("defined('_JEXEC') or die","no joomla here, scallywag");
		untyped __call__("jimport", "joomla.application.component.modeladmin");
		
	}
	public function getTable(type = 'Joomlahaxe', prefix = 'JoomlahaxeTable', config=null) 
	{
 		//return null;
		
		
		if (config==null)
		{
			config=untyped __php__('array()');
		}
		
		return untyped __php__("JTable::getInstance($type, $prefix, $config)");
		
		
		
	}
	public function getForm(data = null, loadData = true) 
	{	
		if (data==null)
		{
 			data=untyped __php__('array()');//=Lib.toPhpArray(new Array<Dynamic>());
		}
		// Get the form.
		var h=new Map<String,String>();
		h.set('control' , 'jform');
		h.set('load_data' , loadData?'true':'false');
		var formArray=Lib.associativeArrayOfHash(h);
		var form = this.loadForm('com_joomlahaxe.joomlahaxe', 'joomlahaxe',formArray);
		if (form==null) 
		{
			return false;
		}
		return form;
	}
	private function loadFormData() 
	{
		// Check the session for previously entered form data.
		var data = untyped __php__("JFactory::getApplication()->getUserState('com_helloworld.edit.helloworld.data', array())");
		if (data==null) 
		{
			data = this.getItem();
		}
		return data;
	}
}
