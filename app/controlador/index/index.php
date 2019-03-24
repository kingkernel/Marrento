<?php
class index {
	public $page;
	public function __construct(){
		$this->page = new page;
		return $this;
	}
	public function index(){
        if (!isset($_SESSION["LOGADO"])){
            $login = new simpleLoginBox;
            $this->page->bodycontent = $login->html();
            $this->page->render();
        } else{
            include PATHMODELO . get_class(). "_modelo/".get_class()."On.php";
        };
	}
}
?>
