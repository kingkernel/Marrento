<?php
class sliced
{

	public function __construct()
	{

	}
	public function shred($template)
	{
		$subst = str_replace(".", "\\", $template);
		$template1 = (file_get_contents(PATHVISAO . $subst .".section.html"));
		if(strpos($template1, "@extends") === FALSE)
			{
				echo "NÃO existe a palavra\n";
				$this->show($template);
			} 
		else 
			{
				//pega o nome digitado troca ponto por barras
				//pega o conteudo solicitado e guarda numa variavel
				$content = file_get_contents(PATHVISAO . $subst .".section.html");
				//qual arquivo será extendido
				preg_match('/@extends\(\"(.*)\"\)/', $content, $x);
				//substitui pontos por barra
				$file = str_replace(".", "\\", $x[1]);
				//conteudo do estensor na variavel
				$extender = file_get_contents(PATHVISAO . $file .".page.html");
				//padroes a serem pesquisados
				$patterns = ['/@field\{\{(\w{2,30})\}\}/', '/@section\(\"(.*)\"\)/', '/@endsection/','/@extends\(\"(.*)\"\)/'];
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
						$path = str_replace(".", "\\", $value);
						$y = file_get_contents(PATHVISAO . $path .".section.html");
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
		print_r ($first);
	}
	/*
	public function matchs($template)
		{
			$file = str_replace(".", "\\", $template);
			$prepage = file_get_contents(PATHVISAO . $file .".page.html");
			$content = preg_match_all('/@section\(\"(.*)\"\)/', $prepage, $x);
			return $x;
		}
	public function load($template)
	{
		$template1 = str_replace(".", "\\", $template);
		$template2 = file_get_contents(PATHVISAO . $template1 .".view.php");
		echo $this->variables("topmenu");
	}
	public function variables($template)
	{
		$page = file_get_contents($template);
		preg_replace('/@field\{\{(\w|.*)\}\}/', $page, $thispage);
		print_r($thispage);
		 
		 //$content = preg_replace('/@content\(\"(([[:alnum:]])+)*\"\)/', "minhas mudança", $template);

		// $content = preg_replace('/@content\(\"*(+(\.)+)*\"\)/', "minhas mudança", $template);
		 //$content = substr_replace('@', "#", $template);

		 //preg_match_all('/@content\(\"(([[:alnum:]])+)*\"\)/', $template, $x);
		 	preg_match_all('/@content\(\"((\w|\.)+(\w|\.))*\"\)/', $template, $x);
		return print_r($x);
	}
	public function sections($template)
	{
		$template1 = str_replace(".", "\\", $template);
		$template2 = file_get_contents(PATHVISAO . $template1 .".section.php");
		//preg_match_all('/@section\(\"((\w|\.)+(\w|\.))*\"\)/', $template, $x);
		//return print_r($x);
	}
	public function extends($template)
	{
		$name = str_replace(".", "\\", $template);
		$filecontent = fastload(file_get_contents(PATHVISAO . $name .".section.html"));
		$result = preg_match_all('/@extends\(\"(.*)\"\)/', $filecontent, $x);
		print_r($x);
	}
	public function variables2($template, $subst)
	{
		
			//substitua na variavel template, pontos por barras
		$file = str_replace(".", "\\", $template);
			//pegue o conteudo de no caminho indicado
		$prepage = file_get_contents(PATHVISAO . $file .".page.html");
			//leia o conteudo e veja quantas sections estão no arquivo
		$content = preg_match_all('/@section\(\"(.*)\"\)/', $prepage, $x);
		foreach ($x[1] as $key => $value) 
			{
				$path = str_replace(".", "\\", $value);
				$troca = fastload(file_get_contents(PATHVISAO . $path .".section.html"));
				foreach ($x[0] as $key => $value) 
					{	
						$template3 = str_replace($value, $troca, $prepage);
					}
				$template3 = str_replace($value, $troca, $prepage);
			}
	//print_r($sections);
		//print_r($x);
		//preg_match_all('/@field\{\{(\w|.*)\}\}/', $template2, $x);
		//$saida = array_replace($x[0], $subst);
		//str_replace($x[0], $subst, $template2);
		//str_replace('/@field\{\{(\w|.*)\}\}/', "Viado!!", $template2);
		//print_r($sections);
		
		foreach ($x[0] as $key => $value) {
			//print_r($sections);
			$content = str_replace($value, $sections, $template2);
		}
		
		//$content = preg_replace('/@field\{\{(\w|.*)\}\}/', $subst, $template2);
		//print(fastload($content));
		print($template3);
		//ereg_replace('/@field\{\{(\w|.*)\}\}/', $subst, $template);
	}
	public function hello($template, $subst)
	{
		$this->variables($template, "Viado!!");
	}
	*/
	/*
	public function contentfiles($matchs)
		{
			$matchscontent = [];
			foreach ($matchs[1] as $key => $value) 
				{
					$path = str_replace(".", "\\", $value);
					array_push($matchscontent, fastload(file_get_contents(PATHVISAO . $path .".section.html")));
				}
			return $matchscontent;
		}
	public function substSections($tetris, $template)
	{
		$file = str_replace(".", "\\", $template);
		$prepage = fastload(file_get_contents(PATHVISAO . $file .".page.html"));
		foreach ($tetris as $key => $value) {
			$prepage = str_replace($key, $value, $prepage);
		}
			$patterns = ['/@field\{\{(\w{2,30})\}\}/', '/@section\(\"(.*)\"\)/','/@extends\(\"(.*)\"\)/'];
			$prepage = preg_replace($patterns, "", $prepage);
		return $prepage;
	}
	public function variaveis($template)
	{
		$file = str_replace(".", "\\", $template);
		//$prepage = fastload(file_get_contents(PATHVISAO . $file .".page.html"));
		try {
			$prepage = fastload(file_get_contents(PATHVISAO . $file .".page.html"));

		} catch (Exception $e) {
			$prepage = fastload(file_get_contents(PATHVISAO . $file .".section.html"));
		}
		$content = preg_match_all('/@field\{\{(\w{2,30})\}\}/', $prepage, $x);
		print_r($x);
	}
	public function show($template)
	{
		$result1 = $this->matchs($template);
		$result2 = $this->contentfiles($result1);
		$result3 = array_combine($result1[0], $result2);
		print $this->substSections($result3, $template);
	}
	*/
}
?>