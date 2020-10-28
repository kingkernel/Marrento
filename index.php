<?php
/**
###################################################################################################
	ARQUIVO: index.php
  	Funções relacionados ao controlador geral do MVC. Arquivo inicial
  	Criador: Daniel José dos Santos
  	Email: daniel.santos.ap@gmail.com
 	Criação: 15/11/2017
 	Últimas alterações: 28/10/2020
###################################################################################################
**/
/**
PREPARATIVOS PARA A VERSÃO 2.0
**/
// variavel app que futuramente conterá as informações gerais da aplicação
$app = include("configapp.php");

//	inicializa a sessão para todo o site
session_start();

// declaramos algumas configurações num arquivo ini, tipo usuario, banco senha...
$_SESSION["load"]=parse_ini_file("config.ini.php", true);

//	define as constantes de localização
define ("SITENAME", $_SERVER["SERVER_NAME"]);
define ("PATHCONTROLER", __DIR__ . "/app/controlador/");
define ("PATHMODELO", __DIR__ . "/app/modelo/");
define ("PATHVISAO", __DIR__ . "/app/visao/");
define ("PATHMOTOR", __DIR__ . "/app/motor/");
define ("PUBLICDIR", "/public/");
define ("FONTES", __DIR__. "/public/fonts/net/");
define ("CLASSES", __DIR__. "/app/motor/class/");

//	Faz a leitura automática de classes. todas classes do sitema devem estar nessas pastas
//class 						-> Classes ainda em desenvolvimento e não  prontas para utilização no framework
//class/native 					-> Classes nativas e são o core principal do framework.
//class/native/front-end 		-> Classes referentes a interface de usuario devem ser colocadas nesta pasta
//class/native/back-end 		-> Classes referentes a Back-end devem ser colocadas nessa pasta
spl_autoload_register(function ($class_name) {
	if (file_exists(PATHMOTOR . "class/" . $class_name . '.class.php')){
		include PATHMOTOR . "class/" . $class_name . '.class.php';
	} elseif (file_exists(PATHMOTOR . "class/native/front-end/" . $class_name . '.class.php')) {
		include PATHMOTOR . "class/native/front-end/" . $class_name . '.class.php';
	} elseif(file_exists(PATHMOTOR . "class/native/back-end/" . $class_name . '.class.php')){
		include PATHMOTOR . "class/native/back-end/" . $class_name . '.class.php';
	} else {
		include PATHMOTOR . "class/native/" . $class_name . '.class.php';
	};
});
// Arquivo com as funções principais e básicas do sistema
require(PATHMOTOR."engine.php");
//	se existir o conteudo digitado, aceite, se não, o conteudo se torna "index/index"
if (isset($_GET["url"]) ? $_GET["url"] . "/" : $_GET["url"] = "index/index");
//	separe o que foi digitado, por barras e transforme a variavel em array, convertendo em minúsculo
$parametros = explode("/", strtolower($_GET["url"]));
//	se o parametro existir aceite o parametro, se não, torna-se "index";
if(isset($parametros[0]) ? $parametros[0] : $parametros[0] = "index");
//	criamos uma variavel com o caminho do controlador
$pathmotor = PATHCONTROLER;
//	transforma o conteudo do controlador em array
$buscapath = scandir($pathmotor);
/**	
###################################################################################################
	Se o parametro digitado estiver dentro do array (existir no controlador),
	então inclua neste index seu conteudo.
###################################################################################################
 **/
if (in_array($parametros[0], $buscapath) == true){
	//	caso exista inclue seu conteudo sera incluí­do
	include_once($pathmotor . $parametros[0] . "/" . $parametros[0] . ".php");

	// Caso o parametro 1 existir aceite, do contrario atribua o valor index
		if (isset($parametros[1]) ? $parametros[1] : $parametros[1] = "index");

		if(isset($parametros[1]) != false) {
			$page = new $parametros[0]();
			// caso alguém digite a barra vazia sem parametros.
			if ($parametros[1] == ""){
				// atribuimos index que é o padrão
				$parametros[1] = "index";
				};			
				//caso digitem alguma coisa inexistente
			if (method_exists($page, $parametros[1]) == true){
				//se o argumento for valido execute o metodo
				$page->{$parametros[1]}();
				} else {
					//caso contrario, exit
					echo "Argumento invalido : <b>" . $parametros[1]."</b>";
					header("Location: /");
					echo "<script>document.reload();</script>";
					exit;
				};	
		};
		// caso o que foi digitado na url não existir, exiba a mensagem
	} else {
		$error = "E"."404";
			include("pagesError.php");
			$page = new pagesError;
			$page->$error();
		};
?>