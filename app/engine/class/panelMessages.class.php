<?php
class panelMessages{
	public $addContent;
    public $msgTotal;
	public $panelTitle;
	public $enviadasText;
    /* = ' Enviadas <span class="badged"><span class="glyphicon glyphicon-envelope"></span><span class="fa fa-arrow-right" style="color:red"></span></span>';
    */
	public $conversasText;
	public $naoLidas;
    public $conteudo1;
    public $conteudo2;
    public $conteudo3;
	public function __construct(){
            /*
        if(!isset($this->panelTitle)){$this->panelTitle = '<span class="badge"><span class="glyphicon glyphicon-envelope" style="color:white"></span> '.$this->msgTotal.' </span> Mensagens ';};
            if(!isset($this->naoLidas)){$this->naoLidas=' Não lidas <span class="badged"><span class="fa fa-envelope"></span></span>?';};
            */
	}
	public function html(){
	$this->addContent = '<div class="panel panel-default" style="margin: 20px"><div class="panel-heading"><h3 class="panel-title">'.$this->panelTitle.'</h3></div><ul class="list-group"><li class="list-group-item"><div class="row toggle" id="dropdown-detail-1" data-toggle="detail-1"><div class="col-xs-10">'.$this->naoLidas.'</div><div class="col-xs-2"><i class="fa fa-chevron-down pull-right"></i></div></div><div id="detail-1">';$this->addContent .= $this->conteudo1;$this->addContent .= '</div></li><li class="list-group-item"><div class="row toggle" id="dropdown-detail-2" data-toggle="detail-2"><div class="col-xs-10">'.$this->enviadasText.'</div><div class="col-xs-2"><i class="fa fa-chevron-down pull-right"></i></div></div><div id="detail-2">';$this->addContent .= $this->conteudo2;$this->addContent .='</div></li><li class="list-group-item"><div class="row toggle" id="dropdown-detail-3" data-toggle="detail-3"><div class="col-xs-10">'. $this->conversasText.'</div><div class="col-xs-2"><i class="fa fa-chevron-down pull-right"></i></div></div><div id="detail-3">';$this->addContent .= $this->conteudo3; $this->addContent .='</div></li></ul></div><script>
$(document).ready(function() {
    $(\'[id^=detail-]\').hide();
    $(\'.toggle\').click(function() {
        $input = $( this );
        $target = $(\'#\'+$input.attr(\'data-toggle\'));
        $target.slideToggle();
    });
});
	</script>';
	return $this->addContent;
	}
}

?>