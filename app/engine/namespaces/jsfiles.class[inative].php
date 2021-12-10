<?php
class jsfiles{
	public $orders = [];
	public function __construct(){

	}
	public function include($file, $location){
		$preOrder = '<script src="'.$location.'/'.$file.'"></script>';
		array_push($this->orders, $preOrder);
	}
}
?>