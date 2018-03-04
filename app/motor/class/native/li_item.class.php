<?php
class li_item{
	/**
	Classe: li_item || classe responsavel pelos botões do navbar
	Data criação: 01/12/2016
	Ultima alteração: 03/12/2016
	Autor: Daniel J. Santos
	Email: Daniel.santos.ap@gmail.com
	Atributos:
				class-> se a classe é ativa ou não. || "active" ou "" - default : ""
				$link-> link que vai funcionar o botão || default "#"
				$iconclass-> icone do botão || default ""

	**/
	public $class;
	public $link;
	public $iconclass;
	public $text;
	public $id;
	public $linkextra;
	public function __construct(){
		if(!isset($this->class)){$this->class="";};if(!isset($this->link)){$this->link="#";};if(!isset($this->iconclass)){$this->iconclass="";};
	}
	public function render(){
		/**
			classe finalizada
		**/
		echo '<li class="'.$this->class.'" id="'.$this->id.'"><a href="'.$this->link.'" '.$this->linkextra.'><span class="'.$this->iconclass.'"></span> '.$this->text.'</a></li>';
	}
	public function html(){
		/**
			classe finalizada
		**/
		return '<li class="'.$this->class.'" id="'.$this->id.'"><a href="'.$this->link.'" '.$this->linkextra.'><span class="'.$this->iconclass.'"></span> '.$this->text.'</a></li>';
	}
}
?>