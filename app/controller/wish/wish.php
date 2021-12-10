<?php
    class wish extends page
    {
    	public function __construct()
    	{
    		$user = json_decode($_SESSION["userinfo"],true);
    		$path = "/app/view/templates/startbootstrapadmin/";	
			$this->fields = ["pathtemplate" => $path,
				"title"=>"KingBusca - Encontre Produtos, Serviços ou Aluguel",
				"userdata" => $user];
				return $this;
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
        		if($dados["modality"] == "Compra")
        		{
        			$modality .= '<option value="'.$dados["modality"].'" selected>'.$dados["modality"].'</option>';
        		} else{
        			$modality .= '<option value="'.$dados["modality"].'">'.$dados["modality"].'</option>';
        		};
        	};
        	$this->fields["modality"] = $modality;
        	$this->fields["idmember"] = $this->fields["userdata"]["id"];
        	$this->loadview("templates.startbootstrapadmin.newwish", $this->fields);
        }
        public function cad()
        {

        	$sql = 'call addwish('.$this->fields["userdata"]["id"].', "'.$_POST["typewish"].'", "'.$_POST["desejo"].'", "'.$_POST["descric"].'", "'.$_POST["tagsarea"].'")';
        	preg_match_all('/(^|[^a-z0-9_])#([a-z0-9_]+)/i', $_POST["tagsarea"], $matchedHashtags);
        	foreach ($matchedHashtags[2] as $key => $tag)
        		{
        			$sqltag = 'call addhashtags("'.$tag.'", "consumer")';
        			fastquery($sqltag);
        		};
        	if(fastquery($sql)){
        		echo "sucesso!";
        	} else {
        		echo "faill";
        	}
        	//print_r($this->fields["userdata"]);
        }
    }
?>