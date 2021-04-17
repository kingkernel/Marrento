<?php
class auth extends page
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
            $_SESSION["logged"] = true;
            header("Location: / ");
        } else {
            echo "ninguém no banco de dados";
        }
    }
    public function logoff()
    {
        unset($_SESSION["logged"]);
        header("Location: /");
    }
}
