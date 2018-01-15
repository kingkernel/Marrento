<?php

/**
Data criação: 25/05/2017
Última Alteração: 14/01/2018
Autor: daniel.santos.ap@gmail.com

###############################################################################
TEMPORARIA FINALIZADA
###############################################################################
**/
class cardshow {
	public $upText = "SISTEMA DE GERENCIAMENTO";
	public $descritor = "";
	public $imagemlogin = "https://scontent.ffor11-1.fna.fbcdn.net/v/t1.0-1/p160x160/26907727_1762258727181599_4249099335281278384_n.jpg?oh=3b98a1ca449a20aba8f1f90afb63a086&oe=5AEADBDB";
  public $downText = "";
  public $style = "default";                                 //cores padrão de classes do bootstrap
  public $headerTitle = "";
  public $headerIcon = "";
  public $headerLink = "#";
  public $headerBigIcon = "";
  public $formAction = "/auth";
	public $leftInfo = "";
  public $rigthInfo = "";
  public $bigIconLeft = "";
  public $bigIconLeftBadge = "";
  public $bigIconLeftTitle = "";
  public $bigIconCenter = "";
  public $bigIconCenterBadge = "";
  public $bigIconRight = "";
  public $bigIconRightBadge = "";
  public $bigIconCenterTitle = "";
  public $bigIconRightTitle = "";
  public $formTitle = "";
  public $formBtn = "default";
  public $formBtnText = "login";
  public $formFooter = "";
  public $footerTags = "";

  public function render(){
  echo '<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4" style="margin-top:10px;"><div class="panel panel-'.$this->style.'"><div class="panel-heading text-center"><b>'.$this->upText.'</b><p title="'.$this->headerTitle.'"><i class="'.$this->headerIcon.'"></i>&nbsp;<a href="'.$this->headerLink.'"><i>'.$this->descritor.'</i></a><i class="'.$this->headerBigIcon.' fa-4x pull-right"></i></p></div><div class="panel-body"><p class="text-center"><img src="'.$this->imagemlogin.'" style="height:125px" class="img-circle"></p><p class="text-warning"><b>'.$this->leftInfo.'</b><span class="pull-right">'.$this->rigthInfo.'</span></p></div><div class="row"></div><div class="panel-heading"><div class="row"><div class="col-xs-4 col-md-4 pull-left" title="'.$this->bigIconLeftTitle.'"><i class="'.$this->bigIconLeft.' fa-2x pull-left"></i><span class="badge">'.$this->bigIconLeftBadge.'</span></div><div class="col-xs-4 col-md-4" title="'.$this->bigIconCenterTitle.'"><i class="'.$this->bigIconCenter.' fa-2x pull-left"></i><span class="badge">'.$this->bigIconCenterBadge.'</span></div><div class="col-xs-4 col-md-4 pull-right" title="'.$this->bigIconRightTitle.'"><i class="'.$this->bigIconRight.' fa-2x pull-left"></i><span class="badge">'.$this->bigIconRightBadge.'</span></div></div><br><p>'.$this->downText.'</p><span class="text-center"><p>'.$this->formTitle.'</p></span><div><form method="POST" action="'.$this->formAction.'"><input type="text" class="form-control" name="user" style="margin:5px"><input type="password" class="form-control" name="snhpwd" style="margin:5px"><input type="submit" class="btn btn-block btn btn-'.$this->formBtn.'" style="margin:5px" value="'.$this->formBtnText.'" ></form></div><span class="text-center"><p>'.$this->formFooter.'</p></span><p>'.$this->footerTags.'</p></div></div></div>';
	}
  public function html(){
  $this->somacontent =  '<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4" style="margin-top:10px;"><div class="panel panel-'.$this->style.'"><div class="panel-heading text-center"><b>'.$this->upText.'</b><p title="'.$this->headerTitle.'"><i class="'.$this->headerIcon.'"></i>&nbsp;<a href="'.$this->headerLink.'"><i>'.$this->descritor.'</i></a><i class="'.$this->headerBigIcon.' fa-4x pull-right"></i></p></div><div class="panel-body"><p class="text-center"><img src="'.$this->imagemlogin.'" style="height:125px" class="img-circle"></p><p class="text-warning"><b>'.$this->leftInfo.'</b><span class="pull-right">'.$this->rigthInfo.'</span></p></div><div class="row"></div><div class="panel-heading"><div class="row"><div class="col-xs-4 col-md-4 pull-left" title="'.$this->bigIconLeftTitle.'"><i class="'.$this->bigIconLeft.' fa-2x pull-left"></i><span class="badge">'.$this->bigIconLeftBadge.'</span></div><div class="col-xs-4 col-md-4" title="'.$this->bigIconCenterTitle.'"><i class="'.$this->bigIconCenter.' fa-2x pull-left"></i><span class="badge">'.$this->bigIconCenterBadge.'</span></div><div class="col-xs-4 col-md-4 pull-right" title="'.$this->bigIconRightTitle.'"><i class="'.$this->bigIconRight.' fa-2x pull-left"></i><span class="badge">'.$this->bigIconRightBadge.'</span></div></div><br><p>'.$this->downText.'</p><span class="text-center"><p>'.$this->formTitle.'</p></span><div><form method="POST" action="'.$this->formAction.'"><input type="text" class="form-control" name="user" style="margin:5px"><input type="password" class="form-control" name="snhpwd" style="margin:5px"><input type="submit" class="btn btn-block btn btn-'.$this->formBtn.'" style="margin:5px" value="'.$this->formBtnText.'" ></form></div><span class="text-center"><p>'.$this->formFooter.'</p></span><p>'.$this->footerTags.'</p></div></div></div>';
  return $this->somacontent;
  }
}
?>