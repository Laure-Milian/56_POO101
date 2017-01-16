<?php

Class StrUtils {

	private $_str;

	public function __construct($newString) {
		$this->_str = $newString;
	}

	public function bold() {
		return '<strong>' . $this->_str . '</strong>';
	}

	public function italic() {
		return '<i>' . $this->_str . '</i>';
	}

	public function underline() {
		return '<u>' . $this->_str . '</u>';
	}

	public function capitalize() {
		return ucfirst($this->_str);
	}
}

$Obj = new StrUtils("blabla");
var_dump($Obj);
echo $Obj->str;
echo $Obj->bold();
echo $Obj->italic();
echo $Obj->underline();
echo $Obj->capitalize();