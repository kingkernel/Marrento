/*
Data de criação: 25/03/2019
Autor: Daniel J. Santos
@divid:  id que será aplicado o ajax
@path_to_file: localização do serviço
@params: parametros adicionais na requisição
*/

/*
function loadTableCalled(){
	$("@divid").load('@path_to_file',{
	@params
	});
}
setInterval("loadTableCalled()", 3000);
##################################################
function alert3000(){
	document.alert("esta funcionando a cada 3s");
}
setInterval("alert()", 3000);
*/
function loadTableCalled(){
	$("#ajxdiv001").load('./ajax/loadTableCalled');
}
setInterval("loadTableCalled()", 3000);