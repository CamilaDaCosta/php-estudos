<?php

require_once 'vendor/autoload.php';

$produto = new \app\model\Connection();
$produto->getConn();

$produto = new \app\model\Produto();
$produto->setNome("Notebook Dell");
$produto->setDescricao("i5, 4gb");

$produtoDao = new \app\model\ProdutoDao();
//$produtoDao->create($produto);

//var_dump($produto);