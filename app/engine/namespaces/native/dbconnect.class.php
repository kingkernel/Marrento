<?php
/*
data criação: 19/11/2017
*/
class dbconnect{
	private $load;
	private $database;
	private $password;
	private $host;
	public $db;

	public function __construct(){
		if(!isset($this->load)){$this->load = $_SESSION["load"]["banco_de_dados"];};
	}
	public function connect(){
/*
***************************************************************************************************
a função connect tenta fazer conexão com o banco ONLINE, caso a mesma falhe... realiza a conexão 
com o banco OFFLINE.
Caso esteja offline, inicializa a classe de sincronismo que armazena todas as querys ao banco.
***************************************************************************************************
*/
		try {
			// tenta a conexão online
			$pdo = new pdo($this->load["driver"] . ":dbname=". $this->load["banco"] . ";charset=UTF8;host=" . $this->load["host"] . ";" , $this->load["usuario"], $this->load["senha"]);
			// atribui o valor a variavel de retorno
			$this->db = $pdo;
			// avisa ao sistema o modo do banco de dados
			$_SESSION["dbmode"] = "online";
		} catch (Exception $e) {
			// como online falhou, atribui os valores do banco local [offline]
			$this->load = $_SESSION["load"]["offlinedb"];
			// inicializa o pdo
			$pdo = new pdo($this->load["driver"] . ":dbname=". $this->load["banco"] . ";charset=UTF8;host=" . $this->load["host"] . ";" , $this->load["usuario"], $this->load["senha"]);
			// atribui o valor a variavel de retorno
			$this->db = $pdo;
			// avisa ao sistema o modo do banco de dados
			$_SESSION["dbmode"] = "online";
		}
	return $this->db;
	}

}
?>
