<?php
/*
data de criação: 2016
Última Alteração: 14/01/2018
*/
class auth {
	private $user;
	private $password;

	public function __construct(){
	}
	public function index(){
		/**
		captura os dados do formulario
		**/
		$this->user = $_POST["user"];
		$this->password = sha1(md5(sha1($_POST["snhpwd"])));
		//cria a query
		$sql = "call sp_login(\"$this->user\", \"$this->password\")";
		$dados = retornadbinfo($sql);
		$linha = $dados->fetch(PDO::FETCH_ASSOC);
		if ($linha["existe"] == 1){
			$_SESSION["LOGADO"]=TRUE;
			$_SESSION["usuario"] = $_POST["user"];
			//$logedUser = new authuser_campanha;
			//	$logedUser->usuario = $_SESSION["usuario"];
			//	$logedUser->loguser();
			header("Location: /");
			echo "<script>document.reload();</script>";
		} else {
			echo "login desativado ou inexistente : ";
		};
	}
	public function logout(){
		session_unset($_SESSION["LOGADO"]);
		session_destroy();
		header("Location: /");
		echo "<script>document.reload();</script>";
		echo "saiu";
	}
	public function checkAuth(){
		if(!isset($_SESSION["LOGADO"]) || !isset($_SESSION["usuario"])){
			unset($_SESSION);
			header("Location: /");
			echo "<script>document.reload();</script>";
		}
	}
	
}
?>