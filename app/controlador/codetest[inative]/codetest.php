<?php
class codetest{
	public $page;
	public function __construct(){
		$this->page = new page;
		return $this;
	}
	public function index(){
		$this->page->bodycontent = "foda-se";
		$this->page->help();
	}
}
?>