
<?php
require_once("../model/banco.php");
// Message
include_once '../includes/message.php';

class editarController {
    
    private $editar;
    private $nome;
    private $nascimento;
    private $sexo;
 

    public function __construct($id){
        $this->editar = new Banco();
        $this->criarFormulario($id);
    }
    private function criarFormulario($id){
        $row = $this->editar->pesquisarPaciente($id);
        $this->nome         =$row['nome'];
        $this->sexo         =$row['sexo'];
        $this->nascimento   =$row['nascimento'];
        $this->imc   =$row['imc'];


    }
    public function editarFormulario($nome,$nascimento,$sexo,$id){
  
        if($this->editar->atualizarPaciente($nome,$nascimento,$sexo,$id) == TRUE){
           
            echo "<script>alert('Registro alterado com sucesso!');document.location='../view/perfil.php'</script>";
        }else{
           
            echo "<script>alert('Erro ao gravar registro!');history.back()</script>";
        }
    }
    public function getNome(){
        return $this->nome;
    }
    public function getNascimento(){
        return $this->nascimento;
    }
    public function getSexo(){
        return $this->sexo;
    }
    public function getId(){
        return $this->id;
    }
    public function getImc(){
        return $this->imc;
    }


}



$id = $_SESSION['id'];
$editar = new editarController($id);
if(isset($_POST['submit'])){
    $editar->editarFormulario($_POST['nome'],$_POST['nascimento'],$_POST['sexo'],$id);
}
?>
