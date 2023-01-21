<?php

class Pessoa{ //cria class
    public $nome;
    public $idade;

    public function falar(){//cria method
        echo $this->nome . " de ". $this->idade . " anos";
    }//method
}//class

$pessoa = new Pessoa();
$pessoa->nome = "Camila da Costa";
$pessoa->idade = "23";
$pessoa->falar();