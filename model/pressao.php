<?php
require_once("banco.php");

class Cadastro extends Banco {

    private $idPaciente;
    private $sistolica;
    private $diastolica;
    private $pulso;

    //Metodos Set
    public function setIdPaciente($string){
        $this->idPaciente = $string;
    }

    public function setSistolica($string){
        $this->sistolica = $string;
    }

    public function setDiastolica($string){
        $this->diastolica = $string;
    }

    public function setPulso($string){
        $this->pulso = $string;
    }


    //Metodos Get
    public function getIdPaciente(){
        return $this->idPaciente;
    }
    public function getSistolica(){
        return $this->sistolica;
    }
    public function getDiastolica(){
        return $this->diastolica;
    }
    public function getPulso(){
        return $this->pulso;
    }
 
 



    public function incluir(){
        
        return $this->setPressao($this->getIdPaciente(),$this->getSistolica(),$this->getDiastolica(),$this->getPulso());
    }
}
?>