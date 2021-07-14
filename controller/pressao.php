<?php

require_once("../model/pressao.php");

include_once '../includes/message.php';

class cadastroController{

    

    private $cadastro;

    public function __construct(){
        $this->cadastro = new Cadastro();
        $this->incluir();
        
    }
 

    private function incluir(){
        $this->cadastro->setIdPaciente($_SESSION['id']);
        $this->cadastro->setSistolica($_POST['sistolica']);
        $this->cadastro->setDiastolica($_POST['diastolica']);
        $this->cadastro->setPulso($_POST['pulso']);

        // var_dump($_POST);
        // exit;
        $result = $this->cadastro->incluir();
        if($result >= 1){
            echo "<script>alert('Registro incluído com sucesso!');document.location='../view/historicoPressao.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!, verifique as informações');history.back()</script>";
        }
    }
}


new cadastroController();
