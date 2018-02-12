<?php
class outputJsValid{
	public $nameFunction;
	public $idBtn;
	public function __construct(){

	}
	public function render(){
		echo '$("#'.$submit->id.'").click(function(){
				if($("#'.$senha->id.'").val() !== $("#'.$resenha->id.'").val()){
					alert("as senhas não batem!");
					return false;
				};
			
			//document.forms[0].submit();
		});';
	}
}
?>