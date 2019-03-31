<?php
/*
Data criação: 25/03/2019
Autor: Daniel J. Santos
Última Alteração: 25/03/2019
*/
$page = new page;
$page->headersinclude .= fontAwesome(urlcss($_GET));

	$topmenu =  new topnav;
	$topmenu->brand = $_SESSION["load"]["company"]["name"]. ' <span class="fa fa-headphones"></span>';

		$use_info = new li_user_info;
		$use_info->nomedisplay = $_SESSION["usuario"];
		$use_info->exitlink = "/auth/logout/";
		$use_info->updataidlink = "/user/update/";

        $use_info1 = new li_user_info;
        $use_info1->nomedisplay = "daniels";
        $use_info1->exitlink = "/auth/logout/";
        $use_info1->updataidlink = "/user/update/";

    $topmenu->itensright=[$use_info, $use_info1];

        $menu1 = new li_dropdown;
        $menu1->text = "Ações";
            $sub1 = new li_item;
            $sub1->text = "Atualizar chamado";
            $sub1->link = "acao/chamados/";
            $sub2 = new li_item;
        $menu1->subitem = [$sub1];

        $menu2 = new li_dropdown;
        $menu2->text = "Relatórios";
            $sub1 = new li_item;
            $sub1->text = "Relatório chamados";
            $sub1->link = "relatorios/chamados/";
            $sub2 = new li_item;
            $sub2->text = "Relatório Usuários";
            $sub2->link = "relatorios/usuarios/";
            $sub3 = new li_item;
            $sub3->text = "Relatório Problemas";
            $sub3->link = "relatorios/problemas/";
        $menu2->subitem = [$sub1, $sub2, $sub3];

    $topmenu->itensleft= [$menu1, $menu2];
    $body = '<div class="container"><table class="table"><tbody><tr><td colspan="1" id="ajxdiv001">';
    
    $panel_0 = new rowAlert;
    $panel_0->colSize = "md-12";
    $panel_0->class = "alert alert-warning";
    $panel_0->titleSize = "3";
    $panel_0->alertTitle = 'Chamados Abertos <span class="glyphicon glyphicon-tasks"></span>';
    
    $table = new table;
    $headers = ["Usuário", "Problema", "Estatus"];
    $table->headers($headers);
    $sql = queryDb("call sp_sel_teccalled()");
    $arrayRow = [];
    while ($query = $sql->fetch(PDO::FETCH_ASSOC)) {
      if($query["estatus"] == "Aberto"){$class = "warning";} else {$class = "success";};
        array_push($arrayRow, '<tr><td>'.$query["nameperson"].'</td><td>'.$query["prob"].'</td><td><span class="label label-'.$class.'">'.$query["estatus"].'</span></td></tr>');
      };
    $table->rows($arrayRow);

    $panel_0->alertText = $table->html();
    $sql = 'call sp_sel_teccalled()';
    $query = queryDb($sql);
    $dados =$query->fetch(PDO::FETCH_ASSOC);

    $body .= $panel_0->html();
    $body .= '</td><td colspan="1">';
  
    $open_called1 = new formChildItem;
    $open_called1->label = "Usuário:";
    $open_called1->inputName = "usuario";
    $open_called1->inputValue = $_SESSION["usuario"];
    $open_called1->inputExtras = "disabled";
    $open_called1->sideInput = "right";
    //unset($open_called1->iconChild);
    $open_called2 = new formChildItem;
    $open_called2->label = "Problema:";
    $open_called2->inputName = "prob";
    $open_called2->sideInput = "right";
    $open_called2->inputType = "select";
    $open_called2->iconChild = "fa fa-bug";

    $sql = queryDb("call sp_sel_prob_category()");
    $option = [];
    while ($dados = $sql->fetch(PDO::FETCH_ASSOC)){
        $data = '<option value="'.$dados["id"].'">'.$dados["prob"].'</option>';
        array_push($option, $data);
    };
    $open_called2->selectItens = $option;

    $open_called3 = new formChildItem;
    $open_called3->label = "Descrição:";
    $open_called3->inputName = "descri";
    $open_called3->sideInput = "right";
    $open_called3->inputType = "textarea";
    $open_called3->inputExtras = 'required="true"';
    $open_called3->iconChild = "fa fa-edit";

    $open_called4 = new formChildItem;
    $open_called4->inputName = "userid";
    $open_called4->inputType = "hidden";
    $open_called4->inputValue = $_SESSION["userId"];

    $submit = new buttons;
    $submit->type="submit";
    $submit->value="Abrir Chamado";

    $panel_1 = new fieldsetPanel;
    $panel_1->formAction = "/opencalled/";
    $panel_1->fieldsetLegend = "Abrir Chamados:";
    $panel_1->formItens = [$open_called1, $open_called2, $open_called3, $open_called4, $submit];
    $body .= $panel_1->html();
    $body .='</td></tr></tbody></table></div>';

$page->bodycontent = $topmenu->html().$body;
$page->scriptsendpage = getjs_("./public/js/this/backend/xamastiFunctions.js");
$page->render();
?>

