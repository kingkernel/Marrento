<?php
class resumeReportItem{
	public $addContent;
	public $nome;
	public $progressStyle = 'progress-striped';
	public $progressColor = 'success';
	public $barSize = '50';
	public $barOverlayText = 'Meu texto';
	public $id;

	public function __construct(){

	}
	public function html(){
		$this->addContent = '<div><div class="col-md-4"> '.$this->nome.' :</div><div class="col-md-8"><div class="progress '.$this->progressStyle.'"><div id="'.$this->id.'" class="progress-bar progress-bar-'.$this->progressColor.'" role="progressbar" aria-valuenow="5"  aria-valuemin="0" aria-valuemax="100" style="width: '.$this->barSize.'%;"><span class="overbarprogress">'.$this->barOverlayText.'</span></div></div></div></div>';
		return $this->addContent;
	}
}
?>