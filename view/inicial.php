<?php
// Conexão
include_once '../model/db_connect.php';
// Header
include_once '../includes/header.php';
// Message
include_once '../includes/message.php';

include_once 'menu.php';


?>

<div class="content">
        <div class="container">
            <div class="row justify-content-center">
        
                <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="form-block">


                            <form method="post" action="../controller/perfil.php" id="form" name="form"  class="col-10">

                                <div class="modal-body" style="text-align-last: center;">
                                    <span><strong>Bem Vindo(a) de volta !! </strong></span>
                                    <p></p>
                                    <span> Classifiação da Atual : </span>
                                    <p></p>
                                    <p class="text-left"><strong> Hipertensão estagio 1 </strong><br>
                                        hipertensão acima de 130 por 90 e abaixo de 160 por 100
                                        <br>
                                        <p></p>
                                    <span> IMC da Atual : </span>
                                    <p class="text-left"><strong> 28 </strong><br>
                                    CLASSIFICAÇÃO : SOBREPESO
                                        <br>

                                    
                                    <p></p>

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
include_once 'botao.php';
// Footer
include_once '../includes/footer.php';
?>