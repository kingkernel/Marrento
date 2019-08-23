<?php
class painelAdministrativo extends auth {
	public function __contruct(){
		$this->index();
	}
	public function index(){
		//print_r($_POST);
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
				$_SESSION["table"] = "auth_u";

				$logedUser = new authuser_campanha;
					$logedUser->usuario = $_SESSION["usuario"];
					$logedUser->loguser();
				header("Location: /");
				echo "<script>document.reload();</script>";
			} else {
				$sql = "call sp_login_e(\"$this->user\", \"$this->password\")";
				$dados = retornadbinfo($sql);
				$linha = $dados->fetch(PDO::FETCH_ASSOC);
					if($linha["existe"] == "1"){
					$_SESSION["LOGADO"]=TRUE;
					$_SESSION["usuario"] = $_POST["user"];
					$_SESSION["table"] = "auth_e";
						$logedUser = new authuser_campanha;
							$logedUser->usuario = $_SESSION["usuario"];
							$logedUser->loguser();
						header("Location: /");
						echo "<script>document.reload();</script>";
				};
			include("pagesError.php");
			$error = new pagesError;
			$error->e404();
			echo "login desativado ou inexistente : ";
			};
	}
}
?>