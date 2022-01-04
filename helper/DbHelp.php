<?php

namespace App\Helper;

class DbHelper {
    
    var $db;
    
    function __construct(){
        
        //Conexión mediante PDO
        $opciones = [\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"];
        try {
            $this->db = new \PDO(
                'mysql:host=localhost;dbname=admin',
                'admin',
                'admin',
            $opciones);
            $this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            echo 'Conexión Fallida: ' . $e->getMessage();
        }
        
    }
    
}