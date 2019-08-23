<?php
class formsTarefas{
	public function __construct(){

	}
	public function addtarefa(){
		$form = new form;
		$form->action = "/create/tarefa/";
			$campo1 = new formgroupinput;
			$campo1->labeltext = "Nome tarefa : ";
			$campo1->classcol = "col-sm-3";
			$campo1->classsizeinput = "col-sm-7";

			$campo2 = new formgroupinput;
			$campo2->labeltext = "Data Início : ";
			$campo2->classcol = "col-sm-3";
			$campo2->classsizeinput = "col-sm-2";

			$campo3 = new formgroupinput;
			$campo3->labeltext = "Data final : ";
			$campo3->classcol = "col-sm-2";
			$campo3->classsizeinput = "col-sm-3";

			$campo4 = new formgroupinput;
			$campo4->labeltext = "Descrição : ";
			$campo4->classcol = "col-sm-3";
			$campo4->classsizeinput = "col-sm-7";
			$campo4->typeinput = "textarea";

		$form->formitens = [$campo1, $campo2, $campo3, $campo4];
		
		return '<div class="col-sm-6">'.$form->html().'</div>';
	}
}
?>