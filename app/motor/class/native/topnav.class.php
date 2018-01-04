<?php
class topnav{
	/**
	Classe: topnav_menu
	Data criação: 01/12/2016
	Ultima alteração: 03/01/2018
	Autor: Daniel J. Santos
	Email: Daniel.santos.ap@gmail.com
	Utilidade: classe encarregada de criar a barra superior de navegação
	Atributos:
				estilo-> aparencia || default: "default"
												"inverse"
				brand-> nome do sistema ou site || default "site"
				brandLink-> link da pagina inicial || default  "/"
				itensleft-> array com classes que contén itens de menu da esquerda
				itensright-> array com classes que contén itens de menu da direita
				id-> id do elemento nav || default "barra-navegacao-1"
	**/
	public $estilo;
	public $brand;
	public $brandLink;
	public $itensleft = [];
	public $itensright = [];
	public $id;
	public $navextras;
	public $somacontent;
	public function __construct(){
		/**
			Zerando os valoes caso não sejam passados pelo programador
		**/
		/**
			Classe finallizada!
		**/
			if(!isset($this->estilo)){$this->estilo="default";};if(!isset($this->brand)){$this->brand="site";};if(!isset($this->brandLink)){$this->brandLink= "/";};if(!isset($this->nav_ul_left)){$this->nav_ul_left= "";};if(!isset($this->nav_ul_right)){$this->nav_ul_right= "";};if(!isset($this->id)){$this->id= "barra-navegacao-1";};
	}
	public function render(){
		echo '<nav class="navbar navbar-'.$this->estilo.'" role="navigation" '.$this->navextras.'><div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#'.$this->id.'" aria-expanded="false"><span class="sr-only">Mudar Navegação</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="'.$this->brandLink.'">'.$this->brand.'</a></div><div class="collapse navbar-collapse" id="'.$this->id.'" aria-expanded="false" style="height: 1px;"><ul class="nav navbar-nav">';foreach ($this->itensleft as $key => $value){echo $value->render();};echo '</ul><ul class="nav navbar-nav navbar-right">';foreach ($this->itensright as $key => $value){echo $value->render();};echo '</ul></div></nav>';
	}
	public function html(){
		$this->somacontent='<nav class="navbar navbar-'.$this->estilo.'" role="navigation" '.$this->navextras.'><div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#'.$this->id.'" aria-expanded="false"><span class="sr-only">Mudar Navegação</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="'.$this->brandLink.'">'.$this->brand.'</a></div><div class="collapse navbar-collapse" id="'.$this->id.'" aria-expanded="false" style="height: 1px;"><ul class="nav navbar-nav">';foreach ($this->itensleft as $key => $value){$this->somacontent .= $value->html();};$this->somacontent .= '</ul><ul class="nav navbar-nav navbar-right">';foreach ($this->itensright as $key => $value){	$this->somacontent .= $value->html();};$this->somacontent .= '</ul></div></nav>';return $this->somacontent;
	}
}
?>