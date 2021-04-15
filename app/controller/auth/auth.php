<?php
class auth
{

    public function __construct()
    {

    }
    public function login()
    {
        $user = $_POST["usermail"];
        $keypass = $_POST["passkey"];

        $sql = 'call sp_login("'.$user.'", "'.passkeyHash($_POST["passkey"], $_POST["usermail"]).'")';
        $query = queryDb($sql)->fetch(PDO::FETCH_ASSOC);
        if($query["existe"]==1)
        {
            echo "pode entrar";
        } else {
            echo "ninguém no banco de dados";
        }
    }
}
