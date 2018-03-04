<?php
/*
Data de criação:02/03/2018
Autor: Daniel J. Santos
*/
class query {
	public $sql;
	public function __construct(){

	}
	public function getRows($this->sql){
		$pdo = new pdo($_SESSION["load"]["banco_de_dados"]["driver"].":dbname=". $_SESSION["load"]["banco_de_dados"]["banco"] . ";charset=UTF8;host=".$_SESSION["load"]["banco_de_dados"]["host"].";",$_SESSION["load"]["banco_de_dados"]["usuario"],$_SESSION["load"]["banco_de_dados"]["senha"]);
        $result = $pdo->query($this->sql);
    return $result;
	}
	public help(){
		include(PUBLICDIR .get_class()."/"."index.html");
		        //$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
		    /*
    # declare uma variavel com a sql
    # coloque em um laço e imprima como quiser.
        while ($linha = $dados->fetch(PDO::FETCH_ASSOC)) {
            echo $linha["email"] . "<br/>";
        };
    */
	}
}
?>