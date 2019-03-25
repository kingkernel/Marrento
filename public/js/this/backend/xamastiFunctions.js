/*
Data de criação: 25/03/2019
Autor: Daniel J. Santos
*/
function loadTableCalled(){
	$.load('@path_to_file',{
	param1: "value1", param2: "value2"} ,
		function(){
		/* Stuff to do after the page is loaded */
	});
	
}
setInterval("loadTableCalled()", 1000);