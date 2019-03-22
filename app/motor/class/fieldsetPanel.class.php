<?php
class fieldsetPanel{
	public $formAction = "";
	public $formId = "";
	public $fomItens = [];
	public function __construct(){

	}
	public function render(){
		echo ' <form class="well form-horizontal" action="'.$this->formAction.'" method="POST" id="'.$this->formId.'"><fieldset><legend>'.$this->fieldsetLegend.'</legend>';
		foreach ($this->formItens as $key => $value) {
			$value->render(); 
		};
                        $body .= $campo1->html().$campo2->html().$campo3->html().$campo4->html().$campo5->html().$campo6->html().$campo7->html().$campo8->html().$campo9->html(); 
                      $body .='</fieldset>
                   </form>';
	}
}
?>