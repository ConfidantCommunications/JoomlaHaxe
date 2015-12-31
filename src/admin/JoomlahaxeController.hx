	package;

	//https://docs.joomla.org/J2.5:Developing_a_MVC_Component/Basic_backend

	import php.Lib;

	//note: had to remove some comments from the source file below because the macro was choking on the word "function" in it.
	@:build(PHP.generateExtern("legacy/controller/legacy.php")) 
	class JControllerLegacy implements Dynamic { }

	//@:build(PHP.generateExtern("legacy/request/request.php")) 
	//class JRequest implements Dynamic { } 

	class JoomlahaxeController extends JControllerLegacy
	{
		static public function main()
		{
		}

		override public function display(?cachable:Dynamic,?urlparams:Dynamic):Dynamic{
			// from example at https://docs.joomla.org/Developing_a_Model-View-Controller_%28MVC%29_Component_for_Joomla!2.5_-_Part_07#admin.2Fcontroller.php
			//var input = untyped __php__('JFactory::getApplication().input');
			//input.set('view', input.getCmd('view', 'Joomlahaxe'));
			
			untyped __php__("JRequest::setVar('view', JRequest::getCmd('view', 'Joomlahaxes'))");

			//JRequest.setVar('view', JRequest.getCmd('view', 'Joomlahaxe'));
			
// 			var view   = this.input.get('view', 'banners');
// 			var layout = this.input.get('layout', 'default');
// 			var id     = this.input.getInt('id');

// 				// Check for edit form.
// 				if (view == 'banner' && layout == 'edit' && !this.checkEditId('com_banners.edit.banner', id))
// 				{
// 					// Somehow the person just went to the form - we don't allow that.
// 					this.setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', id));
// 					this.setMessage(this.getError(), 'error');
// 					this.setRedirect(JRoute::_('index.php?option=com_banners&view=banners', false));

// 					return false;
// 				}
// 				elseif ($view == 'client' && $layout == 'edit' && !this.checkEditId('com_banners.edit.client', $id))
// 				{
// 					// Somehow the person just went to the form - we don't allow that.
// 					this.setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
// 					this.setMessage(this.getError(), 'error');
// 					this.setRedirect(JRoute::_('index.php?option=com_banners&view=clients', false));

// 					return false;
// 				}

			
			
			
			// call parent behavior. PHP equivalent is parent::display($cachable);
			super.display(cachable,urlparams);
			return this;
			
			
			
			
			
		}
		
		
		
	}
	


