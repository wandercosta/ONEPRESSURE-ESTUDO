<?php
require_once("../model/cadastroPaciente.php");
class cadastroController{

    private $cadastro;

    public function __construct(){
        $this->cadastro = new Cadastro();
        // var_dump($_POST);
        // exit;
        $this->incluir();
        
    }
 

    private function incluir(){
        $this->cadastro->setNome($_POST['nome']);
        $this->cadastro->setNascimento($_POST['nascimento']);
        $this->cadastro->setSexo($_POST['sexo']);
        $this->cadastro->setEmail($_POST['email']);
        $this->cadastro->setSenha($_POST['senha']);
        $result = $this->cadastro->incluir();
        if($result >= 1){
            echo "<script>alert('Registro incluído com sucesso!');document.location='../view/Login.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!, verifique as informações');history.back()</script>";
        }
    }
}
new cadastroController();
