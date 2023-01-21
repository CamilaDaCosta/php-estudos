<?php

/**
 * MAGIC METHODS
 * __set()
 * __get()
 * __toString()
 * __invoke()
 */

class Pessoa{
    private $dados = array();

    public function __set($nome, $valor){
        $this->dados[$nome] = $valor;

    }

    public function __get($nome){
        return $this->dados[$nome];
    }

    public function __toString(){
        return "Nome: {$this->dados['nome']}";
    }

    public function __invoke(){
        return "Objeto como função";
    }
}

$pessoa = new Pessoa();
$pessoa->nome = "camila";
$pessoa->idade = "23";
$pessoa->endereco = "centro";

echo $pessoa();

//echo "{$pessoa->nome}.{$pessoa->idade}.{$pessoa->endereco}";