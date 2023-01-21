<?php

class Pessoa{
    const NOME = "Camila";

    public function exibirNome(){
        echo self::NOME;
    }
}

class Camila extends Pessoa{
    const NOME = "Costa";

    public function exibirNome(){
        echo self::NOME;//do mesmo escopo
        echo parent::NOME;//do escopo herdado
    }

}

$pessoa = new Camila();
$pessoa->exibirNome();