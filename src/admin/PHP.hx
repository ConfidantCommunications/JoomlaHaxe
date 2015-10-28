package;

import sys.io.File;
import haxe.PosInfos;
import haxe.macro.Expr;
import haxe.macro.ExprTools;
import haxe.macro.Context;
import haxe.macro.Type;
/**
 * Utility class with functions that make it easier to write PHP code in Haxe
 * @author Samuel Batista (https://gist.github.com/gamedevsam/a53263ef7ff9de6da5c3)
 * Lines 40 and 75 must be customised for your environment
 */
class PHP
{	
	// Calls a function, passes all parameters after function name to said function, ex: PHP.call("myFunc", 1, 2);
	macro public static function call(e:Array<Expr>) {
		return macro untyped __call__($a{e});
	}

	// Inserts the code passed in as a string directly into the PHP output
	macro public static function eval(e:ExprOf<String>) {
		var code:String = ExprTools.getValue(e);
		return macro untyped __php__('$code');
	}

	// Strict equals test between the two values. Returns a Bool.
	macro public static function equals(obj1:Expr, obj2:Expr) {
		return macro untyped __physeq__($obj1, $obj2);
	}

	// Gets the value of a global object's variable
	macro public static function global(object:ExprOf<String>, variable:ExprOf<String>) {
		var obj:String = ExprTools.getValue(object);
		var field:String = ExprTools.getValue(variable);
		return macro untyped __var__('$obj', '$field');
	}
	
	// Adds a require_once call that includes a file (path is relative to the current file)
	macro public static function include(e:ExprOf<String>, ?libDir:String = "/lib") {
		var fileName:String = ExprTools.getValue(e);
		return macro untyped __php__('require_once \'$libDir$fileName\'');
	}
	
	// inline keyword ensures release builds do not include any logging whatsoever, including the function call
	inline public static function log(data:Dynamic) {
#if debug
		logFirePHP(data);
#end
	}
	// non-inline private function reduces code duplication in debug builds.
	public static function logFirePHP(message:String) {
		// Enable PHP logging: http://www.firephp.org/HQ/Use.htm
		if (!PHP.call('property_exists', 'GLOBALS', 'firephp')) 
		{
			PHP.call("ob_start");
			PHP.include('FirePHPCore/FirePHP.class.php');
			untyped __php__("$GLOBALS['firephp'] = FirePHP::getInstance(true)");
			// PHP.eval breaks here for some reason
			//PHP.eval('$GLOBALS["firephp"] = FirePHP::getInstance(true)');
		}
		PHP.global('GLOBALS', 'firephp').log('[PHP] '+ message);
	}
	public static function printData(data:Dynamic, ?pos:PosInfos) {
		untyped __php__("Debug::printData($pos, $data)");
	}
	public static function error(errorNumber:Int, ?message:String, ?pos:PosInfos) {
		untyped __php__("Debug::error($errorNumber, $message, $pos->fileName, $pos->lineNumber)");
	}

