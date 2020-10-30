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
			//$this->loadview("templates.deskapp.index", $fields);
			$this->loadview($this->subsfields("templates.startbootstrapadmin.index", $fields),$fields);
		} else {
			$this->loadview("templates.acerta.logado", $campos);
		}
	}
}
?>
