<?php

/**
 * INTERFACE: contrato que garante que as classes que a implementarem terão
 * que implementar os metodos que existem nela
 * 
 * Em resumo, uma interface é uma forma de garantir que as classes que 
 * a implementam possuam determinados métodos, enquanto uma classe abstrata
 * é uma forma de fornecer uma implementação básica para as classes que a estendem.
 * Uma classe pode implementar múltiplas interfaces, mas só pode estender 
 * uma única classe abstrata. 
 * Além disso, uma interface não pode conter atributos ou métodos com 
 * implementação, enquanto uma classe abstrata pode.
 */
interface Crud{
    public function create();
    public function read();
    public function update();
    public function delete();
}

class Noticias implements Crud{
    public function create()
    {
        
    }
    public function read()
    {
        
    }
    public function update()
    {
        
    }
    public function delete()
    {
        
    }
}