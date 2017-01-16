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
	}

	public function italic() {
		$this->_str = '<i>' . $this->_str . '</i>';
	}

	public function underline() {
		$this->_str = '<u>' . $this->_str . '</u>';
	}

	public function capitalize() {
		$this->_str = ucfirst($this->_str);
	}

	public function uglify() {
		$this->bold();
		$this->italic();
		$this->underline();
	}
}

$Str_Normal = new StrUtils("Hello world");
$Str_Bold = new StrUtils("Yop le monde");
$Str_Bold->bold();
$Str_Italic = new StrUtils("Salut");
$Str_Italic->italic();
$Str_Underline = new StrUtils("Coucou");
$Str_Underline->underline();
$Str_Capitalize = new StrUtils("Hello");
$Str_Capitalize->capitalize();
$Str_Ugly = new StrUtils("hey !");
$Str_Ugly->uglify();
?>

<ul>
	<li>Normal : <?= $Str_Normal->getStr() ?></li>
	<li>Bold : <?= $Str_Bold->getStr() ?></li>
	<li>Italic : <?= $Str_Italic->getStr() ?></li>
	<li>Underline :	<?= $Str_Underline->getStr() ?></li>
	<li>Capitalize : <?= $Str_Capitalize->getStr() ?></li>
	<li>Ugly : <?= $Str_Ugly->getStr() ?></li>
</ul>