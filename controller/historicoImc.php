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
    
        $row = $this->lista->getImc($_SESSION['id']);
        foreach ($row as $value){
            echo "<tr>";
            echo "<th>".$value['id'] ."</th>";
            echo "<td>".$value['altura'] ."</td>";
            echo "<td>".$value['peso'] ."</td>";
            echo "<td>".$value['imc'] ."</td>";
            echo "<td>".$value['data'] ."</td>";
            echo "<td><a class='btn btn-danger' href='../controller/deletarImc.php?id=".$value['id']."'>Excluir</a></td>";
            echo "</tr>";
        }
    }
}

