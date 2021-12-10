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
return 	["version" 	=> "2.0 codname:Vegeta",
	"secret_key" 	=> "kingkernel é sucesso",
	"hash_system" 	=> "e28c185ec3d74acfa605da189c71bcf0",
	"defaultdatabase"=>
	[
	"database" 	=>"kingbusca",
	"user"		=>"root",
	"password"	=>"",
	"host"	 	=>"localhost"
	]];
?>