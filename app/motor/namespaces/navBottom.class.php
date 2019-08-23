<?php
class navBottom{
	public $name = "glyphicon glyphicon-";
	public $nameLink;
	public $addContent;
  public $messagesCount;
  public $leftitens = [];
  public $rightitens = [];
	public function __construct(){

	}
	public function html(){
	$this->addContent = '<div class="navbar navbar-inverse navbar-fixed-bottom"><div class="container"><div class="navbar-header" style="display: visible;"> <!-- <button type="button" class="navbar-toggle pull-left" data-toggle="collapse" data-target=".bottom-collapse-XX"><span class="glyphicon glyphicon-warning-sign" style="font-size:18px;color: white;"></span></button><button type="button" class="navbar-toggle pull-left" data-toggle="collapse" data-target=".bottom-collapse-XX"><span class="glyphicon glyphicon-envelope" style="font-size:18px;color: white;"></span></button> --><button type="button" class="navbar-toggle pull-left" data-toggle="collapse" data-target=".bottom-collapse-XX"><span class="glyphicon glyphicon-comment" style="font-size:18px;color: white;"></span></span><span class="badge" style="background-color:red">'.$this->messagesCount.'</span></button><!-- <a href="/messages/"><span class="nav-toggle"><span class="glyphicon glyphicon-envelope" style="color:white"></span><span class="badge" style="background-color:red">33</span></span> --></a><a class="navbar-brand pull-right" href="#" onclick="javascript: history.back(-1);"><span class="'.$this->name.'"></span><span style="font-size: 13px" class="glyphicon glyphicon-chevron-left"></span></a></div><div class="navbar-collapse collapse bottom-collapse"><ul class="nav navbar-nav">';
          foreach ($this->rightitens as $key => $value) {
            $this->addContent .= $value->html();
          };
      $this->addContent .='</ul><ul class="nav navbar-nav navbar-right">';
      foreach ($this->leftitens as $key => $value) {
        $this->addContent .= $value->html();
      };
      $this->addContent .='</ul></div></div></div>';
return $this->addContent;
	}
}
?>