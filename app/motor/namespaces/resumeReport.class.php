<?php
/*
data criação: 31/01/2018
*/
class resumeReport{
	public $somacontent;
	public $total;
	public $cidades = [];
	public $bairros = [];
	public $reportItens = [];
	public $infoListText;
	public $bigtitle = 'nome';
	public function __construct(){

	}
	public function getResume(){
		$sql = 'call sp_getcidades('.$_SESSION["userinfo"]["idlicenca"].')';
		$query = retornadbinfo($sql);
		while ($data = $query->fetch(PDO::FETCH_ASSOC)) {
			array_push($this->cidades, $data["cidades"]);
		}

		$sql = 'call sp_getbairros('.$_SESSION["userinfo"]["idlicenca"].')';
		$query = retornadbinfo($sql);
		while ($data = $query->fetch(PDO::FETCH_ASSOC)) {
			array_push($this->bairros, $data["bairros"]);
		}

		$sql = 'call sp_getresume('.$_SESSION["userinfo"]["idlicenca"].')';
		$query = retornadbinfo($sql);
		$data = $query->fetch(PDO::FETCH_ASSOC);

		$this->total = $data["total"];
		return $this;
	}
	public function html(){
	$this->somacontent = '<style>.glyphicon { margin-right:5px;}.rating .glyphicon {font-size: 18px;}.rating-num { margin-top:0px;font-size: 45px; }.progress { margin-bottom: 5px;}.progress-bar { text-align: left;}/* .rating-desc .col-md-3 {padding-right: 0px;} */.overbarprogress {margin-left: 5px; overflow: visible;clip: auto;}</style><div class="container" style="margin-left: 5px"><div class="row"><div class="col-md-4 col-sm-6"><div class="well well-sm"><div class="row"><div class="text-center"><h1 class="rating-num">'.$this->bigtitle.'</h1><div class="rating"><span class="glyphicon glyphicon-user"></span>Total agenda: <span class="label label-warning">'.$this->total.'</span></div><div class="rating"><a href="#">'.$this->infoListText.'</a> <span class="glyphicon glyphicon-map-marker" style="color:#A12C2D"></span></div>';
foreach ($this->reportItens as $key => $value) {
	$this->somacontent .= $value->html();
};
$this->somacontent .= '</div></div></div></div></div></div>';
return $this->somacontent;
	}
}
?>