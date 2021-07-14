<?php
// Conexão
include_once '../model/db_connect.php';
// Header
include_once '../includes/header.php';
// Message
include_once '../includes/message.php';


?>
<!-- <script>
function validarSenha(){
        senha = document.getElementById('senha').value;
        senha2 = document.getElementById('senha2').value;
   if (senha != senha2) {
      alert("SENHAS DIFERENTES!\nFAVOR DIGITAR SENHAS IGUAIS"); 
   }else{
      document.form.submit();
   }

 }

 function Verifica(){
    val1=document.getElementById("senha").value;
    val2=document.getElementById("senha2").value;
    if(val1!=val2){
    document.getElementById("senha").style.borderColor="#f00";
        document.getElementById("senha2").style.borderColor="#f00";
    }
    else{document.getElementById("senha").style.borderColor="#000";
        document.getElementById("senha2").style.borderColor="#000";

        }
    }
</script> -->

<body>

    <div class="content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="form-block">
                                <div class="mb-4">
                                    <h3><strong>OnePressure</strong></h3>
                                    <p class="mb-4">Seja bem-vindo!!!</p>
                                </div>

                                <div class="row">
                                    <form onsubmit="return validarSenha();" method="post" action="../controller/cadastroPaciente.php" id="form"
                                        name="form" class="col-10">
                                        <div class="form-group">

                                            <input class="form-control" type="text" id="nome" name="nome"
                                                placeholder="Nome"
                                                style="font-size: 12px; display: block; margin-bottom: 0; color: #b3b3b3;"
                                                required>
                                            <select name="sexo" id="sexo" class="form-control "
                                                style="font-size: 12px; display: block; margin-bottom: 0; color: #b3b3b3;">
                                                <option selected value="">Sexo</option>
                                                <option value="MASCULINO">Masculino</option>
                                                <option value="FEMININO">Feminino</option>
                                                <option value="NÃO INFORMAR">Não informar</option>
                                            </select>
                                            <input class="form-control" type="email" id="email" name="email"
                                                placeholder="E-mail"
                                                style="font-size: 12px; display: block; margin-bottom: 0; color: #b3b3b3;"required >
                                            <input class="form-control" type="date" id="data" name="nascimento"
                                                placeholder="Data de Nascimento"
                                                style="font-size: 12px; display: block; margin-bottom: 0; color: #b3b3b3;">
                                            <input class="form-control" type="password" id="senha" name="senha"
                                                placeholder="Senha"
                                                style="font-size: 12px; display: block; margin-bottom: 0; color: #b3b3b3;" onKeyPress= "Verifica()" onChange="Verifica()" required>
                                            <input class="form-control" type="password" id="senha2" name="senha2"
                                                placeholder="Confirmar Senha"
                                                style="font-size: 12px; display: block; margin-bottom: 0; color: #b3b3b3;" onKeyPress= "Verifica()" onChange="Verifica()"required>

                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-pill text-white btn-block btn-primary"
                                                id="cadastrar" onClick="validarSenha()"> Cadastrar</button>
                                        </div>
                                        <a href="../index.php">VOLTAR</a>
                                    </form>
                                </div>
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

