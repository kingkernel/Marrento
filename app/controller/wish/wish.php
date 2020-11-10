<?php
    class wish extends page
    {
    	public function __construct()
    	{
    		$path = "/app/view/templates/startbootstrapadmin/";	
		$this->fields = ["pathtemplate" => $path,
				"title"=>"KingBusca - Encontre Produtos, Serviços ou Aluguel"];
    	}
        public function index()
        {
           echo 'rota wish criada!';
        }
        public function newwish()
        {
        	$user = json_decode($_SESSION["userinfo"],true);
        	$sql = 'call selmodalities()';
        	$query = queryDb($sql);
        	$modality = '';
        	while($dados = $query->fetch(PDO::FETCH_ASSOC)){
        		$modality .= '<option value="'.$dados["modality"].'">'.$dados["modality"].'</option>';
        	};
        	$this->fields["modality"] = $modality;
        	$this->fields["idmember"] = $user["id"];
        	$this->loadview("templates.startbootstrapadmin.newwish", $this->fields);
        }
        public function cad()
        {
        	print_r($_POST);
        	//Array ( [typewish] => Serviço [desejo] => DJ´s [descric] => preciso de um DJ para tocar em uma festa [tagsarea] => #DJ #som )
        	$user = json_decode($_SESSION["userinfo"]);
        	print_r($user);
        }
    }
?>