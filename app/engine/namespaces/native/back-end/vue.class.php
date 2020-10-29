<?php
class vue {
	public $vue
	public function __construct(){
		$this->vue = includeFile(["vue.min.js"]);
		return $this;
	}

}
?>