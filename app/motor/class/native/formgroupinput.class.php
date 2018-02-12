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
	public $typeinput = "text";
	public $placeholder;
	public $extras;
	public $name;
	public $addContent;
	public $submitBtnClass = "success";

	public function html(){
		$this->addContent = '<div class="form-group" '.$this->extras.'><label for="'.$this->id.'" class="'.$this->classcol.' control-label">'.$this->labeltext.'</label><div class="'.$this->classsizeinput.'">';
		switch ($this->typeinput) {
			case 'submit':
				$this->addContent = '<input type="submit" name="'.$this->name.'" class="btn btn-'.$this->submitBtnClass.'" id="'.$this->id.'" " value="'.$this->value.'" '.$this->extrasinput.'>';
				return $this->addContent;
				break;
			case 'hidden':
				$this->addContent = '<input type="hidden" name="'.$this->name.'" id="'.$this->id.'" " value="'.$this->value.'" '.$this->extrasinput.'>';
				return $this->addContent;
				break;
			default:
				$this->addContent .= '<input type="'.$this->typeinput.'" class="form-control" id="'.$this->id.'" placeholder="'.$this->placeholder.'" value="'.$this->value.'" '.$this->extrasinput.'></div></div>';
				return $this->addContent;
				break;
			};
		$this->addContent .= '<input type="'.$this->typeinput.'" name="'.$this->name.'" class="form-control" id="'.$this->id.'" placeholder="'.$this->placeholder.'" value="'.$this->value.'" '.$this->extrasinput.'></div></div>';
		return $this->addContent;
	}
	public function render(){
		echo '<div class="form-group" '.$this->extras.'><label for="'.$this->id.'" class="'.$this->classcol.' control-label">'.$this->labeltext.'</label><div class="'.$this->classsizeinput.'"><input type="'.$this->typeinput.'" class="form-control" id="'.$this->id.'" placeholder="'.$this->placeholder.'" value="'.$this->value.'" '.$this->extrasinput.'></div></div>';

	}
}
?>