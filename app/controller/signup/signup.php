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
        public function go()
        {
            if(isset($_POST["mailaddress"])){
                //verifica se e-mail está na base de dados
                $mailaddress = trim($_POST["mailaddress"]);
                $sql = 'call verifyemail("'.$mailaddress.'")';
                $query = queryDb($sql);
                $dados = $query->fetch(PDO::FETCH_ASSOC);
                if($dados["retorno"] == 1){
                    //mostra pagina ou mensagem que está na base
                    $this->loadview("templates.startbootstrapadmin.alreadyregistered");
                    exit;
                   } else {
                    // adicionar usuario
                    $stamp = base64_encode(sha1(md5(sha1(time().date("Y-mm-dd")))));
                    $sql = 'call spadduser("'.$mailaddress.'", "'.$stamp.'")';
                    $query = fastquery($sql);
                    //prepara e-mail de ativação
                    $mail = new sendhtmlmail();
                    $mail->subject = "KINGBUSCA - cadastro de membro ";
                    $mail->to = $mailaddress;
                    $mail->sender = "daniel.santos.ap@gmail.com";
                    $mensagem = "app/view/templates/mailtemplates/signupstart.page.html";
                    $link = ["linkstart" => "http://".$_SERVER['SERVER_NAME']."/signup/active/". $stamp.":".$mailaddress];
                    $mail->loadtemplate($mensagem, $link);
                    $mail->send();
                    $this->loadview("templates.startbootstrapadmin.registered");
                        };
                    } else {
                    header("Location: /login/");
                };
            }
        public function remember()
        {
            echo "relembrar a senha";
        }
        public function active()
        {
            $div = explode("/", $_GET["url"]);
            $parts = explode(":", $div[2]);
            $hash = $parts[0];
            $member = $parts[1];
            $sql = 'call verifyactive("'.$member.'", "'.$hash.'")';
            $query = queryDb($sql);
            if ($query->rowCount()>0){
                $dados = $query->fetch(PDO::FETCH_ASSOC);
                $fields = ["idmember"=>$dados["id"]];
                $this->loadview("templates.startbootstrapadmin.formactivemember", $fields);
            } else {
                echo "link invalido";
            };
        }
        public function finish()
        {
            if(isset($_POST["idmember"])){
                $nasc = dateBrIn($_POST["nascimento"]);
                $cep = str_replace("-", "", $_POST["cep"]);
                $fone = foneBRtoNum($_POST["fone"]);
                $whasapp = foneBRtoNum($_POST["whatsapp"]);
                $frase = $GLOBALS["app"]["secret_key"];
                $hash = $GLOBALS["app"]["hash_system"];
                $pass = base64_encode(sha1(md5(sha1($frase.":".$_POST["passkey"]."|".$hash))));
                $sql = 'call upmember('.$_POST["idmember"].', "'.$_POST["complemento"].'", "'.$_POST["numero"].'", '
                .$cep.', "'.$_POST["logradouro"].'", "'.$_POST["bairro"].'", "'.$_POST["cidade"].'", "'.$_POST["estado"]
                .'", "'.$fone.'", "'.$_POST["facebook"].'", "'.$whasapp.'", "'.$_POST["genero"].'", "'.$nasc.'", "'
                .$_POST["sobrenome"].'", "'.$_POST["membro"].'", "'.$pass.'")';
                if (fastquery($sql)){
                    $this->loadview("templates.startbootstrapadmin.finish");
                } else {
                    echo "falha";
                };
            } else {
                header("Location: /");
            };
        }
        public function logout()
        {
            unset($_SESSION);
            session_destroy();
            header("Location: /");
        }
    }
?>