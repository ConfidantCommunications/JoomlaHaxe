package;


import php.Lib;
@:build(PHP.generateExtern("legacy/view/legacy.php")) 
class JViewLegacy implements Dynamic { }

class JoomlahaxeViewJoomlahaxe extends JViewLegacy
{
	public static function main () {
		
		new JoomlahaxeViewJoomlahaxe ();
		
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
	override public function display(?tpl:Dynamic) 
		{
			// Get data from the model
			var i = get('Items');
			var p = get('Pagination');
			
			// Check for errors.
			var errors = get('Errors');
			if (errors!=null) 
			{
				//untyped __php__("JError::raiseError(500, implode('<br />', $errors));");
				//return false;
			}
			// Assign data to the view
			this.items = i;
			this.pagination = p;

			// Display the template
			super.display(tpl);
			return null;
		}
	
	
}
