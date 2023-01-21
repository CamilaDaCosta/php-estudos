<?php

/**
 * ASSOCIAÇÃO: quando um objeto utiliza outro porém sem que haja dependência
 */

class Pedido{
    public $numero;
    public $cliente;
}

class Cliente{
    public $nome;
    public $endereco;
}

$cliente = new Cliente();
$cliente->nome = "Camila Costa";
$cliente->endereco = "Rua centro";

$pedido = new Pedido();
$pedido->numero = "001";
$pedido->cliente = $cliente;//associacao

$data = array(
    'numero' => $pedido->numero,
    'nome_cliente' => $pedido->cliente->nome,
    'endereco_cliente' => $pedido->cliente->endereco
);
var_dump($pedido);
echo "<hr>";

var_dump($data);
echo "<hr>";

echo $data['numero'];