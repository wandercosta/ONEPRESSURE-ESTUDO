<?php
// Conexão
include_once '../model/db_connect.php';
// Header
include_once '../includes/header.php';
// Message


include_once 'menu.php';
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
                  <h3><strong>IMC</strong></h3>
                  <p class="mb-4"> Índice de Massa Corpórea</p>
                </div>
                <form method="post" action="../controller/imc.php" id="form" name="form" class="col-10">
            <div class="form-group">

                <input class="form-control" type="" id="altura" name="altura" placeholder="Altura (cm)"  style="font-size: 12px; display: block; margin-bottom: 0; color: #b3b3b3;" >               
                <input class="form-control" type="" id="peso" name="peso" placeholder="Peso (kg)" style="font-size: 12px; display: block; margin-bottom: 0; color: #b3b3b3;">

            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-pill text-white btn-block btn-primary" id="calcular">Calcular</button>
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

