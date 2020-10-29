<?php
	class input_checkbox{
	public $somacontent;
	public $addcss;
	public $style;
	public $active;		// ainda sem utilização adicionar a classe
	public $name;
	public $side;		//ainda sem uso left || right
	public $value;

	public function __construct(){
		$this->addcss='.btn span.glyphicon {opacity: 0;}.btn.active span.glyphicon {opacity: 1;}';$this->style="primary";
		//<span class="input-group-addon" id="basic-addon1">@</span><div class="form-control">texto</div>
	}
	public function html(){
		$this->somacontent = '<div class="btn-group pull-right" data-toggle="checkbox" id="id_'.$this->name.'"><label class="btn btn-'.$this->style.'" data-toggle="checkbox"><input type="checkbox" name="'.$this->name.'"  value="'.$this->value.'" id="idchkbtn"><span class="glyphicon glyphicon-ok"></span></label></div>';
		return $this->somacontent;
		}
}
?>