<?php

include_once '../includes/message.php';

require_once("../model/banco.php");

class listarController{

    private $lista;

    public function __construct(){
        $this->lista = new Banco();
        $this->criarTabela();

    }

    private function criarTabela(){
        $row = $this->lista->getPressao($_SESSION['id']);
        foreach ($row as $value){
        

            
            echo "["."'".substr(data($value['data']),0,2) ."'".",".$value['sistolica'] .",".$value['diastolica'] .",".$value['pulso'] ."],";
            
        }
        
    }
}

