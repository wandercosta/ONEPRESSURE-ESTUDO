<?php
require_once("banco.php");

class Cadastro extends Banco {

    private $idPaciente;
    private $altura;
    private $peso;
    private $imc;

    //Metodos Set
    public function setIdPaciente($string){
        $this->idPaciente = $string;
    }
    public function setAltura($string){
        $this->altura = $string;
    }
    public function setPeso($string){
        $this->peso = $string;
    }

    public function setI($string){
        $this->imc = $string;
    }


    //Metodos Get
    public function getIdPaciente(){
        return $this->idPaciente;
    }
    public function getAltura(){
        return $this->altura;
    }
    public function getPeso(){
        return $this->peso;
    }
    public function getI(){
        return $this->imc;
    }
 
 



    public function incluir(){

        return $this->setIMC($this->getIdPaciente(),$this->getAltura(),$this->getPeso(),$this->getI());
    }
}
?>