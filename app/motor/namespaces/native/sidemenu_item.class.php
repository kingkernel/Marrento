<?php
class sidemenu_item {
	public $class = "";
	public $link = "#";
	public $icon = "glyphicon glyphicon-home";
	public $text = "texto";
	public $submenu;

	public function html(){
		$this->somacontent = '<li class="'.$this->class.'"><a href="'.$this->link.'" data-toggle="collapse" aria-expanded="false"><i class="'$this->icon'"></i>'.$this->text.'</a>'.$this->submenu.'</li>';
		}
	public function render(){
	echo '<li class="'.$this->class.'"><a href="'.$this->link.'" data-toggle="collapse" aria-expanded="false"><i class="'$this->icon'"></i>'.$this->text.'</a>'.$this->submenu.'</li>';
	}
}
?>