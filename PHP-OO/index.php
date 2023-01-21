<?php
/**
 * ABSTRATA: define regras que as classes que a implementarem devem 
 * seguir obrigatoriamente
 */

abstract class Banco{
    protected $saldo;
    protected $limiteSaque;
    protected $juros;

    abstract protected function Sacar($s);
    abstract protected function Depositar($d);

    public function setSaldo($s){
        $this->saldo = $s;
    }

    public function getSaldo(){return $this->saldo;}
}

class Banco1 extends Banco{
    public function Sacar($s)
    {
        $this->saldo -= $s;
        echo "<hr>- {$s} [Saque]";
    }
    public function Depositar($d)
    {
        $this->saldo += $d;
        echo "<hr>+ {$d} [Depósito]";
    }
}

$b1 = new Banco1();
$b1->setSaldo(1000);
echo "<hr>Saldo = {$b1->getSaldo()}";
$b1->Sacar(200);
echo "<hr>Saldo = {$b1->getSaldo()}";
$b1->Depositar(500);
echo "<hr>Saldo = {$b1->getSaldo()}";