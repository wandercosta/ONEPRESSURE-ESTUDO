<?php
// Conexão
include_once '../model/db_connect.php';
// Header
include_once '../includes/header.php';
// Message
// include_once '../includes/message.php';
session_start();

?>
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
                  <p class="mb-4">Desenvolvido para facilitar sua vida</p>
                </div>
                <form method="post" action="../controller/login.php" id="form" name="form"  class="col-10">
                  <div class="form-group first">
                    <label for="username">E-mail</label>
                    <input type="text" class="form-control" id="email" name="email" required>

                  </div>
                  <div class="form-group last mb-4">
                    <label for="password">Senha</label>
                    <input type="password" class="form-control" id="senha" name="senha" required>
                    
                  </div>
                  
                  <div class="d-flex mb-5 align-items-center">
            
                    <span class="mb-0"><a href="cadastroPaciente.php" class="forgot-pass">Cadastar</a></span> 

                    <span class="ml-auto"><a href="#" class="forgot-pass">Esqueceu a Senha?</a></span> 
                  </div>

                  <input type="submit" value="Entrar" name="submit" class="btn btn-pill text-white btn-block btn-primary">
                 

                  <!-- <span class="d-block text-center my-4 text-muted">Ou acesse com:</span>
                  
                  <div class="social-login text-center">
                    <a href="#" class="facebook">
                      <span class="icon-facebook mr-3"></span> 
                    </a>
                    <a href="#" class="twitter">
                      <span class="icon-twitter mr-3"></span> 
                    </a>
                    <a href="#" class="google">
                      <span class="icon-google mr-3"></span> 
                    </a>
                  </div> -->
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

