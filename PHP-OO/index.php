<?php

/**
 * POLIMORFISMO: sobreescrever um metodo herdadado
 * @Override
 */

class Animal{
    public function Andar(){
        echo "Animal andou";
    }

    public function Correr(){
        echo "Animal correu";
    }
}

class Cavalo extends Animal{
    public function Andar(){
        echo "Cavalo andou";
        $this->Correr();
    }
}

$animal = new Cavalo();
$animal->Andar();

echo "<hr>";

$animal = new Animal();
$animal->Andar();
$animal->Correr();