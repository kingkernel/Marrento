<?php
class index {
	public $page;
	public function __construct(){
		$this->page = new page;
		return $this;
	}
	public function index()
	{
		$campos = ["nome" => "Daniels", "cssbootstrap" =>'<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">'];
		$this->page->loadview("templates.default.frontpage", $campos);
		/*
        if (!isset($_SESSION["LOGADO"])){
            $login = new simpleLoginBox;
            $this->page->bodycontent = $login->html();
            $this->page->render();
        } else{
            include PATHMODELO . get_class(). "_modelo/".get_class()."On.php";
        };
        */
	}
}
?>
