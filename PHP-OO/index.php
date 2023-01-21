<?php

class Login{
    private $email;
    private $senha;
    private $nome;

    public function __construct($email, $senha, $nome)//método construtor
    {
        $this->nome = $nome;
        $this->setEmail($email);
        $this->setSenha($senha);
    }

    public function setEmail($e){
        $email = filter_var($e, FILTER_SANITIZE_EMAIL);//seta o dado passado como parametro na variavel da class e usa filter_var para excluir dados fora do padrão
        $this->email = $email;
    }
    public function getEmail(){
        return $this->email;//acessa o dado private
    }

    public function setSenha($e){
        $this->senha = $e;
    }
    public function getSenha(){
        return $this->senha;
    }

    public function getNome(){
        return $this->nome;
    }

    public function Logar(){
        if($this->email == "teste@teste.com" && $this->senha == "123456"){
            echo "Logado com sucesso<br>";
        }else{
            echo "Dados Invalidos";
        }
    }
}

$login = new Login("teste@teste.com","123456","camila");
$login->Logar();

echo $login->getEmail() .' | '. $login->getSenha() ." | ".$login->getNome();