<?php
class opencalled{
	public function __construct(){

	}
	public function index(){
		$sql = 'call sp_add_teccalled('.$_POST["prob"].', '.$_POST["userid"].', "'.$_POST["descri"].'")';
		echo $sql;
	}
}
?>