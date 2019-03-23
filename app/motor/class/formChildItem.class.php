<?php
/*
Data de criação: 21/03/2019
*/
class formChildItem{
	public $label = "User Name";
	public $iconChild = "glyphicon glyphicon-user";
	public $inputId = "fullName";
	public $inputName = "fullName";
	public $placeHolder = "Full Name";
	public $inputValue;
	public $inputExtras;
	public function __construct(){
	}
	public function render(){
		echo '<div class="form-group"><label class="col-md-4 control-label">'.$this->label.'</label><div class="col-md-8 inputGroupContainer"><div class="input-group"><span class="input-group-addon"><i class="'.$this->iconChild.'"></i></span><input id="'.$this->inputId.'" name="'.$this->inputName.'" placeholder="'.$this->placeHolder.'" class="form-control" required="true" value="'.$this->inputValue.'" type="text" '.$this->inputExtras.'></div></div></div>';
	}
	public function html(){
		$this->content = '<div class="form-group"><label class="col-md-4 control-label">'.$this->label.'</label><div class="col-md-8 inputGroupContainer"><div class="input-group"><span class="input-group-addon"><i class="'.$this->iconChild.'"></i></span><input id="'.$this->inputId.'" name="'.$this->inputName.'" placeholder="'.$this->placeHolder.'" class="form-control" required="true" value="'.$this->inputValue.'" type="text" '.$this->inputExtras.'></div></div></div>';
		return $this->content;
	}
}
?>