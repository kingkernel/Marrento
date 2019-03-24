<?php
/*
data de Criação: 24/03/2019
*/
class buttons{
	public $type;
	public $class = "primary";
	public $id;
	public $value = "button";
	public function __construct(){

	}
	public function html(){
		switch ($this->type) {
			case "button":
				$this->content = '<button type="button" class="btn btn-primary">Primary</button>';
				break;
			case "submit":
				$this->content = '<input type="submit" class="btn btn-'.$this->class.'" id="'.$this->id.'" value="'.$this->value.'">';
				break;
			
			default:
		$this->content = '<button type="button" class="btn btn-primary">Primary</button>';
				break;
		}
		
		return $this->content;
	}
}
?>