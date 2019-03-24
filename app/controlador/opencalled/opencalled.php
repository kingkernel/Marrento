<?php
class opencalled{
	public function __construct(){
		$page = new page;
		$this->page = $page;
		return $this->page;
	}
	public function index(){
		$sql = 'call sp_add_teccalled('.$_POST["prob"].', '.$_POST["userid"].', "'.$_POST["descri"].'")';
		$this->page->render();
	}
}
?>