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
                    $mail->subject = "cadastro de membro";
                    $mail->to = $mailaddress;
                    $mail->sender = "daniel.santos.ap@gmail.com";
                    $mensagem = "app/view/templates/mailtemplates/signupstart.page.html";
                    $link = ["linkstart" => $stamp];
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
    }
?>