	// this function autogenerates function and variable accessors for external PHP APIs
	// example usage:
	// 		@:build(PHP.generateClass("etrade_sdk/Accounts/etAccounts.class.php"))
	//		class Accounts {}
	macro static public function generateExtern(filePath:String, ?className:String, ?libDirLive:String = "/lib", ?libDirLocal:String = "/lib"):Array<Field> {
		//get the file path metadata from the Main Class:
		switch Context.getType("MainAdmin") {
			case TInst(ref, params):
				var cl:ClassType = ref.get();
				//trace(cl.meta.get());//traces the metadata of the class
				for (field in cl.fields.get()) {
					var m=field.meta.get();//get the metadata of each field   
					if (m.length>0 && m[0].name=="libdirLive")
					{
						var e=m[0].params[0].expr;
						switch e {
							case EConst(CString(mystring)):
								trace('The variable name is: '+mystring);
								libDirLive=mystring;
							default:
						}
					}
					
						if (m.length>0 && m[0].name=="libdirLocal")
					{
						var e=m[0].params[0].expr;
						switch e {
							case EConst(CString(mystring)):
								trace('The variable name is: '+mystring);
								libDirLocal=mystring;
							default:
						}
					}
				}
			default:
		} 
		
		var fields = Context.getBuildFields();
		var fileData = File.getContent(libDirLocal + filePath);
		
		
		
		
		//trace (haxe.macro.Context.getType("Main"));
		
		// generate class name from file path
		if (className == null) {
			var lastSlash = filePath.lastIndexOf("/");
			lastSlash = lastSlash == -1 ? filePath.lastIndexOf("\\") : lastSlash;
			var fileExt = filePath.indexOf(".class.php");
			fileExt = fileExt == -1 ? filePath.indexOf(".php") : fileExt;
			className = filePath.substring(lastSlash + 1, fileExt);
		}
		
		// create init function that will include the external class
		fields.push({
			name: "__init__",
			doc: null,
			meta: [],
			access: [APublic, AStatic],
			kind: FFun({args: [], params: [], ret: null, expr: macro PHP.include('$filePath','$libDirLive')}),
			pos: Context.currentPos()
		});
		
		// create __inst variable that will hold the instance of the external class
		fields.push({
			name: "__inst",
			doc: null,
			meta: [],
			access: [APrivate],
			kind: FVar(macro : Dynamic),
			pos: Context.currentPos()
		});
		
		// generate properties from public and protected vars that route variable reads & writes to external class
		var vars = getPublicAndProtectedVars(fileData);
		for (tmpVar in vars) {
			var varName = tmpVar.varName;
			var isPublic = tmpVar.isPublic;
			fields.push({
				name: varName,
				doc: null,
				meta: [],
				access: [APublic],
				kind: FProp('get_$varName', isPublic ? 'set_$varName' : 'never', macro:Dynamic),
				pos: Context.currentPos()
			});
			
			var getExpression = "this->__inst->" + varName;
			fields.push({
				name: 'get_$varName',
				doc: null,
				meta: [],
				kind: FFun({ args: [], ret:macro:Dynamic, expr: macro return untyped $i{getExpression} }),
 				access: [APrivate],
				pos: Context.currentPos()
			});
			if (isPublic) {
				var setExpression = "this->__inst->" + varName + " = $value";
				fields.push({
					name: 'set_$varName',
					doc: null,
					meta: [],
					access: [APrivate],
					kind: FFun({ args: [{ name:"value", type: macro:Dynamic, opt: true }], ret: macro:Dynamic, expr: macro return untyped $i{setExpression} }),
					pos: Context.currentPos()
				});
			}
		}
		
		// generate functions with matching arguments and route the calls to the external class
		var searchIndex = 0;
		var generatedConstructor = false;
		while(searchIndex < fileData.length) {
				
			searchIndex = fileData.indexOf("function", searchIndex);
			
			if (searchIndex == -1) break;
				
			var openBracketsIndex = fileData.indexOf("(", searchIndex);
			var closeBracketsIndex = fileData.indexOf(")", openBracketsIndex);
			var functionName = fileData.substring(searchIndex + 8, openBracketsIndex);
			var argumentsText = fileData.substring(openBracketsIndex + 1, closeBracketsIndex);
			
			functionName = StringTools.replace(functionName, " ", ""); // remove spaces
			argumentsText = StringTools.replace(StringTools.replace(argumentsText, " ", ""), "$", ""); // remove spaces + $
			
			var args = argumentsText.split(",");
			
			// remove empty args or optional default values
			var i = args.length;
			while (--i >= 0)
			{
				if (args[i] == "") {
					args.splice(i, 1);
				} else {
					var equalsIndex = args[i].indexOf('=');
					if (equalsIndex != -1)
						args[i] = args[i].substr(0, equalsIndex);
				}
			}
			var functionArgs = generateFunctionArgs(args);
			
			var funcReturn = null;
			var funcExpression = null;
			if (functionName.indexOf("__construct") != -1) {
				functionName = "new"; // constructor override
				funcExpression = "$this->__inst = new " + className;
				generatedConstructor = true;
			} else {
				funcReturn = macro: Dynamic;
				funcExpression = "$this->__inst->" + functionName;
			}
			
			var expressionArgs = generateExpressionArgs(macro $v{funcExpression}, args);
			
			fields.push({
				name: functionName,
				doc: null,
				meta: [],
				access: [APublic],
				kind: FFun({ args: functionArgs, ret: funcReturn, expr: macro return PHP.call($a{expressionArgs}) }),
				pos: Context.currentPos()
			});
			
			searchIndex = closeBracketsIndex;
		}
		
		// make sure we always generate a constructor
		if (!generatedConstructor) {
			var constructorExpression = "this->__inst = new " + className + "()";
			fields.push({
				name: "new",
				doc: null,
				meta: [],
				access: [APublic],
				kind: FFun({ args: [], ret: null, expr: macro return untyped $i{constructorExpression} }),
				pos: Context.currentPos()
			});
		}
		
		// generate dynamic resolve (for unparsed or private vars)
		fields.push({
			name: "resolve",
			doc: null,
			meta: [],
			access: [APrivate],
			kind: FFun(
				{args: [{ name:"field", type: macro:String }],
				params: [],
				ret: null,
				expr: macro return untyped __php__("$this->__inst->$field")
				}),
			pos: Context.currentPos()
		});
		
		return fields;
	}
	
	static private function generateFunctionArgs(args:Array<String>):Array<FunctionArg>
	{
		var result:Array<FunctionArg> = [];
		for (i in 0...args.length) {
			result.push( { name:args[i], type: macro: Dynamic, opt:true } );
		}
		return result;
	}
	
	static private function generateExpressionArgs(expression, ?args:Array<String>):Array<Expr>
	{
		var result:Array<Expr> = cast[expression];
		if(args != null) {
			for (i in 0...args.length)
				result.push(macro $i{args[i]});
		}
		return result;
	}
	
	static private function getPublicAndProtectedVars(fileData:String):Array<Dynamic> {
		var results:Array<Dynamic> = [];
		
		// search public vars
		var searchIndex = 0;
		while (searchIndex < fileData.length) {
			
			searchIndex = fileData.indexOf("public $", searchIndex);
			
			if (searchIndex == -1) break;
				
			var semiColonIndex = fileData.indexOf(";", searchIndex);
			var varName = fileData.substring(searchIndex + 8, semiColonIndex);
			results.push({varName:varName, isPublic:true});
			
			searchIndex = semiColonIndex;
		}
		
		// search protected vars
		searchIndex = 0;
		while (searchIndex < fileData.length) {
			
			searchIndex = fileData.indexOf("protected $", searchIndex);
			
			if (searchIndex == -1) break;
				
			var semiColonIndex = fileData.indexOf(";", searchIndex);
			var varName = fileData.substring(searchIndex + 11, semiColonIndex);
			results.push({varName:varName, isPublic:false});
			
			searchIndex = semiColonIndex;
		}
		
		return results;
	}
}