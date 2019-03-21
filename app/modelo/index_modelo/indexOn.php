<?php
$page = new page;
	$topmenu =  new topnav;
$page->bodycontent = $topmenu->html();
$page->render();
print_r($topmenu);


/*
$pathvisao = PATHVISAO . get_class(). "_visao/" . get_class() . "_index.html";
$pagina = compactada($pathvisao);
$pagina = str_replace("[@pathpublic]", "public/", $pagina);
print_r($pagina);
*/
?>