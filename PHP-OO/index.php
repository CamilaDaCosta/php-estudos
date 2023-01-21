<?php

/**
 * Herança é o recurso que permite que classes compartilhem atributos e
 * métodos afim de reaproveitar códigos ou comportamentos generalizados
 * classes que ultilizem o mesmo código são herdados
 */

 class Veiculo{//CLASSE MÃE
    protected $modelo;
    public $cor;
    public $ano;

    public function setModelo($e){
        $this->modelo = $e;
    }

    public function getModelo(){
        return $this->modelo;
    }

    public function Andar(){
        echo "Andando<br>";
    }
    public function Parar(){
        echo "<br>Parada";
    }
}

class Carro extends Veiculo{//CLASSE EXTENDIDA COM ATTR ESPECIFICOS
    public function limparParabrisa(){
        echo "Limpando Parabrisa!<br>";
    }
}

class Moto extends Veiculo{//CLASSE EXTENDIDA COM ATTR ESPECIFICOS
    public function trocarCorrente(){
        echo "<br>Trocando Corrente!";
    }
}

$carro = new Carro();
$carro->setModelo("UNO");
$carro->cor = "Branco";
$carro->ano = "2020";
$carro->Andar();
$carro->limparParabrisa();

echo "Carro: " .$carro->getModelo().'|'.$carro->cor.'|'.$carro->ano;

echo "<hr>";

$moto = new Moto();
$moto->setModelo("FAN");
$moto->cor = "Vermelha";
$moto->ano = "2019";
echo "Moto: " .$moto->getModelo().'|'.$moto->cor.'|'.$moto->ano;
$moto->trocarCorrente();
$moto->Parar();