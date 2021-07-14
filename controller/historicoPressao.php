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
            echo "<tr>";
            echo "<th>".$value['id'] ."</th>";
            echo "<td>".$value['sistolica'] ."</td>";
            echo "<td>".$value['diastolica'] ."</td>";
            echo "<td>".$value['pulso'] ."</td>";
            echo "<td>".data($value['data']) ."</td>";
            echo "<td><a class='btn btn-danger' href='../controller/deletarPressao.php?id=".$value['id']."'>Excluir</a></td>";
            echo "</tr>";
        }
    }
}

