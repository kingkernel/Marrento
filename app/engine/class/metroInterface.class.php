<?php
class MetroInterface {
	public $method = "true";			// true || false
	public $cdn	='<link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-all.min.css">';
	public $jsendpage = '<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script><script href="https://cdn.metroui.org.ua/v4/js/metro.min.js"></script>';
	public $content;
	public function __construct(){

	}
	public function html(){
		if ($this->method == "true"){
		return $this->content = $cdn;
		}
		
	}
}
?>