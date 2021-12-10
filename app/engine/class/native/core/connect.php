<?php
/*
*/

class Conexao
{
    private static $connection;

    private function __construct(){}

    public static function getConnection() {

        $pdoConfig  = $_ENV["DB_DRIVER"] . ":". "Server=" . $_ENV["DB_HOST"] . ";";
        $pdoConfig .= "DATABASE=".$_ENV["DB_NAME"].";";

        try {
            if(!isset($connection)){
                $connection =  new PDO($pdoConfig, $_ENV["DB_USER"], $_ENV["DB_PASSWORD"]);
                $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
                return $connection;
            } catch (PDOException $e) {
                $mensagem = "Drivers disponiveis: " . implode(",", PDO::getAvailableDrivers());
                $mensagem .= "\nErro: " . $e->getMessage();
                throw new Exception($mensagem);
         }
     }
}