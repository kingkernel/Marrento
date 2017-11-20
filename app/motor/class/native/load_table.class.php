<?php
class load_table{
	public $db;
	public $table;
	public $namestables = [];
	public $tablecamp;
	public $primarykey;
	public $sql;

	public function __construct(){
		
	}
	public function conectdb(){
		$this->sql = "show tables";
		$query = $this->db->query($this->sql);
		while ($dados = $query->fetch(PDO::FETCH_NUM)) {
			array_push($this->namestables, $dados[0]);
		};
		//print_r($this->namestables);
		foreach ($this->namestables as $key => $value) {
			echo "<strong>tabela nome: </strong>". $value ."<br/>";
			$this->sql = "describe ".$value;	
			$query = $this->db->query($this->sql);
			$campos = array();
			$camposclone = array();
			while ($dados = $query->fetch(PDO::FETCH_ASSOC)) {
				//print_r($dados);
				if ($dados["Key"] == "PRI" && $dados["Extra"] =="auto_increment"){
				}else{
				array_push($campos, $dados["Field"]);
				array_push($camposclone, "@" . $dados["Field"]);
				}
				$presql2 = implode(", ", $campos);
				$presql3 = implode(", ", $camposclone);
			};
			$presql1 = "insert into ".$this->table ." (". $presql2 . ") values (".$presql3.");";
			echo $presql1 . "<br/>";
			//print_r($campos);
		};
		/*
		foreach ($this->namestables) {
			print_r($dados);
		};
		//$this->sql = "describe"
		//$this->namestables;
		*/
	}
	public function create_insert(){
		$this->table;
		$presql1 = "insert into ".$this->table ." (";
		echo $presql1;	
	}
	public function create_delete(){

	}
	public function create_update(){

	}
	public function query_full(){

	}
	public function query_simple(){

	}
	public function create_procedure_add(){

	}
	public function create_procedure_del(){
		
	}
	public function create_procedure_sel(){
		
	}
}
?>