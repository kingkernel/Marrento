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
    public function postCrt()
    {
        if($_SERVER["REQUEST_METHOD"] == "GET"){
            echo "metódo de requisição não pemitido";
            exit;
        };
        foreach($_POST as $key=>$value)
        {
            if(is_null($value)){
                echo 'a variavel '.$key . "está vazia";
            };
        };
        $hash = base64_encode(implode("-", $_POST));
        $nasc = in_data($_POST["user-nasc"]);
        $sql = 'call addParticipantes("'
        .$_POST["user-nome"].'", "'
        .$_POST["user-cpf"].'", "'
        .$nasc.'", "'
        .$_POST["user-email"].'", "'
        .$_POST["user-pix"].'", "'
        .$_POST["user-estado"].'", "'
        .$_POST["user-cidade"].'", "'
        .$hash.'")';
        if (!queryDb($sql)){
            $info = retornaqueryinfo($sql);
            $this->loadview('templates.bolaofrontcreated.error');
        } else {
            $mail = new sendhtmlmail();
            $mail->subject = "Bolão Regional - cadastro de membro ";
            $mail->to = $_POST["user-email"];
            $content = new htmlwrapper;
            $fields = [
                "link"=> "http://".$_SERVER["HTTP_HOST"]."/user/activated/".$hash
            ];
            $mail->message = $content->loadtemplate("bolaofrontcreated/mailsigup.page.html", $fields);
            $mail->send();
            $this->loadview('templates.bolaofrontcreated.createfinish');
            //echo "sucesso";
        };

        /*
        $pathcommand = explode("/", $_GET["url"]);
        if($pathcommand[2]=="sigup")
        {
            //queryDb($sql); 
        } else {
            echo  "faill";
        };
        
        try {
            queryDb($sql);
        } catch (Exception $e) {
            echo "faill";
        };
        */
        
        //prepara e-mail de ativação

        //$mailcontent = new htmlwrapper;
        //$mensagem = "bolaofrontcreated/usercadastro.page.html";
        //$mailcontent->loadtemplate($mensagem);
        //$mail->sender = "daniel.santos@kingkernel.com.br";
        //$mensagem = "app/view/templates/mailtemplates/signupstart.page.html";
        //$link = ["linkstart" => "http://".$_SERVER['SERVER_NAME']."/signup/active/". $stamp.":".$mailaddress];
        //$mail->loadtemplate($mensagem, $link);
        //$mail->send();
        //echo $sql;
       // $this->loadview('templates.bolaofrontcreated.mails.mailsigup');
    }
    public function activated()
    {
        $hash = explode("/", $_GET["url"]);
        $sql = 'call existe("'.$hash[2].'")';
        //$sql = 'call activeUser("'.$hash[2].'")';
        $query = queryDb($sql)->fetch(PDO::FETCH_ASSOC);
        if ($query["existe"]==1)
        {
            $info = 'select email from participantes where passwordkey="'.$hash[2].'"';
            $query = queryDb($info)->fetch(PDO::FETCH_ASSOC);
            $fields = [
                "email" => $query["email"],
                "hash"=> $hash[2]
                ];
            $this->loadview('templates.bolaofrontcreated.activeuppasskey', $fields);
        } else {
            echo "fora da base";
        };
    }
    public function efettiveactive()
    {
        if($_SERVER["REQUEST_METHOD"] == "GET"){
            echo "metódo de requisição não pemitido";
            exit;
        };
        foreach($_POST as $key=>$value)
        {
            if(is_null($value)){
                echo 'a variavel '.$key . "está vazia";
            };
        };
        print_r($_POST);
    }
}
?>