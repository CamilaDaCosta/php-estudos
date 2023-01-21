<?php

class Login{
    private $email;
    private $senha;

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

    public function Logar(){
        if($this->email == "teste@teste.com" && $this->senha == "123456"){
            echo "Logado com sucesso<br>";
        }else{
            echo "Dados Invalidos";
        }
    }
}

$login = new Login();

$login->setEmail("teste@teste.com");
$login->setSenha("123456");
$login->Logar();

echo $login->getEmail() .' | '. $login->getSenha();