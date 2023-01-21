<?php
/**
 * PRIVATE: apenas acessivel pela propria classe
 * PROTECTED: acessivel pela propria classe e suas filhas
 * PUBLIC: acessivel nos dois escopos
 */

class Veiculo{
    public $modelo;
    public $cor;
    public $ano;   

    private function Andar(){
        echo "Andou<br>";
    }
    protected function Parar(){
        echo "Parou<br>";
    }

    public function mostrarAcao(){
        $this->Andar();
        $this->Parar();
    }
}

class Carro extends Veiculo{
    public function mostrarAcao(){
        //$this->Andar();//ESSA CLASSE NÃO PODE VER PRIVATE
        $this->Parar();//ESSA CLASSE PODE VER PROTECTED
    }
}

$private = new Veiculo();
$private->mostrarAcao();

$protectedCarro = new Carro();
$protectedCarro->mostrarAcao();