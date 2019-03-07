<?php
/*
Data criação: 06/03/2019
Autor: Daniel J. Santos
*/
class ulList {
	public $liItens = [];
	public $class;
	public $id;
	public $content;

	public function __construct(){

	}
	public function html(){
			$this->content = '<ul class="'.$this->class.'">';
		foreach ($this->liItens as $key => $value) {
			$this->content .= $value->html();
		}
			$this->content .= '</ul>';
		return $this->content;
	}
}

?>