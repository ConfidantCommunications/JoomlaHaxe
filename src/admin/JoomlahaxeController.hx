	package;

	//https://docs.joomla.org/J2.5:Developing_a_MVC_Component/Basic_backend

	import php.Lib;

	//note: had to remove some comments from the source file below because the macro was choking on the word "function" in it.
	@:build(PHP.generateExtern("legacy/controller/legacy.php")) 
	class JControllerLegacy implements Dynamic { }

	class JoomlahaxeController extends JControllerLegacy
	{
		static public function main()
		{

			new JoomlahaxeController(null);


		}

		public function new(config:Dynamic){
			var config;
			config=untyped{
				__call__("Array","[\"name\":\"Joomlahaxe\"]");

			}
			super(config);
			untyped __call__("defined('_JEXEC') or die");
			untyped {
				//__call__("jimport", "joomla.application.component.controller");
			}
		}
		override public function display(?cachable:Dynamic,?urlparams:Dynamic):Dynamic{
			// set default view if not set
			//$input = JFactory::getApplication()->input;
			var input = untyped __php__('JFactory::getApplication()->input');
			input.set('view', input.getCmd('view', 'Joomlahaxe'));

			// call parent behavior. PHP equivalent is parent::display($cachable);
			super.display(cachable);
			return null;
		}
	}

