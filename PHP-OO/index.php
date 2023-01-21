<?php

/**
 * AGREGAÇÃO: quando uma classe precisa de outra para executar sua ação
 * uma classe que usa outra como parte de si mesma
 */

class Produtos{
    public $name;
    public $valor;

    public function __construct($name, $valor){
        $this->name = $name;
        $this->valor = $valor;
    }
}

class Carrinho{
    public $produtos;

    public function adiciona(Produtos $produto){//agregacao
        $this->produtos[] = $produto;
    }

    public function exibir(){
        foreach($this->produtos as $produto ){
            echo $produto->name . "<br>";
            echo $produto->valor . "<hr>";
        }
    }
}

//$produto1 = new Produtos("P1",1200);
$produto2 = new Produtos("P2",100);
$produto3 = new Produtos("P3",80);

$carrinho = new Carrinho();
$carrinho->adiciona(new Produtos("P1",1200));
$carrinho->adiciona($produto2);
$carrinho->adiciona($produto3);

$carrinho->exibir();

