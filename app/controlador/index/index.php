<?php
class index {
	public $page;
	public function __construct()
	{
		$this->page = new page;
		return $this;
	}
	public function index()
	{
		if (!isset($_SESSION["LOGADO"]))
		{
			$campos = ["cssinterface" => "public/css/bootstrap/4.0.0-alpha.4/bootstrap.min.css", "cssbootstrap", "javascript-interface" => "public/js/bootstrap/4.0.0-alpha.4/bootstrap.min.js", "jslibrary" => '<script type="text/javascript" src="public/js/jquery/3.3.1/jquery-3.3.1.slim.min.js"></script>', 'version'=>'1.0.0'];

			$this->page->loadview("templates.crmaster.frontpage", $campos);
		} else {
			$campos = ["cssbootstrap" =>'<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">', 'jsbootstrap' => '<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script><script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>' ];
			$this->page->loadview("templates.acerta.logado", $campos);
		}

	}
}
?>
