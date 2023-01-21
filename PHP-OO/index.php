<?php
/**
 * Exception é a classe base para todas as Exceptions
 * message, code, file, line
 */

class NewsLetter{
    public function cadastrarEmail($email){
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            throw new Exception("Este email é inválido!", 1);
        }else{
            echo "Cadastrado";
        }
    }
}

$newsletter = new NewsLetter();

try{
    $newsletter->cadastrarEmail("teste@");
}catch(Exception $e){
    echo "Message: {$e->getMessage()}<br>";
    echo "Code: {$e->getCode()}<br>";
    echo "Line: {$e->getLine()}<br>";
    echo "File: {$e->getFile()}<br>";    
}