/*
Data de criação: 25/03/2019
Autor: Daniel J. Santos
@divid
@path_to_file
@params
*/
function loadTableCalled(){
	$("@divid").load('@path_to_file',{
	@params} ,
		function(){
		/* Stuff to do after the page is loaded */
	});
	
}
setInterval("loadTableCalled()", 1000);