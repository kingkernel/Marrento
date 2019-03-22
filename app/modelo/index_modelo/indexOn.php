<?php
auth::checkAuth();
$page = new page;
$page->headersinclude .= fontAwesome(urlcss($_GET));
	$topmenu =  new topnav;
	$topmenu->brand = $_SESSION["load"]["company"]["name"]. ' <span class="fa fa-headphones"></span>';

		$use_info = new li_user_info;
		$use_info->nomedisplay = $_SESSION["usuario"];
		$use_info->exitlink = "/auth/logout/";
		$use_info->updataidlink = "/user/update/";

	$topmenu->itensright=[$use_info];
$body = '<div class="container">
       <table class="table">
          <tbody>
             <tr>
                <td colspan="1">
                   <form class="well form-horizontal">
                      <fieldset><legend>Fila de Chamados</legend>';
                        $campo1 = new formChildItem;
                        $campo2 = new formChildItem;
                        $campo3 = new formChildItem;
                        $campo4 = new formChildItem;
                        $campo5 = new formChildItem;
                        $campo6 = new formChildItem;
                        $campo7 = new formChildItem;
                        $campo8 = new formChildItem;
                        $campo9 = new formChildItem;
                        $body .= $campo1->html().$campo2->html().$campo3->html().$campo4->html().$campo5->html().$campo6->html().$campo7->html().$campo8->html().$campo9->html();
                        $body .='
                      </fieldset>
                   </form>
                </td>
                <td colspan="1">
                   <form class="well form-horizontal">
                      <fieldset><legend>Chamados Técnicos</legend>';
                        $campo1 = new formChildItem;
                        $campo2 = new formChildItem;
                        $campo3 = new formChildItem;
                        $campo4 = new formChildItem;
                        $campo5 = new formChildItem;
                        $campo6 = new formChildItem;
                        $campo7 = new formChildItem;
                        $campo8 = new formChildItem;
                        $campo9 = new formChildItem;
                        $body .= $campo1->html().$campo2->html().$campo3->html().$campo4->html().$campo5->html().$campo6->html().$campo7->html().$campo8->html().$campo9->html(); 
                      $body .='</fieldset>
                   </form>
                </td>
            </tr>
          </tbody>
       </table>
    </div>';


$page->bodycontent = $topmenu->html().$body;
$page->render();
/*
	[estilo] => default
	[brand] => site
    [brandLink] => /
    [itensleft] => Array
        (
        )
    [itensright] => Array
        (
        )
    [id] => barra-navegacao-1
    [navextras] => 
    [nav_ul_left] => 
    [nav_ul_right] => 

$pathvisao = PATHVISAO . get_class(). "_visao/" . get_class() . "_index.html";
$pagina = compactada($pathvisao);
$pagina = str_replace("[@pathpublic]", "public/", $pagina);
print_r($pagina);
*/
?>