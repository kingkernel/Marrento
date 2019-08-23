<?php
class eleitorForms {
	public $cadIn;
	public $cadInAuth;
	public function __construct(){

	}
	public function cadastroIn(){
		// campos do formulário
		
			$nome = new inputAddOn;
				$nome->inputPlaceholder = "Nome do Eleitor";
				$nome->inputIcon = "glyphicon glyphicon-user";
				$nome->inputName = "eleitor";

			$city = new inputAddOn;
				$city->inputPlaceholder = "Cidade";
				$city->inputIcon = "glyphicon glyphicon-globe";
				$city->inputName = "cidade";

			$bairro = new inputAddOn;
				$bairro->inputPlaceholder = "Bairro";
				$bairro->inputIcon = "glyphicon glyphicon-map-marker";
				$bairro->inputName = "bairro";

			$rua = new inputAddOn;
				$rua->inputPlaceholder = "Rua";
				$rua->inputIcon = "glyphicon glyphicon-road";
				$rua->inputName = "rua";

			$numero = new inputAddOn;
				$numero->inputPlaceholder = "Número";
				$numero->inputIcon = "glyphicon glyphicon-home";
				$numero->inputName = "numero";

			$email = new inputAddOn;
				$email->inputPlaceholder = "E-mail";
				$email->inputIcon = "glyphicon glyphicon-envelope";
				$email->inputName = "email";

			$fone1 = new inputAddOn;
				$fone1->inputPlaceholder = "Fone 1";
				$fone1->inputIcon = "glyphicon glyphicon-phone";
				$fone1->inputName = "fone1";

			$fone2 = new inputAddOn;
				$fone2->inputPlaceholder = "Fone 2";
				$fone2->inputIcon = "glyphicon glyphicon-phone";
				$fone2->inputName = "fone2";

			$zap = new inputAddOn;
				$zap->inputPlaceholder = "Whatsapp";
				$zap->inputIcon = "fa fa-whatsapp";
				$zap->inputName = "zap";

 			$face = new inputAddOn;
				$face->inputPlaceholder = "http://Facebook.com/<<seu_nome_ou_ID>>";
				$face->inputIcon = "fa fa-facebook-official";
				$face->inputName = "face";

			$lider = new input_checkbox;
				$lider->name="lider";
				$lider->value="1";

		$hidden1 = '<input type="hidden" name="licenca" value="'.$_SESSION["userinfo"]["idlicenca"].'">';
		$hidden2 = '<input type="hidden" name="iduser" value="'.$_SESSION["userinfo"]["id"].'">';
		$submit = '<input type="submit" value="cadastrar" class="btn btn-primary pull-right" style="margin:10px" id="cadEleitorBtn">';

			$this->cadIn[0] = $nome->html().$city->html().$bairro->html().$rua->html().$numero->html().'<span class="input-group-addon" id="lidertheme"><i class="fa fa-bullhorn pull-left"></i><span><strong>Liderança ?</strong></span>'.$lider->html().'</span>';
			$this->cadIn[1] = $email->html().$fone1->html().$fone2->html().$zap->html().$face->html().$hidden1.$hidden2.$submit;
			$this->cadIn[2] = '$("#id_'.$fone1->inputName.'").mask(\'(99) 99999-9999\');$("#id_'.$fone2->inputName.'").mask(\'(99) 99999-9999\');$("#id_'.$zap->inputName.'").mask(\'(99) 99999-9999\');$("#cadEleitorBtn").click(function(){/* variaveis */var nome = $("#id_'.$nome->inputName.'").val();var cidade = $("#id_'.$city->inputName.'").val();var bairro = $("#id_'.$bairro->inputName.'").val();var rua = $("#id_'.$rua->inputName.'").val();var numero = $("#id_'.$numero->inputName.'").val();var email = $("#id_'.$email->inputName.'").val();var fone1 = $("#id_'.$fone1->inputName.'").val();var fone2 = $("#id_'.$fone2->inputName.'").val();var zap = $("#id_'.$zap->inputName.'").val();var face = $("#id_'.$face->inputName.'").val();var hidden1 = "'.$_SESSION["userinfo"]["idlicenca"].'";var lider = "";var iduser = "'.$_SESSION["userinfo"]["id"].'";/* autenticação de campos *//* nome do eleitor */if(nome == ""||nome==null){alert("é preciso o nome do eleitor");$("#id_'.$nome->inputName.'").addClass("white label-warning");$("#id_'.$nome->inputName.'").focus();return false;};/* cidade */if(cidade == ""|| cidade ==null){alert("Qual a cidade do Eleitor?");$("#id_'.$city->inputName.'").addClass("white label-warning");$("#id_'.$city->inputName.'").focus();return false;};/* envio de dados */if($("#idchkbtn").is(":checked")){lider="1"}; $("#ajax").load("'.(urlcss($_GET)).'grava/eleitor/",{eleitor:nome, cidade:cidade, licenca:hidden1, iduser:iduser, bairro:bairro, rua:rua, numero:numero, email:email, fone1:fone1, fone2:fone2, zap:zap, face:face, lider:lider});});';
			$this->cadIn[3] = $lider->addcss.'#lidertheme{border: 1px solid #ccc; border-radius:4px}';
			return $this->cadIn;
	}
	public function cadastroInAuth(){
		$this->cadInAuth;
		return $this->cadInAuth;
	}
	
}
?>