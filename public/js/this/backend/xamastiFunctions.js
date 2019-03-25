/*
Data de criação: 25/03/2019
Autor: Daniel J. Santos
@divid:  id que será aplicado o ajax
@path_to_file: localização do serviço
@params: parametros adicionais na requisição
*/
function loadTableCalled(){
	$("@divid").load('@path_to_file',{
	@params
	});
}
setInterval("loadTableCalled()", 3000);