	package;

	//https://docs.joomla.org/J2.5:Developing_a_MVC_Component/Basic_backend

	import php.Lib;


	//corresponds to admin/controllers/helloworld.php in the tutorial
	@:build(PHP.generateExtern("legacy/controller/form.php")) 
	class JControllerForm implements Dynamic { }

	class JoomlahaxeControllerJoomlahaxe extends JControllerForm
	{
		static public function main()
		{

		}

	}


