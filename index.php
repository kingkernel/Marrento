<?php
/**
###################################################################################################
	ARQUIVO: index.php
  	Funções relacionados ao controlador geral do MVC
  	Criador: Daniel José dos Santos
 	Criação: 15/11/2017
 	Últimas alterações: 15/11/2017
###################################################################################################
**/
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
define ("PUBLICDIR", __DIR__. "/public/");
define ("FONTES", __DIR__. "/public/fonts/net/");
//	faz a leitura automática de classes. todas classes do sitema devem estar nessa pasta
spl_autoload_register(function ($class_name) {
    include PATHMOTOR . "class/" . $class_name . '.class.php';
});
// Arquivo com as funções principais e básicas do sistema
require(PATHMOTOR."kk-motor-01.php");
//	se existir o conteudo digitado, aceite, se não, o conteudo se torna "index/index"
if (isset($_GET["urldigitada"]) ? $_GET["urldigitada"] . "/" : $_GET["urldigitada"] = "index/index");
//	separe o que foi digitado, por barras e transforme a variavel em array, convertendo em minúsculo
$parametros = explode("/", strtolower($_GET["urldigitada"]));
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
				$page->$parametros[1]();
				} else {
					//caso contrario, exit
					echo "Argumento invalido : <b>" . $parametros[1]."</b>";
					exit;
				};	
		};
		// caso o que foi digitado na url não existir, exiba a mensagem
	} else {
		echo "Módulo inexistente, ou inativado!";
		};
?>