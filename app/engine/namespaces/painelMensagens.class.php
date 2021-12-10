<?php

class painelMensagens {
	public $addContent;
	public $titulo;
	public $todas;
	public $novas;
	public $enviadas;
	public $abertas;
	public $fechadastext;
	public $fechadasContent;
	public function __construct(){

	}
	public function html(){
		$painel = new panelMessages;
		$painel->panelTitle = $this->titulo;
		$painel->naoLidas= $this->todas;
		$painel->conteudo1 = $this->novas;
		$painel->enviadasText = $this->enviadas;
		$painel->conteudo2 = $this->abertas;
		$painel->conversasText = $this->fechadastext;
		$painel->conteudo3 = $this->fechadasContent;
		$this->addContent= $painel->html();
		return $this->addContent;
	}

}
?>