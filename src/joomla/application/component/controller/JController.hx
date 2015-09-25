package joomla.application.component.controller;

/**
 * @package     Joomla.Platform
 * @subpackage  Controller
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

//defined('JPATH_PLATFORM') or die;

/**
 * Joomla Platform Controller Interface
 *
 * @since  12.1
 */
import joomla.JApplicationBase;
extern class JController 
{
	
	public function execute():Dynamic;

	public function getInput():Dynamic;
	public function getInstance($g:Dynamic):Dynamic;
	
	
	
	public function get_app():Dynamic {
	}
	public function get_input():Dynamic {
	}
	public function getApplication():Dynamic {
	}
	public function serialize():String {
	}
	public function unserialize(input:Dynamic = null):Dynamic {
	}
	public function loadApplication():Dynamic {
	}
	public function loadInput():Dynamic {
	}
	public function resolve($field:Dynamic):Dynamic {
	}
	public function __get($n:Dynamic):Dynamic {
	}
	public function __set($n:Dynamic, $v:Dynamic):Dynamic {
	}
	public function __call($n:Dynamic, $a:Dynamic):Dynamic {
	}
	function __toString():String { return 'JController'; }
}
