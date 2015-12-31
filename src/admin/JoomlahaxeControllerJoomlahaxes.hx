	package;

	//https://docs.joomla.org/J2.5:Developing_a_MVC_Component/Basic_backend

	import php.Lib;

	@:build(PHP.generateExtern("legacy/controller/admin.php")) 
	class JControllerAdmin implements Dynamic { }

	class JoomlahaxeControllerJoomlahaxes extends JControllerAdmin
	{
		static public function main()
		{
		}
		public function getModel(name = 'Joomlahaxes', prefix = 'JoomlahaxeModel') 
		{
			//var configArray=untyped __php__("array('ignore_request' => true)");
			var model = untyped __php__("parent::getModel($name, $prefix, array('ignore_request' => true))");

			return model;
		}

	}

