<?php
class page {
	/**
	Classe: page || classe que gera a página
	Data criação: 03/12/2016
	Ultima alteração: 22/03/2019
	Autor: Daniel J. Santos
	Email: Daniel.santos.ap@gmail.com

###############################################################################
	TEMPORARIAMENTE FINALIZADA
###############################################################################
	**/
	public $language; 			// linguagem da pagina
	public $titlepage;			// titulo da página
	public $headersinclude;		// headers adicionais como css e scripts
	public $bodyextras;			// informações adicionais a tag body
	public $bodycontent;		// o conteudo da pagina em si.
	public $outrosmeta;			// informações de metadados, para sistemas de busca
	public $scriptsendpage;		// scripts para serem adicionadosno fim da pagina
	public $jsendbody;
	public $posScript;
	public $workmode;
	public function __construct(){
		if(!isset($this->language)){$this->language="pt-br";};if(!isset($this->titlepage)){$this->titlepage="";};if(!isset($this->headersinclude)){$caminho=urlcss($_GET);$this->headersinclude='<link href="'.$caminho.'public/css/bootstrap.min.css" rel="stylesheet"><link href="'.$caminho.'public/css/bootstrap-theme.min.css" rel="stylesheet"><script src="'.$caminho.'public/js/jquery-1.11.1.min.js"></script><script src="'.$caminho.'public/js/bootstrap.min.js"></script><style type="text/css">.label,.glyphicon, .fa{ margin-right:5px; }</style>';};if(!isset($this->scriptsendpage)){$this->scriptsendpage="";};
			$this->workmode;$_SESSION["load"]["interface"]["workmode"];
	}
	public function render(){
		$data ='<!DOCTYPE html><html lang="'.$this->language.'"><head><meta charset="utf-8">'.$this->outrosmeta.'<title>'.$this->titlepage.'</title><meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">'.$this->headersinclude.'</head><body '.$this->bodyextras.'>'.$this->bodycontent.'</body>'.$this->jsendbody.'<script type="text/javascript">'.$this->scriptsendpage.'</script>'.$this->posScript.'</html>';
		echo redux($data);
	}
	public function loadview($template, $variables = [])
	{
		$pagina = new sliced;
		//print_r($pagina->shred($template));
		echo $this->subsfields($pagina->shred($template), $variables);

	}
	public function subsfields($template, $fields)
	{
		//preg_match_all('/@field\{\{(\w{2,30})\}\}/', $template, $matches);
		foreach ($fields as $key => $value) {
			$template = str_replace('@field{{'.$key.'}}', $value, $template);
		};
		return $template;
	}
	/*
	public function help(){
		$content = getjs("./".PUBLICDIR."thisHelp/".get_class(). ".html");
		$this->bodycontent = $content;
		$this->render();
	}
	*/
	public function help()
	{
		$fields = ["classname" => get_class(), "classdescription" => "A Classe page é uma das principais classes do sistema, responsavel por ler as paginas em HTML se de  verificar a autenticidade do usuário"];
		$this->loadview("thishelp.". get_class(), $fields);
	}
}
?>