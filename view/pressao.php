<?php
// Conexão
include_once '../model/db_connect.php';
// Header
include_once '../includes/header.php';
// Message
include_once '../includes/message.php';

include_once 'menu.php';
?>
<body>
    
  <div class="content">
    <div class="container">
      <div class="row justify-content-center">
        <!-- <div class="col-md-6 order-md-2">
          <img src="images/undraw_file_sync_ot38.svg" alt="Image" class="img-fluid">
        </div> -->
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-12">
              <div class="form-block">
                  <div class="mb-4">
                  <h3><strong>Registro de Pressão</strong></h3>
                  
                </div>
                <form method="post" action="../controller/pressao.php" id="form" name="form" class="col-10">
            <div class="form-group">

                <input class="form-control" type="" id="sistolica" name="sistolica" placeholder="Pressão Sistolica (SIS)"  style="font-size: 12px; display: block; margin-bottom: 0; color: #b3b3b3;" >               
                <input class="form-control" type="" id="diastolica" name="diastolica" placeholder="Pressão Diastolica (DIA)" style="font-size: 12px; display: block; margin-bottom: 0; color: #b3b3b3;">
                <input class="form-control" type="" id="pulso" name="pulso" placeholder="Pressão de Pulso (PUL)" style="font-size: 12px; display: block; margin-bottom: 0; color: #b3b3b3;">

            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-pill text-white btn-block btn-primary" id="calcular">Registrar</button>
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

