<?php
/*/
Data criação: 18/03/1029
Autor: Daniel J. Santos
*/
class avisoSimples{
	public $titleSize = "2";
	public $title;
	public $text; 
	public $content;
	public function __construct(){

	}
	public function render(){
		echo '<h'.$this->titleSize.'>'.$this->title.'</h'.$this->titleSize.'><p>'.$this->text.'</p>';
	}
	public function html(){
		$this->content='<h'.$this->titleSize.'>'.$this->title.'</h'.$this->titleSize.'><p>'.$this->text.'</p>';
		return $this->content;
	}
}
?>