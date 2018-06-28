<?php
class formgroupinput{
	/**
	data criação 28/12/2016
	ultima alteração: 07/03/2018
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
	public $addContent;
	public function html(){
		$this->addContent = '<div class="form-group" '.$this->extras.'><label for="'.$this->id.'" class="'.$this->classcol.' control-label">'.$this->labeltext.'</label><div class="'.$this->classsizeinput.'">';
		switch ($this->typeinput) {
			case 'textarea':
				$this->addContent .='<textarea" name="'.$this->name.'" class="form-control" id="'.$this->id.'" placeholder="'.$this->placeholder.'"></textarea cols="" rows>';
				break;
			case 'select':
				$this->addContent .='<input type="'.$this->typeinput.'" name="'.$this->name.'" class="form-control" id="'.$this->id.'" placeholder="'.$this->placeholder.'">';
				break;
			default:
				$this->addContent .='<input type="'.$this->typeinput.'" name="'.$this->name.'" class="form-control" id="'.$this->id.'" placeholder="'.$this->placeholder.'">';
				break;
		};
		$this->addContent .='</div></div>'.$this->submit;
		return $this->addContent;
	}
	public function render(){
		echo '<div class="form-group" '.$this->extras.'><label for="'.$this->id.'" class="'.$this->classcol.' control-label">'.$this->labeltext.'</label><div class="'.$this->classsizeinput.'"><input type="'.$this->typeinput.'" class="form-control" id="'.$this->id.'" placeholder="'.$this->placeholder.'"></div></div>'.$this->submit;

	}
}
?>