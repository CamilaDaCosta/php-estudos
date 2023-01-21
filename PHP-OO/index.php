<?php

class Login{
    public static $user;

    public static function vericarLogin(){
        echo self::$user." Logado";
    }

    public function sair(){
        echo "<hr>Deslogou";
    }
}
Login::$user = "admin";//atributo static
Login::vericarLogin();//metodo static

$login = new Login();//instance
$login->sair();//metodo de classe