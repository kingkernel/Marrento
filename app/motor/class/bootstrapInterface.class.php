<?php
/*
class: Bootstrap interface
Autor: Daniel J. Santos
Data criação: 05/03/20419
*/
class bootstrapInterface{

	public $version = '4.0.0-alpha.4';
	public $cdnHost = 'cdnjs.cloudflare.com';
	public $protocol = 'https';
	public $path = 'ajax/libs/twitter-bootstrap';
	public $css = '';

	public function __construct(){
		if($_SESSION["load"]["interface"]["MODE_INTERFACE"]=="online"){
			$this->cdnCss = $this->protocol.'://'.$this->cdnHost.'/'.$this->path.'/'.$this->version.'/css/bootstrap.min.css';
			$this->cdnJs = $this->protocol.'://'.$this->cdnHost.'/'.$this->path.'/'.$this->version.'/js/bootstrap.min.js';
			return $this;
		} else {
			$this->version = '4.0.0-alpha.4';
			$this->cdnHost = '';
			$this->protocol = '';
			$this->path = 'public/';
			$this->cdnCss = $this->path.'css/bootstrap/'.$this->version.'/bootstrap.min.css';
			$this->cdnJs = $this->path.'js/bootstrap/'.$this->version.'/bootstrap.min.js';
			return $this;
		};
	}
	
}
?>