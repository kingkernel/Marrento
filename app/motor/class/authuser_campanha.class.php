<?php
class authuser_campanha{
	public $usuario;
	public function __construct(){

	}
	public function loguser(){
		switch ($_SESSION["table"]) {
			case 'auth_u':
			$sql = 'call sp_authuser("'.$this->usuario.'")';
			$query = retornadbinfo($sql);
			$data = $query->fetch(PDO::FETCH_ASSOC);
				$_SESSION["userinfo"]["email"] = $data["email"] ;
				$_SESSION["userinfo"]["id"] = $data["id"];
				$_SESSION["userinfo"]["nome"] = $data["nome"];
				$_SESSION["userinfo"]["idlicenca"] = $data["idlicenca"];
				$_SESSION["userinfo"]["nomelicenca"] = $data["nomelicenca"];
				$_SESSION["userinfo"]["dataexpiracao"] = $data["dataexpiracao"];
				break;
			case 'auth_e':
			$sql = 'call sp_autheleitor("'.$this->usuario.'")';
			$query = retornadbinfo($sql);
			echo $sql;
			$data = $query->fetch(PDO::FETCH_ASSOC);
				$_SESSION["userinfo"]["email"] = $data["email"] ;
				$_SESSION["userinfo"]["id"] = $data["id"];
				$_SESSION["userinfo"]["nome"] = $data["nome"];
				$_SESSION["userinfo"]["idlicenca"] = $data["idlicenca"];
				$_SESSION["userinfo"]["nomelicenca"] = $data["nomelicenca"];
				$_SESSION["userinfo"]["dataexpiracao"] = $data["dataexpiracao"];
				break;
		};
	}
}
?>