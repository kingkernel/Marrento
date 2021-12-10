<?php
class tableFilted{
	public $addContent;
	public $css = '.row{margin-top:40px;padding: 0 10px;}.clickable{cursor: pointer;}.panel-heading div {margin-top: -18px;font-size: 15px;}.panel-heading div span{margin-left:5px;}.panel-body{display: none;}';
	public $js;
	public $style = 'default';
	public $title = 'Releção';
	public $altText = "Clique para filtrar";
	public $placeholder = "Filtre simpatizantes";
	public $theadCols;
	public $rowsTable= [];
	public function __construct(){
		$this->js = getjs("./".PUBLICDIR.'js/this/'.get_class().'.backend.js');
	}
	public function html(){
	$this->addContent = '<div class="container"><div class="row"><div class="col-md-6"><div class="panel panel-'.$this->style.'"><div class="panel-heading"><h3 class="panel-title">'.$this->title.'</h3><div class="pull-right"><span class="clickable filter" data-toggle="tooltip" title="'.$this->altText.'" data-container="body"><i class="glyphicon glyphicon-filter"></i></span></div></div><div class="panel-body"><input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="'.$this->placeholder.'" /></div><table class="table table-hover" id="dev-table"><thead>'.$this->theadCols.$this->addContent .='</thead><tbody>';
	/* foreach ($this->rowsTable as $key => $value) { */
		$this->addContent .= $this->rowsTable; /*$value->html();*/ 	/* }*/
	$this->addContent .='</tbody></table></div></div></div>';return $this->addContent;}
}
?>