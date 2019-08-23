<?php
class divider{
	public $addContent;
	public $texts = [];
	public function html(){
		$this->addContent .= '<li class="divider"></li>';
		return $this->addContent;
	}
	public function union($artigos=[]){
		$array = [];
		foreach ($artigos as $key => $value) {
			array_push($array, $value);
		}
		//$artigos = implode($this->addContent, $array);
		///$artigos = implode($this->addContent, $array);
		return $artigos;
	}
}
?>