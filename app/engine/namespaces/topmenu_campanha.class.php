<?php
/*
Data criação: 17/02/2018
Última alteração: 17/02/2018
*/
class topmenu_campanha {
	public $nav;
	public function __construct(){	
	}
	public function html(){
		$nav = new topnav;
		$nav->brand = " Campanha ";
		$relatorio = new li_dropdown;
			$relatorio->text = "Relatórios";
			//$relatorio->link = "/report/";
			$relatorio->iconclass = "glyphicon glyphicon-list-alt";
				$resumos = new li_item;
				$resumos->text = "Resumos";
				$resumos->link = "/reports/resumos/";
				
				$divider = new divider;

				$porcidades = new li_item;
				$porcidades->text = "Por Cidades";
				$porcidades->link = "/reports/porcidades/";

				$porbairros = new li_item;
				$porbairros->text = "Por Bairros";
				$porbairros->link = "/reports/porbairros/";

			$relatorio->subitem = [$resumos, $divider, $porcidades, $porbairros];

		$mapa = new li_item;
			$mapa->text = "Mapa" ;
			$mapa->iconclass = "glyphicon glyphicon-globe";
			$mapa->link = "/mapa/";

		$message = new li_dropdown;
		$sql = 'call sel_newmessages("'.$_SESSION["userinfo"]["id"].'")';
			try {
				$query = retornadbinfo($sql);
				$dataMsg = $query->fetch(PDO::FETCH_ASSOC);
				if($dataMsg["novas"] == 0){
					$dataMsg["novas"] = "";
				};
			} catch (Exception $e) {
				$dataMsg["novas"] = "";
			}
			$message->text = 'Mensagens <span class="badge">' .$dataMsg["novas"]."</span>";
			$message->iconclass = "glyphicon glyphicon-envelope";
			$message->link = "/messages/";
				$msg = new li_item;
				$msg->text = "Geral";
				$msg->link = "/messages/";

				$novamsg = new li_item;
				$novamsg->text = "Escrever";
				$novamsg->link = "/messages/neweditor/";

				$msggroup = new li_item;
				$msggroup->text = "Lista (grupo)";
				$msggroup->link = "/messages/groupmsg/";
			
			$divider = new divider;

			$message->subitem = [$msg, $divider, $novamsg/*, $msggroup */];

		$use_info = new li_user_info;
		$use_info->nomedisplay = $_SESSION["userinfo"]["nome"];
		$use_info->exitlink = "/auth/logout/";
		$use_info->updataidlink = "/user/update/";

		$cadastro = new li_dropdown;
		$cadastro->text = "Cadastro";
		$cadastro->iconclass = "glyphicon glyphicon-plus-sign";
			$assessor = new li_item;
			$assessor->text = "Lideres";
			$assessor->link = "/create/assessor/";
			$eleitor = new li_item;
			$eleitor->text = "Simpatizantes";
			$eleitor->link = "/create/eleitor/";
		$cadastro->subitem = [$assessor, $eleitor];

		$tarefas = new li_dropdown;
		$tarefas->text = "Tarefas";
		$tarefas->iconclass = "fa fa-cogs";
			$add = new li_item;
			$add->text = "Adicionar tarefa";
			$add->link = "/tarefas/novatarefa/";
		$tarefas->subitem = [$add];

	$nav->itensleft = [$cadastro, $relatorio/*, $mapa */, $message, $tarefas];
	$nav->itensright = [$use_info];
			$bottombar = new navBottom;
			$bottombar->messagesCount = $dataMsg["novas"];
	$this->nav = $nav->html().$bottombar->html();;
	return $this->nav;
	}
}
?>