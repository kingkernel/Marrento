<?php
    class signup extends page
    {
        public function index()
        {
			$path = "/app/view/templates/startbootstrapadmin/";	
			$fields = ["pathtemplate" => $path,
				"title"=>"KingBusca - Encontre Produtos, Serviços ou Aluguel"];
			$this->loadview("templates.startbootstrapadmin.register", $fields);
        }
    }
?>