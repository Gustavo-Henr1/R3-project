<?php

namespace core;

use PDO;
use PDOException;

class connection
{
    public static function conectar() 
    {
        $host    = 'localhost';
        $usuario = 'r3userbanco';
        $senha   = 'r3senha';     
        $banco   = 'r3banco';
    try{
            $pdo = new  PDO("mysql:host=$host;dbname=$banco", $usuario, $senha);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
            return $pdo;
        }


        catch(PDOException $e)
        {
            die("Erro de conexão: " . $e->getMessage());
        }
    }
}







