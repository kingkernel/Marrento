<?php
/*
Data de criação: 21/03/2019
Última Alteração: 23/03/2019
*/
class formChildItem{
	public $label = "User Name";
	public $iconChild = "glyphicon glyphicon-user";
	public $inputId;
	public $inputName;
	public $placeHolder = "Full Name";
	public $inputValue;
	public $inputExtras;
	public $content;
	public $sideInput ="right"; 							// right || left: default "right"
	public $inputType = "text";
	public $selectItens=[];
	public $iconVisible = "false";
	
	public function __construct(){
		// $icone = '<span class="input-group-addon"><i class="'.$this->inputIcon.'" aria-hidden="true"></i></span>';
	}
	public function render(){
		if (isset($this->iconChild)){
			$icone = '<span class="input-group-addon"><i class="'.$this->iconChild.'" aria-hidden="true"></i></span>';
		} else{
			$icone = "";
		};
		echo '<div class="form-group"><label class="col-md-4 control-label">'.$this->label.'</label><div class="col-md-8 inputGroupContainer"><div class="input-group"><span class="input-group-addon"><i class="'.$this->iconChild.'"></i></span><input id="'.$this->inputId.'" name="'.$this->inputName.'" placeholder="'.$this->placeHolder.'" class="form-control" required="true" value="'.$this->inputValue.'" type="'.$this->inputType.'" '.$this->inputExtras.'></div></div></div>';
	}
	public function html(){
		if (!isset($this->iconChild)){
			$icone = "";
		} else{
			$icone = '<span class="input-group-addon"><i class="'.$this->iconChild.'" aria-hidden="true"></i></span>';
		}
		switch ($this->inputType) {
			case "select":
				$this->content = '<div class="form-group"><label class="col-md-4 control-label">'.$this->label.'</label><div class="col-md-8 inputGroupContainer"><div class="input-group">';
				if ($this->sideInput == "right"){$this->content.= $icone;};
				$this->content .= '<select id="'.$this->inputId.'" name="'.$this->inputName.'" class="form-control" '.$this->inputExtras.'>';
				foreach ($this->selectItens as $value) {
					$this->content .= $value;
				};
				$this->content .= '</select>';
				if ($this->sideInput == "left"){$this->content.= $icone;};
				$this->content .= '</div></div></div>';
				break;
			case "textarea":
				$this->content = '<div class="form-group"><label class="col-md-4 control-label">'.$this->label.'</label><div class="col-md-8 inputGroupContainer"><div class="input-group">';
				if ($this->sideInput == "right"){$this->content.= $icone;};
				$this->content .= '<textarea id="'.$this->inputId.'" name="'.$this->inputName.'" class="form-control" '.$this->inputExtras.'></textarea>';
				foreach ($this->selectItens as $value) {
					$this->content .= $value;
				};
				$this->content .= '</select>';
				if ($this->sideInput == "left"){$this->content.= $icone;};
				$this->content .= '</div></div></div>';
				break;
			case "hidden":
				$this->content.='<input id="'.$this->inputId.'" name="'.$this->inputName.'" value="'.$this->inputValue.'" type="hidden" '.$this->inputExtras.'>';
				break;
			default:
				$this->content = '<div class="form-group"><label class="col-md-4 control-label">'.$this->label.'</label><div class="col-md-8 inputGroupContainer"><div class="input-group">';
				if ($this->sideInput == "right"){$this->content.= $icone;};
				$this->content.='<input id="'.$this->inputId.'" name="'.$this->inputName.'" placeholder="'.$this->placeHolder.'" class="form-control" required="true" value="'.$this->inputValue.'" type="'.$this->inputType.'" '.$this->inputExtras.'>';
				if ($this->sideInput == "left"){$this->content.= $icone;};
				$this->content.='</div></div></div>';
				break;
		}
		return $this->content;
	}
}
?>