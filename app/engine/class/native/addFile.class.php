<?php
/**
Data de criação: 23/02/2018
Data Alteração: 23/02/2018
**/
class addFile{
	$files = [];
	$addContent;
	public function __construct(){

	}
	public function addCss(){

	}
	public function js($files){
		foreach ($files as $key => $value) {
		$this->addContent .= '<script type="text/javascript" src="'.$value.'"></script>';
		};
		return $this->addContent;
	}
	public function includePhp(){

	}
}
?>