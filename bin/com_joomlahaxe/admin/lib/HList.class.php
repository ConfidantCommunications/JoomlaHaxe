<?php

class HList implements IteratorAggregate{
	public function __construct(){}
	public function iterator() {
		$GLOBALS['%s']->push("List::iterator");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = new _hx_list_iterator($this);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	public function getIterator() {
		$GLOBALS['%s']->push("List::getIterator");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = $this->iterator();
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	function __toString() { return 'List'; }
}
