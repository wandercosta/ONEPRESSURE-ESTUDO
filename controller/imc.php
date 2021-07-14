<?php

require_once("../model/imc.php");

include_once '../includes/message.php';

class cadastroController{

    

    private $cadastro;

    public function __construct(){
        $this->cadastro = new Cadastro();
        $this->incluir();
        
    }
 

    private function incluir(){
        $this->cadastro->setIdPaciente($_SESSION['id']);
        $this->cadastro->setAltura($_POST['altura']);
        $this->cadastro->setPeso($_POST['peso']);
        $imc = $_POST['peso']/(($_POST['altura']*$_POST['altura'])/10000);
        $this->cadastro->setI($imc);

        // var_dump($_POST);
        // exit;
        $result = $this->cadastro->incluir();
        if($result >= 1){
            echo "<script>alert('Registro incluído com sucesso!');document.location='../view/historicoImc.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!, verifique as informações');history.back()</script>";
        }
    }
}

$idPaciente = $_SESSION['id'];
// echo  $idPaciente;
// exit;
new cadastroController();
