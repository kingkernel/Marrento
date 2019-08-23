<?php

/**
Criado:           25/05/2017
Data alteração:   25/05/2017
**/
class cardlogin extends cardshow {
	public $textocima = "Nossa comunidade de negócios está feliz por recebê-lo!";
  public $linktextoacima;
	public $descritor = "Daniels J. Santos";
	public $imagemlogin = "http://negociacaodealtoimpacto.com.br/wp-content/uploads/2015/07/2.png";
	public $num = "3";
  public $numtexto = "inscritos";
	public $textoabaixo = "Entre e começe a encontrar pessoas ou fazer negócios.";
  public $bodycolorclass = "info";
  public $leftlegend;
  public $lefticon;
  public $leftnum;
  public $meiolegend;
  public $meionum;
  public $meioicon;
  public $rightlegend;
  public $righticon;
  public $rightnum;

public function render(){
  echo '<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4" style="margin-top:10px;">
          <div class="panel panel-'.$this->bodycolorclass.'">
            <div class="panel-heading">
              <b>'.$this->textocima.'</b>
              <p title="Criador do sistema"><i class="fa fa-id-card fa-2x fa-lg"></i>&nbsp;
                <a href="'.$this->linktextoacima.'"><i>'.$this->descritor.'</i></a><!-- <i class="fa fa-tint fa-4x pull-right"></i> --></p>
              <p></p>
            </div>
            <div class="panel-body">
              <p class="text-center"><img src="'.$this->imagemlogin.'" style="height:125px" class="img-circle"></p>
               <p class="text-warning"><b>'.$this->num.'</b> '.$this->numtexto.' <!-- <span title="Rating"><i class="glyphicon glyphicon-user pull-right"></i><i class="glyphicon glyphicon-star pull-right"></i><i class="glyphicon glyphicon-star pull-right"></i><i class="glyphicon glyphicon-star pull-right"></i><i class="fa fa-star pull-right"></i></span> --></p>
            </div>
            <div class="row"></div>
            <div class="panel-heading">
              <div class="row">
                <div class="col-xs-4 col-md-4" title="'.$this->leftlegend.'">
                  <i class="'.$this->lefticon.' fa-2x pull-left"></i><span class="badge">'.$this->leftnum.'</span>
                </div>
                <div class="col-xs-4 col-md-4" title="'.$this->meiolegend.'">
                  <i class="'.$this->meioicon.' fa-2x pull-left"></i><span style="" class="badge"></span><span class="badge">'.$this->meionum.'</span>
                </div>
                <div class="col-xs-4 col-md-4" title="'.$this->rightlegend.'">
                  <i class="'.$this->righticon.' fa-2x pull-left"></i><span class="badge">'.$this->rightnum.'</span>
                </div>
              </div><br>
              <p>'.$this->textoabaixo.'</p>
              <hr>
              <p></p>
              <div>
                  <form method="POST" action="/auth">
                  <input type="text" class="form-control" name="user" style="margin:5px">
                  <input type="password" class="form-control" name="snhpwd" style="margin:5px">
                  <input type="submit" class="btn btn-block btn3d btn-primary" value="Entrar" >
                  </form>
              </div>
              <p></p><br>
              <!--  hastags sem uso <p><span class="label label-success">Tecnologia</span><span class="label label-warning">Programação</span><span class="label label-danger">Python</span><span class="label label-info">Dinâmica</span></p> -->
            </div>
          </div>
        </div>';
  }

  public function html(){
  $this->somacontent =  '<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4" style="margin-top:10px;"><div class="panel panel-'.$this->bodycolorclass.'"><div class="panel-heading"><b>'.$this->textocima.'</b><p title="Criador do sistema"><i class="fa fa-id-card fa-2x fa-lg"></i>&nbsp;<a href="'.$this->linktextoacima.'"><i>'.$this->descritor.'</i></a><!-- <i class="fa fa-tint fa-4x pull-right"></i> --></p><p></p></div><div class="panel-body"><p class="text-center"><img src="'.$this->imagemlogin.'" style="height:125px" class="img-circle"></p><p class="text-warning"><b>'.$this->num.'</b> '.$this->numtexto.' <!-- <span title="Rating"><i class="glyphicon glyphicon-user pull-right"></i><i class="glyphicon glyphicon-star pull-right"></i><i class="glyphicon glyphicon-star pull-right"></i><i class="glyphicon glyphicon-star pull-right"></i><i class="fa fa-star pull-right"></i></span> --></p></div><div class="row"></div><div class="panel-heading"><div class="row"><div class="col-xs-4 col-md-4" title="'.$this->leftlegend.'"><i class="'.$this->lefticon.' fa-2x pull-left"></i><span class="badge">'.$this->leftnum.'</span></div><div class="col-xs-4 col-md-4" title="'.$this->meiolegend.'"><i class="'.$this->meioicon.' fa-2x pull-left"></i><span style="" class="badge"></span><span class="badge">'.$this->meionum.'</span></div><div class="col-xs-4 col-md-4" title="'.$this->rightlegend.'"><i class="'.$this->righticon.' fa-2x pull-left"></i><span class="badge">'.$this->rightnum.'</span></div></div><br><p>'.$this->textoabaixo.'</p><hr><p></p><div><form method="POST" action="/auth"><input type="text" class="form-control" name="user" style="margin:5px"><input type="password" class="form-control" name="snhpwd" style="margin:5px"><input type="submit" class="btn btn-block btn3d btn-primary" value="Entrar" ></form></div><p></p><br><!--  hastags sem uso <p><span class="label label-success">Tecnologia</span><span class="label label-warning">Programação</span><span class="label label-danger">Python</span><span class="label label-info">Dinâmica</span></p> --></div></div></div>';
        return $this->somacontent;
  }

}