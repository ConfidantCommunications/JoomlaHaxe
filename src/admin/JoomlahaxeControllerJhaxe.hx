	package;

	//https://docs.joomla.org/J2.5:Developing_a_MVC_Component/Basic_backend

	import php.Lib;


	//corresponds to admin/controllers/helloworld.php in the tutorial
	@:build(PHP.generateExtern("legacy/controller/form.php")) 
	class JControllerForm implements Dynamic { }

	class JoomlahaxeControllerJhaxe extends JControllerForm
	{
		static public function main()
		{

			new JoomlahaxeControllerJhaxe(null);


		}

		public function new(config:Dynamic){
			/*var config;
			config=untyped{
				__call__("Array","[\"name\":\"Jhaxe\"]");  

			}*/
			super(config);
			untyped __call__("defined('_JEXEC') or die");
			untyped __call__("jimport", "joomla.application.component.controllerform");
		}
	}


