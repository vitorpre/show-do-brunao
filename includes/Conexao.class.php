<?php


class Conexao
{
    
    private static $user = "root";
    private static $pass = "";
    private static $dbname = "showdobrunao";
    private static $host = "localhost";
    
    
    public static function getConexao()
    {    
            
        $dbh = new PDO('mysql:host=' . self::$host . ';dbname=' . self::$dbname . ';charset=utf8', self::$user, self::$pass);
        
        return $dbh;
    }
    
    
}
