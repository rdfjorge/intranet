<?php

class Conexao
{
    private static $connection;

    private function __construct(){}

    public static function getConnection() {

        #Dados da conexão com o banco de dados
        define('DB_HOST'        , "10.10.10.246");
        define('DB_USER'        , "sa");
        define('DB_PASSWORD'    , "dc58rfgR");
        define('DB_NAME'        , "bd_sistema");
        define('DB_DRIVER'      , "sqlsrv");

        $pdoConfig  = DB_DRIVER . ":". "Server=" . DB_HOST . ";";
        $pdoConfig .= "Database=".DB_NAME.";TrustServerCertificate=true;";

        try {
            if(!isset($connection)){
                $connection =  new PDO($pdoConfig, DB_USER, DB_PASSWORD);
                $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                ##echo 'Conexão realizada com sucesso!!';
            }
            return $connection;
         } catch (PDOException $e) {
            $mensagem = "Drivers disponiveis: " . implode(",", PDO::getAvailableDrivers());
            $mensagem .= "\nErro: " . $e->getMessage();
            throw new Exception($mensagem);
         }
     }
}