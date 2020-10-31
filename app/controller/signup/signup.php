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
               $mailaddress = trim($_POST["mailaddress"]);
               //$sql = 'call verifyemail("'.$mailaddress.'")';
               $sql = "select count(email) as retorno from tbl_emails where email='$mailaddress'";
               echo "<br/>" . $sql ."<br/>";
               $query = queryDb($sql);
               $dados = $query->fetch(PDO::FETCH_ASSOC);
               print_r($dados);

               //$sql = 'call spadduser("'.$mailaddress.'")';
               //$query = fastquery($sql);
               $mail = new sendhtmlmail();
               $mail->subject = "cadastro de membro";
               $mail->to = $mailaddress;
               $mail->sender = "daniel.santos.ap@gmail.com";
               $mail->content();
               $mail->send();
            } else {
                //header("Location : /");
                echo '<script type="text/javascript">window.history(-1)"; document.location.reload();</script>';
            };
        }
        public function remember()
        {
            echo "relembrar a senha";
        }
    }
?>