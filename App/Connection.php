<?php

namespace App;

class Connection {

    private $dbType = 'mysql';
    private $dbName = 'mvc';
    private $dbPath = 'localhost';
    private $dbUser = 'root';
    private $dbPass = '';


    public static function getDb () {
        try {

            $conn = new \PDO( // \ para indicar que a class fica na pasta raiz do php
                "mysql:host=localhost;dbname=mvc;charset=utf8",
                "root",
                ""
            );

            return $conn; //Precisamos returnar o $conn para efetuar a conexão

        } catch (\PDOException $e) {
            //..Tratar de alguma forma..//
            echo "Erro: " . $e;
        }
    }
}

?>