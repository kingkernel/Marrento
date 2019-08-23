<?php
class rowAlert{
	/*
	data criação: 24/03/2019
	*/
	public $colSize = "md-12";
	public $class = "alert alert-info";
	public $titleSize = "3";
	public $alertTitle = 'Chamado Aberto <span class="glyphicon glyphicon-thumbs-up"></span>';
	public $alertText = '<p>Em breve atenderemos o seu chamado</p><p>Você pode acompanhar seu atenfimento na fila de chamados no painel inicial.</p><a class="btn btn-primary" href="/">Voltar</a>';
	public function __construct(){

	}
	public function html(){
	$this->content = '<div class="row" style="margin: 10px"><div class="col-'.$this->colSize.'"><div class="'.$this->class.'"><h'.$this->titleSize.'>'.$this->alertTitle.'</h'.$this->titleSize.'>'.$this->alertText.'</div></div>';
	return $this->content;
	}
}
?>