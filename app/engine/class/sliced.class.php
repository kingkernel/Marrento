<?php
/**
 * Data de Criação: 05/08/2019
 * Autor: Daniel J. Santos
 * Data de Modificação: 26/03/2021
 * 
 * 
 **/

 class sliced
{

	public function __construct()
	{

	}
	public function shred($template, $fields = [])
	{
		$subst = str_replace(".", "/", $template);
		$patterns = ['/@section\(\"(.*)\"\)/', '/@extends\(\"(.*)\"\)/'];
		if(file_exists(PATHVIEW . $subst .".section.html"))
			{
				$template1 = (file_get_contents(PATHVIEW . $subst .".section.html"));
				$typeend = "section";
			}
		else
			{
				$template1 = (file_get_contents(PATHVIEW . $subst .".page.html"));
				$typeend = "page";
			}
		if(strpos($template1, "@extends") === FALSE)
			{
				$sections = [];
				preg_match_all('/@section\(\"(.*)\"\)/', $template1, $result);
				foreach ($result[1] as $key => $value) 
				{
					$value = str_replace(".", "/", $value);
					$file = preg_replace($patterns, "", file_get_contents(PATHVIEW . $value .".section.html"));
					$template1 = str_replace($result[0][$key], $file, $template1);
					array_push($sections, $file);
				}
				$first = preg_replace($patterns, "", $template1);
			} 
		else 
			{
				//pega o nome digitado troca ponto por barras
				//pega o conteudo solicitado e guarda numa variavel
				$content = file_get_contents(PATHVIEW . $subst .".section.html");
				//qual arquivo será extendido
				preg_match('/@extends\(\"(.*)\"\)/', $content, $x);
				//substitui pontos por barra
				$file = str_replace(".", "/", $x[1]);
				//conteudo do estensor na variavel
				$extender = file_get_contents(PATHVIEW . $file .".page.html");
				//padroes a serem pesquisados
				$patterns = ['/@field\{\{(\w{2,30})\}\}/', '/@section\(\"(.*)\"\)/', '/@extends\(\"(.*)\"\)/', '/@include\(\"(.*)\"\)/'];
				//guardar o conteudo do herdeiro
				$herdeiro = preg_replace($patterns, "", $template1);
				//varrer o extender atrás de outras seções
				preg_match_all('/@section\(\"(.*)\"\)/', $extender, $matches);
				//faz a substituição do conteudo desta section
				$first = str_replace('@section("'.$template.'")', $herdeiro, $extender);
				//procura se há mais sections a levantar
				preg_match_all('/@section\(\"(.*)\"\)/', $first, $x);
				//pega o conteudo dos matchs encontrados
				$matchscontent = [];
				foreach ($x[1] as $key => $value) 
					{
						$path = str_replace(".", "/", $value);
						$y = file_get_contents(PATHVIEW . $path .".section.html");
						$y = preg_replace($patterns, "", $y);
						array_push($matchscontent, $y);
					}
				$combine = array_combine($x[0], $matchscontent);
				foreach ($combine as $key => $value)
					{
						$first = str_replace($key, $value, $first);
					}
			}
			preg_match_all('/@field\{\{(\w{2,30})\}\}/', $first, $z);
			if(strpos($template1,'@include')){
				preg_match_all('/@include\(\"(.*)\"\)/', $first, $include);
				$includefile = file_get_contents(PATHVIEW . str_replace(".", "/", $include[1][0]).".section.html");
				$first = str_replace($include[0][0], $includefile, $first);
			}
		return fastload($first);
	}
	public function shredReturns($template, $fields = [])
	{
		$subst = str_replace(".", "/", $template);
		$patterns = ['/@section\(\"(.*)\"\)/', '/@extends\(\"(.*)\"\)/'];
		if(file_exists(PATHVIEW . $subst .".section.html"))
			{
				$template1 = (file_get_contents(PATHVIEW . $subst .".section.html"));
				$typeend = "section";
			}
		else
			{
				$template1 = (file_get_contents(PATHVIEW . $subst .".page.html"));
				$typeend = "page";
			}
		if(strpos($template1, "@extends") === FALSE)
			{
				$sections = [];
				preg_match_all('/@section\(\"(.*)\"\)/', $template1, $result);
				foreach ($result[1] as $key => $value) 
				{
					$value = str_replace(".", "/", $value);
					$file = preg_replace($patterns, "", file_get_contents(PATHVIEW . $value .".section.html"));
					$template1 = str_replace($result[0][$key], $file, $template1);
					array_push($sections, $file);
				}
				$first = preg_replace($patterns, "", $template1);
			} 
		else 
			{
				//pega o nome digitado troca ponto por barras
				//pega o conteudo solicitado e guarda numa variavel
				$content = file_get_contents(PATHVIEW . $subst .".section.html");
				//qual arquivo será extendido
				preg_match('/@extends\(\"(.*)\"\)/', $content, $x);
				//substitui pontos por barra
				$file = str_replace(".", "/", $x[1]);
				//conteudo do estensor na variavel
				$extender = file_get_contents(PATHVIEW . $file .".page.html");
				//padroes a serem pesquisados
				$patterns = ['/@field\{\{(\w{2,30})\}\}/', '/@section\(\"(.*)\"\)/', '/@extends\(\"(.*)\"\)/', '/@include\(\"(.*)\"\)/'];
				//guardar o conteudo do herdeiro
				$herdeiro = preg_replace($patterns, "", $template1);
				//varrer o extender atrás de outras seções
				preg_match_all('/@section\(\"(.*)\"\)/', $extender, $matches);
				//faz a substituição do conteudo desta section
				$first = str_replace('@section("'.$template.'")', $herdeiro, $extender);
				//procura se há mais sections a levantar
				preg_match_all('/@section\(\"(.*)\"\)/', $first, $x);
				if(strpos($template1,'@include')){
					preg_match_all('/@include\(\"(.*)\"\)/', $first, $include);
					$includefile = file_get_contents(str_replace(".", "/", PATHVIEW.$include[1][0]).".section.html");
					$first = str_replace($include[0][0], $includefile, $first);
				}
				//pega o conteudo dos matchs encontrados
				$matchscontent = [];
				foreach ($x[1] as $key => $value) 
					{
						$path = str_replace(".", "/", $value);
						$y = file_get_contents(PATHVIEW . $path .".section.html");
						$y = preg_replace($patterns, "", $y);
						array_push($matchscontent, $y);
					}
				$combine = array_combine($x[0], $matchscontent);
				foreach ($combine as $key => $value)
					{
						$first = str_replace($key, $value, $first);
					}
			}
			preg_match_all('/@field\{\{(\w{2,30})\}\}/', $first, $z);
			if(strpos($template1,'@include')){
				preg_match_all('/@include\(\"(.*)\"\)/', $first, $include);
				$includefile = file_get_contents(str_replace(".", "/", PATHVIEW.$include[1][0]).".section.html");
				$first = str_replace($include[0][0], $includefile, $first);
			}
		return fastload($first);
	}
	public function getTemplate($template)
	{
		$revert = explode(".", strrev($template));
		$file = explode("/", $revert[2]);
		$precontent = strrev($revert[0].".".$revert[1].".".$file[0]);
		$path = array_diff(scandiR(PATHVIEW."templates/"), [".", ".."]);
		if(in_array(strrev($file[1]), $path) ){
			$message =  "Esta na pasta template";
			$template = file_get_contents(PATHVIEW."templates/".$template);
		} else {
			$message =  "Não esta na pasta template";
			$template = "no template";
		};
		$info = [
			"type" => strrev($revert[0]),
			"message" => $message,
			"template" => $template
			];
		return $info["template"];
	}
}
?>