<?php

define('BD_SERVIDOR','localhost');
define('BD_USUARIO','root');
define('BD_SENHA','');
define('BD_BANCO','onepressure');

class Banco{

    protected $mysqli;

    public function __construct(){
        $this->conexao();
    }

    private function conexao(){
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO , BD_SENHA, BD_BANCO);
    }

    public function setPaciente($nome,$nascimento,$sexo,$email,$senha){
        $stmt = $this->mysqli->prepare("INSERT INTO pacientes (`nome`, `nascimento`, `sexo`, `email`, `senha`) VALUES (?,?,?,?,?)");
        $stmt->bind_param("sssss",$nome,$nascimento,$sexo,$email,$senha);
         if( $stmt->execute() == TRUE){
            return true ;
        }else{
            return false;
        }

    }


    public function pesquisarPaciente($id){
        $result = $this->mysqli->query("SELECT * FROM pacientes WHERE id='$id'");
        // var_dump($result->fetch_array(MYSQLI_ASSOC));
        return $result->fetch_array(MYSQLI_ASSOC);

    }


    public function pesquisarPacienteEmail($email){
        
        $result = $this->mysqli->query("SELECT * FROM pacientes WHERE email='$email'");
        return $result->fetch_array(MYSQLI_ASSOC);

    }


    public function atualizarPaciente($nome,$nascimento,$sexo,$id){
        $stmt = $this->mysqli->prepare("UPDATE `pacientes` SET `nome` = ?, `nascimento`=?, `sexo`= ? WHERE `id` = ?");
        $stmt->bind_param("ssss",$nome,$nascimento,$sexo,$id);

        if($stmt->execute()==TRUE){
            return true;
        }else{
            return false;
        }
    }


    public function setIMC($idPaciente,$altura,$peso,$imc){
        $stmt = $this->mysqli->prepare("INSERT INTO imc (`idPaciente`, `altura`, `peso`, `imc`) VALUES (?,?,?,?)");
        $stmt->bind_param("ssss",$idPaciente,$altura,$peso,$imc);
        $stmt2 = $this->mysqli->prepare("UPDATE `pacientes` SET `imc` = ?  WHERE `id` = ?");
        $stmt2->bind_param("ss",$imc,$idPaciente);

         if( $stmt->execute() == TRUE and $stmt2->execute() == TRUE){
            return true ;
        }else{
            return false;
        }

    }
    public function getImc($id){
        $result = $this->mysqli->query("SELECT * FROM imc WHERE idPaciente='$id' ORDER BY `imc`.`data` ASC");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;

    }

    public function deleteImc($id){
        if($this->mysqli->query("DELETE FROM `imc` WHERE `id` = '".$id."';")== TRUE){
            return true;
        }else{
            return false;
        }

    }

    public function setPressao($idPaciente,$sistolica,$diastolica,$pulso){

        $stmt = $this->mysqli->prepare("INSERT INTO pressao(`idPaciente`, `sistolica`, `diastolica`, `pulso`) VALUES (?,?,?,?)");
        $stmt->bind_param("ssss",$idPaciente,$sistolica,$diastolica,$pulso);
         if( $stmt->execute() == TRUE ){
             
            return true ;
        }else{
            return false;
        }
    }




    public function getPressao($id){
        $result = $this->mysqli->query("SELECT * FROM pressao WHERE idPaciente='$id'ORDER BY `pressao`.`data` ASC" );
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;

    }

    public function deletePressao($id){
        if($this->mysqli->query("DELETE FROM `pressao` WHERE `id` = '".$id."';")== TRUE){
            return true;
        }else{
            return false;
        }

    }






}
?>
