<?php
class pagesError {
	public function __construct(){

	}
	public function E404(){
		//echo "GET FILE";
		//print_r($_SESSION);
		$var = explode("/", $_GET["url"]);
		include("app/controller/".$var[0]."/".$var[0].".php");
		//$test = new $var[0];
		echo __DIR__;
		//$methods = get_class_methods($test);
		//print_r($methods);
	}
}
?>