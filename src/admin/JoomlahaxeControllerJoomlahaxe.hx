	package;

	//https://docs.joomla.org/J2.5:Developing_a_MVC_Component/Basic_backend

	import php.Lib;

	@:build(PHP.generateExtern("legacy/controller/admin.php")) 
	class JControllerAdmin implements Dynamic { }

	class JoomlahaxeControllerJoomlahaxe extends JControllerAdmin
	{
		static public function main()
		{

			new JoomlahaxeControllerJoomlahaxe(null);


		}

		public function new(config:Dynamic){
			/*var config;
			config=untyped{
				__call__("Array","[\"name\":\"Joomlahaxe\"]");  ///same as another controller; are we in for trouble?

			}*/
			super(config);
			untyped __call__("defined('_JEXEC') or die");
			untyped __call__("jimport", "joomla.application.component.controlleradmin");
		}
		public function getModel(name = 'Joomlahaxe', prefix = 'JoomlahaxeModel') 
		{
			//var configArray=untyped __php__("array('ignore_request' => true)");
			var model = untyped __php__("parent::getModel($name, $prefix, array('ignore_request' => true))");

			return model;
		}

	}

