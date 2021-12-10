<?php
class formbootstrap{
	/**
	Classe: formbootstrap || classe que gera formulários
	Data criação: 03/12/2016
	Ultima alteração: 12/02/2018
	Autor: Daniel J. Santos
	Email: Daniel.santos.ap@gmail.com
	**/
	public $formtype; 			// vertical | horizontal | inline | search
	public $method;				// post | get
	public $action; 			// para onde vai os dados
	public $formitens;			// itens no array do form
	public $legend;				// legenda do formulário
	public $fieldset;			// boolean default false
	public $formadicionalclass; // adiciona classe extra ao formulario como col-md(tamanho)
	public $formExtras;			// adicionais no formulario como onsubmit
	public $addContent; 
	public function __construct(){
		if(!isset($this->formtype)){$this->formtype="vertical";};if(!isset($this->method)){$this->method="POST";};if(!isset($this->action)){$this->action="/";};if(!isset($this->formitens)){$this->formitens=array();};if(!isset($this->fieldset)){$this->fieldset=false;};if(!isset($this->legend)){$this->legend="";};
	}
	public function render(){
		echo '<form role="form" class="form-'.$this->formtype.' '.$this->formadicionalclass.'" method="'.$this->method.'" action="'.$this->action.'" '.$this->formExtras.'>';if($this->fieldset==true){echo '<fieldset><legend>'.$this->legend.'</legend>';};foreach ($this->formitens as $key => $value){echo $value->render();};if($this->fieldset==true){echo '</fieldset>';};echo '</form>';
	}
	public function html(){
		$this->addContent = '<form role="form" class="form-'.$this->formtype.' '.$this->formadicionalclass.'" method="'.$this->method.'" action="'.$this->action.'" '.$this->formExtras.'>';if($this->fieldset==true){echo '<fieldset><legend>'.$this->legend.'</legend>';};foreach ($this->formitens as $key => $value){$this->addContent .= $value->html();};if($this->fieldset==true){echo '</fieldset>';};$this->addContent .= '</form>';
		return $this->addContent;
	}
}
?>