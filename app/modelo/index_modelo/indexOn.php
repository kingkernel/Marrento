<?php
$page = new page;
	$topmenu =  new topnav;
	$topmenu->brand = $_SESSION["load"]["company"]["name"];
$page->headersinclude .= urlcss();
$page->bodycontent = $topmenu->html();
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