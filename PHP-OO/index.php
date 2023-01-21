<?php

require 'classes/produto.php';
require 'models/produto.php';

use classes\Produto as productClasses;
use models\Produto as productModels;

$produto = new productClasses();
$produto->mostrarDetalhes();

echo '<br>';

$produto2 = new productModels();
$produto2->mostrarDetalhes();