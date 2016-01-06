package ;

import php.Lib;

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
		
	}
	
	//When no task is given in the request variables, the default task will be executed. It's the 'display' task by default. 
	//The JControllerLegacy class has such a task. In our example, it will display a view named Joomlahaxe.

	
	//TIP:
	//Just a side note for completion, you could call another function aside from display() by using an URL like this one:

	//http://localhost/index.php?option=com_helloworld&task=insert

	//This would try to call a function insert() of our controller (which we would actually have to implement in JoomlahaxeController ).
	
	
}

