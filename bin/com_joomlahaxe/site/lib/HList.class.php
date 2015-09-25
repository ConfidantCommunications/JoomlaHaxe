<?php

class HList implements IteratorAggregate{
	public function __construct(){}
	public function iterator() {
		return new _hx_list_iterator($this);
	}
	public function getIterator() {
		return $this->iterator();
	}
	function __toString() { return 'List'; }
}
