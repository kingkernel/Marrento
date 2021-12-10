<?php
class li_dropdown{
	/**
		Classe: li_dropdown || classe que tem outros botões dentro do li
		Data criação: 03/12/2016
		Ultima alteração: 16/01/2018
		Autor: Daniel J. Santos
		Email: Daniel.santos.ap@gmail.com
		Atributos:
	**/
	public $iconclass;
	public $text;
	public $somacontent;
	public $subitem = [];
	public function __construct(){
		if (!isset($this->iconclass)){$this->iconclass="";};if (!isset($this->text)){$this->text="";};
	}
	public function render(){
		/**
			classe finalizada
		**/
		echo '<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="'.$this->iconclass.'"></span> '.$this->text.'<b class="caret"></b></a><ul class="dropdown-menu">';
		foreach ($this->subitem as $key => $value){
			echo $value->render();
		};
         echo '</ul></li>';
	}
	public function html(){
		$this->somacontent='<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="'.$this->iconclass.'"></span> '.$this->text.'<b class="caret"></b></a><ul class="dropdown-menu">';foreach ($this->subitem as $key => $value){$this->somacontent .= $value->html();};$this->somacontent .= '</ul></li>';return $this->somacontent;
	}
}
?>