<?php
$page = new page;
$page->headersinclude .= fontAwesome(urlcss($_GET));
	$topmenu =  new topnav;
	$topmenu->brand = $_SESSION["load"]["company"]["name"]. ' <span class="fa fa-headphones"></span>';

		$use_info = new li_user_info;
		$use_info->nomedisplay = $_SESSION["usuario"];
		$use_info->exitlink = "/auth/logout/";
		$use_info->updataidlink = "/user/update/";

    $campo1 = new formChildItem;
    $campo2 = new formChildItem;
    $campo3 = new formChildItem;
    $campo4 = new formChildItem;
    $campo5 = new formChildItem;
    $campo6 = new formChildItem;
    $campo7 = new formChildItem;
    $campo8 = new formChildItem;
    $campo9 = new formChildItem;

  $topmenu->itensright=[$use_info];
$body = '<div class="container"><table class="table"><tbody><tr><td colspan="1">';
    $panel_0 = new fieldsetPanel;
    $panel_0->formAction = "ativa/";
    $panel_0->fieldsetLegend = "Fila de chamados";
    $panel_0->formItens = [$campo1, $campo2, $campo3, $campo4, $campo5, $campo6, $campo7, $campo8, $campo9];
    $body .= $panel_0->html();
$body .= '</td><td colspan="1">';
    $open_called1 = new formChildItem;
    $open_called1->label = "Usuário:";
    $open_called1->inputName = "usuario";
    $open_called1->inputValue = $_SESSION["usuario"];
    //$open_called1->inputExtras = "disabled";
    $open_called1->inputType = "select";

    $panel_1 = new fieldsetPanel;
    $panel_1->formAction = "ativa/";
    $panel_1->fieldsetLegend = "Abrir Chamados:";
    $panel_1->formItens = [$open_called1];
    $body .= $panel_1->html();
    $body .='</td></tr></tbody></table></div>';

$page->bodycontent = $topmenu->html().$body;
$page->render();
$input = new inputAddOn;
$input->sideInput ="right"; 
$input->render();
?>