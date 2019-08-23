<?php
class fieldsetPanel{
	/*
	Data de criação: 22/03/2019
	*/
	public $formAction = "";
	public $formId = "";
	public $formItens = [];
	public $fieldsetLegend = "Legenda";
	public $content;
	public function __construct(){

	}
	public function render(){
		echo '<form class="well form-horizontal" action="'.$this->formAction.'" method="POST" id="'.$this->formId.'"><fieldset><legend>'.$this->fieldsetLegend.'</legend>';
		foreach ($this->formItens as $key => $value) {
			$value->render(); 
		};
        echo '</fieldset></form>';
	}
	public function html(){
		$this->content = '<form class="well form-horizontal" action="'.$this->formAction.'" method="POST" id="'.$this->formId.'"><fieldset><legend>'.$this->fieldsetLegend.'</legend>';
		foreach ($this->formItens as $key => $value) {
			$this->content .= $value->html(); 
		};
		$this->content .= '</fieldset></form>';
		return $this->content;
	}
	public function help(){

	}
}
?>