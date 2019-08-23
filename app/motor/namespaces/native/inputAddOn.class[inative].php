<?php
class inputAddOn{
	/*
	Data de criação: 23/03/2019
	*/
	public $somacontent;
	public $sideInput ="right"; 							// right || left: default "right"
	public $inputIcon = "glyphicon glyphicon-home";
	public $inputPlaceholder = 'Enter your placeholder';
	public $inputName = "";
	public $inputType = "text";

	public function html(){
		$icone = '<span class="input-group-addon"><i class="'.$this->inputIcon.'" aria-hidden="true"></i></span>';
		$this->somacontent = '<div class="input-group">';
			if ($this->sideInput == "right"){$this->somacontent.= $icone;};
		$this->somacontent .= '<input type="'.$this->inputType.'" class="form-control" name="'.$this->inputName.'" id="id_'.$this->inputName.'"  placeholder="'.$this->inputPlaceholder.'"/>';
			if ($this->sideInput == "left"){$this->somacontent.= $icone;};
		$this->somacontent .= '</div>';
		return $this->somacontent;
	}
	public function render(){
		$icone = '<span class="input-group-addon"><i class="'.$this->inputIcon.'" aria-hidden="true"></i></span>';
		echo '<div class="input-group">';
			if ($this->sideInput == "right"){echo $icone;};
		echo '<input type="'.$this->inputType.'" class="form-control" name="'.$this->inputName.'" id="id_'.$this->inputName.'"  placeholder="'.$this->inputPlaceholder.'"/>';
			if ($this->sideInput == "left"){echo $icone;};
		echo '</div>';
	}
}
?>