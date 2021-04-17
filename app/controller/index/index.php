<?php
class index  extends page {
	public function __construct()
	{
	}
	public function index()
	{
		if (!isset($_SESSION["logged"]))
		{
			$this->loadview('templates.bolaofrontcreated.model');
		} else {
			$this->loadview('templates.bolaofrontcreated.logontopmenu');
		}
		/*
		$path = "/app/view/templates/startbootstrapadmin/";	
		$fields = ["pathtemplate" => $path,
				"title"=>"KingBusca - Encontre Produtos, Serviços ou Aluguel"];
		if (!isset($_SESSION["LOGADO"]))
		{	
			$this->loadview($this->subsfields("templates.startbootstrapadmin.index", $fields),$fields);
		} else {
			$info = json_decode($_SESSION["userinfo"], true);
			$fields["nome"] = $info["nome"];
			switch ($info["typeaccount"])
			{
				case "free":
				$this->loadview("templates.startbootstrapadmin.indexlogon", $fields);
				break;

				case "tester":
				echo "conta de testers";
				break;
			};
		}
		*/
		
	}
}
?>
