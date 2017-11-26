<?php
class load_table{
	/*
	Data de Criação: 		22/11/2017
	Última Alteração:		26/11/2017
	*/
	public $db;
	public $table;
	public $namestables = [];
	public $tablecamp;
	public $primarykey;
	public $sql;

	public function __construct(){
		
	}
	public function loadAllDb(){
		//declaramos o camando para mostrar todas as tabelas do banco de dados
		$this->sql = "show tables";
		// executamos a query no banco
		$query = $this->db->query($this->sql);
		//percorremos os dados e colocamos em um array os nomes das tabelas
		while ($dados = $query->fetch(PDO::FETCH_NUM)) {
			array_push($this->namestables, $dados[0]);
		};
		//agora em cada tabela....
		foreach ($this->namestables as $key => $value) {
			echo "<br/><strong>tabela nome: </strong>". $value ."<br/>";
			// solicitamos a descrição para ver serus campos
			$this->sql = "describe ".$value;
			// executamos a query de descrição da tabela
			$query = $this->db->query($this->sql);
			$campos = [];
			$camposclone = [];
			$procedureargs = [];
			while ($dados = $query->fetch(PDO::FETCH_ASSOC)) {
				//caso seja chave primaria, e auto_increment, não será adicionado no array
				if ($dados["Key"] != "PRI" && $dados["Extra"] !="auto_increment"){
				array_push($campos, $dados["Field"]);
				array_push($camposclone, "@" . $dados["Field"]);
				array_push($procedureargs, $dados["Field"]. " " .$dados["Type"]);
				};
				$presql2 = implode(", ", $campos);
				$presql3 = implode(", ", $camposclone);
			};
			$presql1 = "insert into ".$this->table ." (". $presql2 . ") values (".$presql3.");";
			echo $presql1 . "<br/>";
			$this->create_procedure_add("sp_add_".$value, $value);
			$this->create_procedure_del("sp_del_".$value, $value);
			$this->create_procedure_sel("sp_sel_".$value, $value);
			$this->create_procedure_update("sp_up_".$value, $value);
		};

	}
	public function create_procedure_add($nome, $tabela){
		$sql = "describe ".$tabela;
		$query = $this->db->query($sql);
		// contem somento os nome dos campos
		$campos1 = [];
		// nome dos campos como argumento e tipo de dados
		$campos2 = [];
		while ($dados = $query->fetch(PDO::FETCH_ASSOC)){
			//caso seja chave primaria, e auto_increment, não será adicionado no array
			if ($dados["Key"] != "PRI" && $dados["Extra"] !="auto_increment"){
				//criando array soimente com o nome dos campos
				array_push($campos1, $dados["Field"]);
				//criando array com "arg" nome e tipo
				array_push($campos2, "arg_".$dados["Field"]. " " .$dados["Type"]);
			};
		};		
		$arg = [];
		foreach ($campos1 as $key => $value) {
			array_push($arg, "arg_".$value);
		};
		//transformando array em string
		$parametros = implode(", ", $campos2);
		$campos1 = implode(", ", $campos1);
		$arg = implode(", ", $arg);
		//Jogando na tela
		echo "delimiter // \n \t\t create procedure ".$nome. "(" .$parametros.")\n \t\t\t begin\n \t\t\t\tinsert into ".$tabela." (".$campos1.") values(".$arg.");\n \t\t\t end //\n delimiter ;\n\n";
	}
	public function create_procedure_del($nome, $tabela){
		/*
		verificar as possibilidades com e sem aspas.. int e texto....
		*/
		$sql = "describe ".$tabela;
		$query = $this->db->query($sql);
		//chave primaria
		$chave;
		$arg = [];
		while ($dados = $query->fetch(PDO::FETCH_ASSOC)){
			if($dados["Key"] == "PRI"){
				$arg = ["campo" => $dados["Field"], "tipo" =>$dados["Type"]];
			};
		};
		echo "delimiter // \n \t\t create procedure ".$nome. "( arg_".$arg["campo"]." ".$arg["tipo"].")\n \t\t\t begin\n \t\t\t\tdelete from ".$tabela." where ".$arg["campo"]."=arg_".$arg["campo"]."; \n \t\t\t end //\n delimiter ;\n\n";
	}
	public function create_procedure_sel($nome, $tabela){
		$sql = "describe ".$tabela;
		$query = $this->db->query($sql);
		//chave primaria
		$chave;
		$arg = [];
		while ($dados = $query->fetch(PDO::FETCH_ASSOC)){
			if($dados["Key"] == "PRI"){
				$arg = ["campo" => $dados["Field"], "tipo" =>$dados["Type"]];
			};
		};
		echo "delimiter // \n \t\t create procedure ".$nome. "( arg_".$arg["campo"]." ".$arg["tipo"].")\n \t\t\t begin\n \t\t\t\tselect * from ".$tabela." where ".$arg["campo"]."=\"arg_".$arg["campo"]."\"; \n \t\t\t end //\n delimiter ;\n\n";

	}
	public function create_procedure_update($nome, $tabela){
		$sql = "describe ".$tabela;
		$query = $this->db->query($sql);
		// contem somento os nome dos campos
		$campos1 = [];
		// nome dos campos como argumento e tipo de dados
		$campos2 = [];
		$campos3 = [];
		$chave;
		while ($dados = $query->fetch(PDO::FETCH_ASSOC)){
			//caso seja chave primaria, e auto_increment, não será adicionado no array
			if ($dados["Key"] != "PRI" && $dados["Extra"] !="auto_increment"){
				//criando array soimente com o nome dos campos
				array_push($campos1, $dados["Field"]);
				//criando array com "arg" nome e tipo
				array_push($campos2, "arg_".$dados["Field"]." ".$dados["Type"]);
				array_push($campos3, "arg_".$dados["Field"]);
			};
			if($dados["Key"] == "PRI"){
				$arg = ["campo" => $dados["Field"], "tipo" =>$dados["Type"]];
			};
		};
		$parametros = implode(", ", $campos2);
		$campos = implode(", ", $campos1);
		echo "delimiter // \n \t\t create procedure ".$nome. "(arg_".$arg["campo"]." ".$arg["tipo"].", ".$parametros.")\n \t\t\t begin\n \t\t\t\tupdate ".$tabela." set ";
		$campos4 = array_combine($campos1, $campos3);
		$campos5 = [];
		foreach ($campos4 as $key => $value) {
			array_push($campos5, "$key=$value");
		};
		$campos5 = implode(", ", $campos5);
		echo $campos5 . " where ".$arg["campo"]."=arg_".$arg["campo"].";\n \t\t\t end //\n delimiter ;\n\n";
	}
}
?>