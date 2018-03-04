<?php
class divider{
	public $addContent;
	public function html(){
		$this->addContent .= '<li class="divider"></li>';
		return $this->addContent;
	}
}
?>