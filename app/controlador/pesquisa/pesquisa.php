<?php
class pesquisa{
	public function index(){
		$tabela = new load_table;
		$tabela->db = $GLOBALS["DB"];
		$tabela->conectdb();
		//$tabela->table = "bairros";
		//$tabela->create_insert();
		//print_r($tabela->db);
		//$dados = array('nome varchar(10)', "argumento varchar(50)", "idade date");
		//$tabela->create_procedure_add("sp_add_bairros","bairros");
		
	}
}
?>