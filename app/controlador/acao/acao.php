<?php
/*
Data criação: 28/03/2019
*/
class acao {
	public function __construct(){
		$page = new page;
		$this->page = $page;
		return $this->page;
	}
	public function index (){

	}
	public function chamados(){
	$panel_0 = new rowAlert;
    $panel_0->colSize = "md-12";
    $panel_0->class = "alert alert-warning";
    $panel_0->titleSize = "3";
    $panel_0->alertTitle = 'Chamados Abertos <span class="glyphicon glyphicon-tasks"></span>';
    
    $table = new table;
    $headers = ["Usuário", "Problema", "Estatus", "Ação"];
    $table->headers($headers);
    $sql = queryDb("call sp_sel_teccalled()");
    $arrayRow = [];
    while ($query = $sql->fetch(PDO::FETCH_ASSOC)) {
      if($query["estatus"] == "Aberto"){$class = "warning";} else {$class = "success";};
        array_push($arrayRow, '<tr><td>'.$query["nameperson"].'</td><td>'.$query["prob"].'</td><td><span class="label label-'.$class.'">'.$query["estatus"].'</span></td><td><form action="http://'.SITENAME.'/acao/updatecalled/" method="post"><select required="true" name="calledaction"><option value="">escolha</option><option value="Em Atendimento">Em atendimento</option><option value="Encerrado">Encerrado</option></select> <input type="submit" class="btn btn-success" value="Atualizar"><input type="hidden" name="id" value="'.$query["id"].'"></form></td></tr>');
      };
    $table->rows($arrayRow);

    $panel_0->alertText = $table->html();
    $sql = 'call sp_sel_teccalled()';
    $query = queryDb($sql);
    $dados =$query->fetch(PDO::FETCH_ASSOC);

		$this->page->bodycontent = $panel_0->html();
		$this->page->render();
	}
	public function updatecalled(){
		//print_r($_POST);
        //[calledaction] => Encerrado [id] => 1
        $acaochamado = $_POST["calledaction"];
        $idchamado = $_POST["id"];
        $sql = 'call sp_up_teccalled("'.$acaochamado.'", "'.$idchamado.'")';
        echo $sql;
	}
}
?>