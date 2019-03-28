<?php
/*
Data criação: 28/03/2019
*/
class acao {
	public function __construct(){
		$page = new page;
		$this->page = $page;
		return $this->page;
	}
	public function index (){

	}
	public function chamados(){
		$sql = "call sp_sel_teccalled()";
		$query = queryDb($sql);
		$dados =$query->fetch(PDO::FETCH_ASSOC);
		//print_r($dados);
		// [id] => 1 [nameperson] => root [prob] => Impressora não imprime [estatus] => Aberto [opencalled] => 2019-03-25 10:56:51 [description] => Preciso imprimir relatórios
		$table = new table;
		$this->page->render();
	}
}
?>