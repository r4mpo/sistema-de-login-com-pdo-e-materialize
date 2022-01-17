<?php
class Conexao {
    private static $conectar;
    public static function getConn(){
        if(!isset(self::$conectar)){
            self::$conectar = new \PDO("mysql:host=localhost;dbname=login;charset=utf8","root","");
        }
        return self::$conectar;
    }
}
/* Este script funciona para estabelecer uma conexão entre o sistema e o banco de dados desejado. */
