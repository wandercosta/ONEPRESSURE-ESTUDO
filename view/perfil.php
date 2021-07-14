<?php
// Conexão
include_once '../model/db_connect.php';
// Header
include_once '../includes/header.php';

include_once 'menu.php';

require_once '../controller/perfil.php';

?>



<body>

    <div class="content">
        <div class="container">
            <div class="row justify-content-center">
        
                <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="form-block">


                            <form method="post" action="../controller/perfil.php" id="form" name="form"  class="col-10">

                                <div class="modal-body" style="text-align-last: center;">
                                    <span><strong>Dados:: </strong></span>
                                    
                                    <div class="form-group first">
                                        <label for="username">NOME :</label>
                                        <input type="text" class="form-control" id="nome"  name="nome" value="<?php echo $editar->getNome(); ?>">
                                    </div>

                                    <div class="form-group first">
                                        <label for="username">NASCIMENTO :</label>
                                        <input type="text" class="form-control" id="nascimento" name = "nascimento"  value="<?php echo $editar->getNascimento(); ?>">
                                    </div>
                                    <div class="form-group first">
                                        <label for="username">IMC :</label>
                                        <input type="text" class="form-control" id="imc" name = "imc"  value="<?php echo $editar->getImc(); ?>" disabled>

                                        <?php if($editar->getImc() <= 16)   { echo '<p class="text-left"><strong> CLASSIFICAÇÃO : MAGREZA GRAU III</strong><br>';}
                                        elseif ($editar->getImc() <= 17)    { echo'<p class="text-left"><strong> CLASSIFICAÇÃO : MAGREZA GRAU II</strong><br> ';}
                                        elseif ($editar->getImc() <= 19)    { echo'<p class="text-left"><strong> CLASSIFICAÇÃO : MAGREZA GRAU I</strong><br> ';}
                                        elseif ($editar->getImc() <= 25)    { echo'<p class="text-left"><strong> CLASSIFICAÇÃO : NORMAL</strong><br> ';}
                                        elseif ($editar->getImc() <= 30)    { echo'<p class="text-left"><strong> CLASSIFICAÇÃO : SOBREPESO</strong><br>';}
                                        elseif ($editar->getImc() <= 35)    { echo'<p class="text-left"><strong> CLASSIFICAÇÃO : OBESIDADE GRAU I</strong><br> ';}
                                        elseif ($editar->getImc() <= 40)    { echo'<p class="text-left"><strong> CLASSIFICAÇÃO : OBESIDADE GRAU II</strong><br> ';}
                                        else { echo'<p class="text-left"><strong> CLASSIFICAÇÃO : OBESIDADE GRAU III</strong><br>';};
                                        ?>
                                    </div>
                                    <div class="form-group first">
                                        <label for="username">SEXO:</label>
                                        <input type="text" class="form-control" id="sexo" name = "sexo"  value="<?php echo $editar->getSexo();?>">
                                    </div>
                                    <hr>

                                    <p class="text-left"><strong> Hipertensão estagio 1 </strong><br>
                                        hipertensão acima de 130 por 90 e abaixo de 160 por 100
                                        <br>

                                </div>
                                <div style=" display: flex;">

                                    <input style="background-color:chocolate;border-color :white; margin-right: auto; width: 30%;" type="" value="Voltar" class="btn btn-pill text-white btn-block btn-primary">

                                        <div class="form-group">
                   
                <button  type="submit" class="btn btn-pill text-white btn-block btn-primary" id="editar" name="submit" value="editar">Salvar</button>
            </div>
                                </div>

                                </a>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    </div>
    <?php
// Footer
include_once '../includes/footer.php';
?>