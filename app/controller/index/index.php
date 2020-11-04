<?php
class index  extends page {
	public function __construct()
	{
	}
	public function index()
	{
		if (!isset($_SESSION["LOGADO"]))
		{	
			$path = "/app/view/templates/startbootstrapadmin/";	
			$fields = ["pathtemplate" => $path,
				"title"=>"KingBusca - Encontre Produtos, Serviços ou Aluguel"];
			$this->loadview($this->subsfields("templates.startbootstrapadmin.index", $fields),$fields);
		} else {
			$info = json_decode($_SESSION["userinfo"], true);
			switch ($info["typeaccount"])
			{
				case "free":
				echo "conta gratis";
				break;

				case "tester":
				echo "conta de testers";
				break;
			};
			//$this->loadview("templates.startbootstrapadmin.index");
		}
	}
}
?>
