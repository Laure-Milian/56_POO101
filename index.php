<?php

Class StrUtils {

	private $_str;

	public function __construct($newString) {
		$this->_str = $newString;
	}

	public function getStr() {
		return $this->_str;
	}

	public function bold() {
		$this->_str = '<strong>' . $this->_str . '</strong>';
		return $this->_str ;
	}

	public function italic() {
		$this->_str = '<i>' . $this->_str . '</i>';
		return $this->_str ;
	}

	public function underline() {
		$this->_str = '<u>' . $this->_str . '</u>';
		return $this->_str ;
	}

	public function capitalize() {
		$this->_str = ucfirst($this->_str);
		return $this->_str;
	}

	public function uglify() {
		$this->bold();
		$this->italic();
		$this->underline();
		return $this->_str;
	}
}

$Str_Normal = new StrUtils("Hello world");
$Str_Bold = new StrUtils("Yop le monde");
$Str_Italic = new StrUtils("Salut");
$Str_Underline = new StrUtils("Coucou");
$Str_Capitalize = new StrUtils("Hello");
$Str_Ugly = new StrUtils("hey !");
?>

<ul>
	<li>Normal : <?= $Str_Normal->getStr() ?></li>
	<li>Bold : <?= $Str_Bold->bold() ?></li>
	<li>Italic : <?= $Str_Italic->italic() ?></li>
	<li>Underline :	<?= $Str_Underline->underline() ?></li>
	<li>Capitalize : <?= $Str_Capitalize->capitalize() ?></li>
	<li>Ugly : <?= $Str_Ugly->uglify() ?></li>
</ul>