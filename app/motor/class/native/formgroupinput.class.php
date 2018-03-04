<?php
class formgroupinput{
	/**
	data criação 28/12/2016
	ultima alteração: 05/01/2017
	**/
	public $id;
	public $classcol;
	public $labeltext;
	public $classsizeinput;
	public $typeinput;
	public $placeholder;
	public $submit;
	public $extras;
	public $name;
	public function html(){
		return '<div class="form-group" '.$this->extras.'><label for="'.$this->id.'" class="'.$this->classcol.' control-label">'.$this->labeltext.'</label><div class="'.$this->classsizeinput.'"><input type="'.$this->typeinput.'" name="'.$this->name.'" class="form-control" id="'.$this->id.'" placeholder="'.$this->placeholder.'"></div></div>'.$this->submit;
	}
	public function render(){
		echo '<div class="form-group" '.$this->extras.'><label for="'.$this->id.'" class="'.$this->classcol.' control-label">'.$this->labeltext.'</label><div class="'.$this->classsizeinput.'"><input type="'.$this->typeinput.'" class="form-control" id="'.$this->id.'" placeholder="'.$this->placeholder.'"></div></div>'.$this->submit;

	}
}
?>