<?php
class user extends page
{
    public function __construct()
    {

    }
    public function cadastro()
    {
        $sql = 'select sigla from estados';
        $query = queryDb($sql);
        $estados = "";
        while ($dados =$query->fetch(PDO::FETCH_ASSOC))
        {   
            $estados .= '<option value="'.$dados["sigla"].'">'.$dados["sigla"]."</option>";
        };
        $tpl_values = ["estados"=>$estados];
        $this->loadview('templates.bolaofrontcreated.usercadastro', $tpl_values);
    }
    public function post()
    {
        if($_SERVER["REQUEST_METHOD"] == "GET"){
            echo "metódo de requisição não pemitido";
        };
        foreach($_POST as $key=>$value)
        {
            if(is_null($value)){
                echo 'a variavel '.$key . "está vazia";
            };
        };
        $hash = base64_encode(implode("-", $_POST));

        $sql = 'call addParticipantes("'
        .$_POST["user-nome"].'", "'
        .$_POST["user-cpf"].'", "'
        .$_POST["user-email"].'", "'
        .$_POST["user-pix"].'", "'
        .$_POST["user-estado"].'", "'
        .$_POST["user-cidade"].'", "'
        .$hash.'")';
        //prepara e-mail de ativação
        $mail = new sendhtmlmail();
        $mail->subject = "Bolão Regional - cadastro de membro ";
        $mail->to = $_POST["user-email"];
        $mailcontent = new htmlwrapper;
        $mensagem = "usercadastroform.section.html";
        $mailcontent->loadtemplate($mensagem);
        //$mail->sender = "daniel.santos@kingkernel.com.br";
        //$mensagem = "app/view/templates/mailtemplates/signupstart.page.html";
        //$link = ["linkstart" => "http://".$_SERVER['SERVER_NAME']."/signup/active/". $stamp.":".$mailaddress];
        //$mail->loadtemplate($mensagem, $link);
        //$mail->send();
        echo $sql;
        $this->loadview('templates.bolaofrontcreated.mails.mailsigup');
    }
}
?>