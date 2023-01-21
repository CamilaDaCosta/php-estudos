<?php

/**
 * COMPOSIÇÃO: uma classe cria a instancia de outra classe dentro de si
 * mesma, quando ela for destruída a instancia da outra classe também será
 */

class Pessoa{
    public function atribuiNome($nome){
        return "O nome da pessoa é {$nome}";
    }
}

class Exibe{
    public $pessoa;
    public $nome;

    function __construct($nome){
        $this->pessoa = new Pessoa();//composição
        $this->nome = $nome;
    }

    public function exibeNome(){
        echo $this->pessoa->atribuiNome($this->nome);
    }
}

$exibe = new Exibe("Camila");
$exibe->exibeNome();