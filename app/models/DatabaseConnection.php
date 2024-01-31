<?php

namespace App\Models;

class DatabaseConnection {
    private $server;
    private $database;
    private $username;
    private $password;
    private $connection;

    public function __construct($server,$database,$username, $password)
    {
        $this -> server = $server;
        $this -> database = $database;
        $this -> username = $username;
        $this -> password = $password;
    }

    public function connect(){
        try {
           $this -> connection = new \PDO("mysql:host=$this->server;dbname=$this->database",$this->username,$this->password);
           $this -> connection -> setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
           $this -> connection -> setAttribute(\PDO::ATTR_EMULATE_PREPARES, false);
           $setName = $this ->connection -> prepare("SET NAMES 'utf8'");
           $setName -> execute();
           echo "se hizo la conexion a la base de datos: ";
        } catch (\PDOException $e) {
            echo "Falló la conexion a la base de datos: ".$e->getMessage();
        }
    }

    public function get_connection(){
        return $this -> connection;
    }
}

// $server = "127.0.0.1";
// $database = "p8_todo_list";
// $username = "root";
// $password = "basededatos";

// //instanciar el obj de la conexion
// $databaseConnection = new DatabaseConnection($server,$database,$username, $password);
// //conectar la base de datos
// $databaseConnection -> connect();
?>