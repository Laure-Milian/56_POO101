<?php

Class StrUtils {

	private $_str;

	public function __construct($newString) {
		$this->_str = $newString;
	}
}

$Obj = new StrUtils("Blabla");
var_dump($Obj);
echo $Obj->str;
