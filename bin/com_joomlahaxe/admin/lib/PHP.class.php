<?php

class PHP {
	public function __construct(){}
	static function log($data) {
		$GLOBALS['%s']->push("PHP::log");
		$__hx__spos = $GLOBALS['%s']->length;
		PHP::logFirePHP($data);
		$GLOBALS['%s']->pop();
	}
	static function logFirePHP($message) {
		$GLOBALS['%s']->push("PHP::logFirePHP");
		$__hx__spos = $GLOBALS['%s']->length;
		if(!property_exists("GLOBALS", "firephp")) {
			ob_start();
			require_once '/libFirePHPCore/FirePHP.class.php';
			$GLOBALS['firephp'] = FirePHP::getInstance(true);
		}
		$GLOBALS["firephp"]->log("[PHP] " . _hx_string_or_null($message));
		$GLOBALS['%s']->pop();
	}
	static function printData($data, $pos = null) {
		$GLOBALS['%s']->push("PHP::printData");
		$__hx__spos = $GLOBALS['%s']->length;
		Debug::printData($pos, $data);
		$GLOBALS['%s']->pop();
	}
	static function error($errorNumber, $message = null, $pos = null) {
		$GLOBALS['%s']->push("PHP::error");
		$__hx__spos = $GLOBALS['%s']->length;
		Debug::error($errorNumber, $message, $pos->fileName, $pos->lineNumber);
		$GLOBALS['%s']->pop();
	}
	static function generateFunctionArgs($args) {
		$GLOBALS['%s']->push("PHP::generateFunctionArgs");
		$__hx__spos = $GLOBALS['%s']->length;
		$result = (new _hx_array(array()));
		{
			$_g1 = 0;
			$_g = $args->length;
			while($_g1 < $_g) {
				$i = $_g1++;
				$result->push(_hx_anonymous(array("name" => $args[$i], "type" => haxe_macro_ComplexType::TPath(_hx_anonymous(array("pack" => (new _hx_array(array())), "name" => "Dynamic", "params" => (new _hx_array(array()))))), "opt" => true)));
				unset($i);
			}
		}
		{
			$GLOBALS['%s']->pop();
			return $result;
		}
		$GLOBALS['%s']->pop();
	}
	static function generateExpressionArgs($expression, $args = null) {
		$GLOBALS['%s']->push("PHP::generateExpressionArgs");
		$__hx__spos = $GLOBALS['%s']->length;
		$result = (new _hx_array(array($expression)));
		if($args !== null) {
			$_g1 = 0;
			$_g = $args->length;
			while($_g1 < $_g) {
				$i = $_g1++;
				$result->push(_hx_anonymous(array("expr" => haxe_macro_ExprDef::EConst(haxe_macro_Constant::CIdent($args[$i])), "pos" => _hx_anonymous(array("file" => "src/admin/PHP.hx", "min" => 8269, "max" => 8278)))));
				unset($i);
			}
		}
		{
			$GLOBALS['%s']->pop();
			return $result;
		}
		$GLOBALS['%s']->pop();
	}
	static function getPublicAndProtectedVars($fileData) {
		$GLOBALS['%s']->push("PHP::getPublicAndProtectedVars");
		$__hx__spos = $GLOBALS['%s']->length;
		$results = (new _hx_array(array()));
		$searchIndex = 0;
		while($searchIndex < strlen($fileData)) {
			$searchIndex = _hx_index_of($fileData, "public \$", $searchIndex);
			if($searchIndex === -1) {
				break;
			}
			$semiColonIndex = _hx_index_of($fileData, ";", $searchIndex);
			$varName = _hx_substring($fileData, $searchIndex + 8, $semiColonIndex);
			$results->push(_hx_anonymous(array("varName" => $varName, "isPublic" => true)));
			$searchIndex = $semiColonIndex;
			unset($varName,$semiColonIndex);
		}
		$searchIndex = 0;
		while($searchIndex < strlen($fileData)) {
			$searchIndex = _hx_index_of($fileData, "protected \$", $searchIndex);
			if($searchIndex === -1) {
				break;
			}
			$semiColonIndex1 = _hx_index_of($fileData, ";", $searchIndex);
			$varName1 = _hx_substring($fileData, $searchIndex + 11, $semiColonIndex1);
			$results->push(_hx_anonymous(array("varName" => $varName1, "isPublic" => false)));
			$searchIndex = $semiColonIndex1;
			unset($varName1,$semiColonIndex1);
		}
		{
			$GLOBALS['%s']->pop();
			return $results;
		}
		$GLOBALS['%s']->pop();
	}
	function __toString() { return 'PHP'; }
}
