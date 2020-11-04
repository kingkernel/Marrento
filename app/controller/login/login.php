<?php
    class login extends page
    {
        public function index()
        {
        	$path = "/app/view/templates/startbootstrapadmin/";	
			$fields = ["pathtemplate" => $path,
				"title"=>"KingBusca - Encontre Produtos, Serviços ou Aluguel"];
			$this->loadview("templates.startbootstrapadmin.login", $fields);
        }
        public function start()
        {
            $frase = $GLOBALS["app"]["secret_key"];
            $hash = $GLOBALS["app"]["hash_system"];
            $pass = base64_encode(sha1(md5(sha1($frase.":".$_POST["passkeyuser"]."|".$hash))));
            $sql = 'call loginuser("'.$_POST["emailuser"].'", "'.$pass.'")';
            if($query = queryDb($sql)){
                $dados = $query->fetch(PDO::FETCH_ASSOC);
                if ($dados["retorno"] == "OK"){
                    $sql = 'call datauser('.$dados["userid"].')';
                    $query = queryDb($sql);
                    $dados = $query->fetch(PDO::FETCH_ASSOC);
                    $user = new authuser;
                        $user->colletdata($dados);
                        header("Location: /");
                    } else {
                        echo "faill";
                    }
            } else{
                echo "fail";
            };
        }
    }
?>