<?php
/**
 * PRIVATE: apenas acessivel pela propria classe
 * PROTECTED: acessivel pela propria classe e suas filhas
 * PUBLIC: acessivel nos dois escopos
 */

class Veiculo{
    private $modelo;
    protected $cor;
    public $ano;

    public function setPrivateModelo($e){
        $this->modelo = $e;
    }
    public function getPrivateModelo(){
        return $this->modelo;
    }    

    public function Andar(){
        echo "Andou";
    }
    public function Parar(){
        echo "Parou";
    }
}

class Carro extends Veiculo{
    public function setProtectedCor($e){
        $this->cor = $e;
    }
    public function getProtectedCor(){
        return $this->cor;
    }
}

$veiculo = new Carro();
$veiculo->setPrivateModelo("Uno");//metodo da classe veiculo
$veiculo->setProtectedCor("red");//metodo da classe carro
$veiculo->ano = "2022";
echo $veiculo->getPrivateModelo()."<br>"
    .$veiculo->getProtectedCor()."<br>"
    .$veiculo->ano."<br>";

var_dump($veiculo);