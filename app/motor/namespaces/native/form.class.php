<?php
class form{
	/**
	Classe: form || classe que gera formulários
	Data criação: 03/12/2016
	Ultima alteração: 06/03/2018
	Autor: Daniel J. Santos
	Email: Daniel.santos.ap@gmail.com
	**/
	public $formtype; 			// vertical | horizontal | inline | search
	public $method;				// post | get
	public $action; 			// para onde vai os dados
	public $formitens = [];		// itens no array do form
	public $legend;				// legenda do formulário
	public $fieldset;			// boolean default false
	public $formadicionalclass; // adiciona classe extra ao formulario como col-md(tamanho)
	public $nomeform;			// nome do formulário
	public $somacontent;		// renderização para a memória
	public function __construct(){
		if(!isset($this->formtype)){$this->formtype="vertical";};if(!isset($this->method)){$this->method="POST";};if(!isset($this->action)){$this->action="/";};if(!isset($this->formitens)){$this->formitens=array();};if(!isset($this->fieldset)){$this->fieldset=false;};if(!isset($this->legend)){$this->legend="";};if(!isset($this->extras)){$this->extras="";};
	}
	public function render(){
		echo '<form role="form" class="form-'.$this->formtype.' '.$this->formadicionalclass.'" method="'.$this->method.'" action="'.$this->action.'" name="'.$this->nomeform.'" '.$this->extras.'>';if($this->fieldset==true){echo '<fieldset><legend>'.$this->legend.'</legend>';};foreach ($this->formitens as $key => $value){echo $value->render();};if($this->fieldset==true){echo '</fieldset>';};echo '</form>';
	}
	public function html(){
		$this->somacontent = '<form role="form" class="form-'.$this->formtype.' '.$this->formadicionalclass.'" method="'.$this->method.'" action="'.$this->action.'" name="'.$this->nomeform.'" '.$this->extras.'>';if($this->fieldset==true){$this->somacontent .= '<fieldset><legend>'.$this->legend.'</legend>';};foreach ($this->formitens as $key => $value){$this->somacontent .= $value->html();};if($this->fieldset==true){$this->somacontent .='</fieldset>';};$this->somacontent .='</form>';
		return $this->somacontent;
	}
}
?>