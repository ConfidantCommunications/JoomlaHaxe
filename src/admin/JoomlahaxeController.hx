	package;

	//https://docs.joomla.org/J2.5:Developing_a_MVC_Component/Basic_backend

	import php.Lib;

	//note: had to remove some comments from the source file below because the macro was choking on the word "function" in it.
	@:build(PHP.generateExtern("legacy/controller/legacy.php")) 
	class JControllerLegacy implements Dynamic { }


	/*
	* In regular PHP this class would be called "controller.php" and reside in the component's admin folder
	* Since it is instantiated by the entry point (joomlahaxe.php from MainAdmin.hx) and not by the Joomla framework,
	* we can let Haxe simply compile it into the "lib" directory.
	*/


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
			untyped __call__("jimport", "joomla.application.component.controller");
		}
		override public function display(?cachable:Dynamic,?urlparams:Dynamic):Dynamic{
			// from example at https://docs.joomla.org/Developing_a_Model-View-Controller_%28MVC%29_Component_for_Joomla!2.5_-_Part_07#admin.2Fcontroller.php
			var input = untyped __php__('JFactory::getApplication()->input');
			input.set('view', input.getCmd('view', 'Joomlahaxe'));
			
			
			
			// call parent behavior. PHP equivalent is parent::display($cachable);
			super.display(cachable);
			return null;
		}
	}
	


