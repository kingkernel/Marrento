<?php
class li_user_info{
/**
Data de criação:php 04/03/2017
Ultima alteração: 05/03/2017

propriedades:
			nomedisplay:	nome do usuario que vai aparecer na barra
			email:	email do usuarios
			addcss:	css para ser adionado no header da pagina
			exitlink: caminho do link de logout
			updataid: id para do botão.
**/
public $nomediplay;
public $email;
public $addcss;
public $exitlink;
public $updataidlink;

public function __construct(){
	$this->addcss = '.navbar-login {width: 305px;padding: 10px;padding-bottom: 0px;}.icon-size {font-size: 87px;};';if(!isset($this->updataid)){$this->updataid="";};
}
public function render(){
	echo '<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><span class="glyphicon glyphicon-user"></span>&nbsp;<strong> '.$this->nomedisplay.' </strong> <span class="glyphicon glyphicon-chevron-down"></span></a><ul class="dropdown-menu"><li><div class="navbar-login"><div class="row"><div class="col-lg-4"><p class="text-center"><span class="glyphicon glyphicon-user  fa-3x"></span></p></div><div class="col-lg-8"><p class="text-left"><strong>'.$this->nomedisplay.'</strong></p><p class="text-left small">'.$this->email.'</p><p class="text-left"><a href="'.$this->updataidlink.'" class="btn btn-primary btn-block btn-sm" id="'.$this->updataid.'">Atualizar dados</a></p></div></div></div></li><li class="divider"></li><li><div class="navbar-login navbar-login-session"><div class="row"><div class="col-lg-12"><p><a href="'.$this->exitlink.'" class="btn btn-danger btn-block">Sair</a></p></div></div></div></li></ul></li>';
                }
public function html(){
	$this->somacontent = '<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><span class="glyphicon glyphicon-user"></span>&nbsp;<strong>'.$this->nomedisplay.'</strong> <span class="glyphicon glyphicon-chevron-down"></span></a><ul class="dropdown-menu"><li><div class="navbar-login"><div class="row"><div class="col-lg-4"><p class="text-center"><span class="glyphicon glyphicon-user fa-3x"></span></p></div><div class="col-lg-8"><p class="text-left"><strong> '.$this->nomedisplay.' </strong></p><p class="text-left small">'.$this->email.'</p><p class="text-left"><a href="'.$this->updataidlink.'" class="btn btn-primary btn-block btn-sm" id="'.$this->updataid.'">Atualizar dados</a></p></div></div></div></li><li class="divider"></li><li><div class="navbar-login navbar-login-session"><div class="row"><div class="col-lg-12"><p><a href="'.$this->exitlink.'" class="btn btn-danger btn-block">Sair</a></p></div></div></div></li></ul></li>';
return $this->somacontent;
	}
}
?>