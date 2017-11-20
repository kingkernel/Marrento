<?php
class pesquisa{
	public function index(){
		$tabela = new load_table;
		$tabela->db = $GLOBALS["DB"];
		$tabela->conectdb();
		$tabela->table = "bairros";
		//$tabela->create_insert();
		//print_r($tabela->db);
		
	}
}
?>