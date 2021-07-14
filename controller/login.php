<?php
require_once("../model/banco.php");

class loginController {

    public function __construct(){
        $this->logar = new Banco();
    }


    public function validar($email,$senha){

            $row = $this->logar->pesquisarPacienteEmail($email);
            $this->email         =$row['email'];
            $this->senha         =$row['senha'];
            $this->id            =$row['id'];


        if($this->senha == $senha ){
            session_start();
            $_SESSION['id'] = $this->id;
            echo "<script>document.location='../view/inicial?id=".$this->id."'</script>";
        }else{
           
            echo "<script>alert('Login ou Senha errado!!');history.back()</script>";
        }
    }
}


$logar = new loginController();

if(isset($_POST['submit'])){

    $logar->validar($_POST['email'],$_POST['senha']);
}
?>
