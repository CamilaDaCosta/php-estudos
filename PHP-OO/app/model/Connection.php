<?php

namespace app\model;

class Connection{
    private static $instance;
    
    public static function getConn(){
        try{
            if(!isset(self::$instance)){
                self::$instance = new \PDO('mysql:host=db;dbname=poo;charset=utf8','user','pass');
                echo "conectado";
            }
        }catch(\PDOException $e){
            echo "Erro ao Conectar: " . $e->getMessage();
        }
        return self::$instance;
    }    
}