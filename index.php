<?php

Class StrUtils {

	private $_str;

	public function __construct($newString) {
		$this->_str = $newString;
	}

	public function bold() {
		return '<strong>' . $this->_str . '</strong>';
	}
}

$Obj = new StrUtils("Blabla");
var_dump($Obj);
echo $Obj->str;
echo $Obj->bold();
