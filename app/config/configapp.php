<?php
/**
###############################################################################
	ARQUIVO: configapp.php
  	parametros de configuração da aplicação retornado dentro da variável $app
  	Criador: Daniels Hogans
  	Email: daniel.santos.ap@gmail.com
 	Criação: 28/10/2020
 	Últimas alterações: 28/10/2020
###############################################################################
@param: defaultdatabase => array contendo informações do banco de dados padrão.
@return: array com informações
**/
return 	["version" => "2.0 codname:Vegeta",
	"defaultdatabase"=>
	[
	"database" 	=>"database",
	"user"		=>"user",
	"password"	=>"password",
	"host"	 	=>"ip"
	]];
?>