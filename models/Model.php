<?php 
abstract class Model {
    private static $pdo;

    private static function setBdd(){ 
        self::$pdo = new PDO("mysql:host=localhost;dbname=dbanimaux;charset=utf8;port=3307","root","");
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING); // these attribut is for management at the connection with PDO
    }

    protected function getBdd() {

        if(self::$pdo === null) { //we connect on DB just once if the connection doesn't exist
            self::setBdd();
        }
        return self::$pdo; // if the connection already exist we dont create another insance of PDO
                           // we just return the existing inastance of PDO.
    }
}