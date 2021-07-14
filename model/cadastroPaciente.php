<?php
require_once("banco.php");

class Cadastro extends Banco {

    private $nome;
    private $nascimento;
    private $sexo;
    private $email;
    private $senha;

    //Metodos Set
    public function setNome($string){
        $this->nome = $string;
    }
    public function setNascimento($string){
        $this->nascimento = $string;
    }
    public function setSexo($string){
        $this->sexo = $string;
    }
    public function setEmail($string){
        $this->email = $string;
    }
    public function setSenha($string){
        $this->senha = $string;
    }

    //Metodos Get
    public function getNome(){
        return $this->nome;
    }
    public function getNascimento(){
        return $this->nascimento;
    }
    public function getSexo(){
        return $this->sexo;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getSenha(){
        return $this->senha;
    }
 


    public function incluir(){
        return $this->setPaciente($this->getNome(),$this->getNascimento(),$this->getSexo(),$this->getEmail(),$this->getSenha());
    }
}
?>
