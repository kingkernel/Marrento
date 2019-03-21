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
/*
            [language] => pt-br
            [titlepage] => 
            [headersinclude] => <link href="../public/css/bootstrap.min.css" rel="stylesheet"><link href="../public/css/bootstrap-theme.min.css" rel="stylesheet"><script src="../public/js/jquery-1.11.1.min.js"></script><script src="../public/js/bootstrap.min.js"></script><style type="text/css">.label,.glyphicon, .fa{ margin-right:5px; }</style>
            [bodyextras] => 
            [bodycontent] => 
            [outrosmeta] => 
            [scriptsendpage] => 
            [jsendbody] => 
            [posScript] => 
*/
?>
