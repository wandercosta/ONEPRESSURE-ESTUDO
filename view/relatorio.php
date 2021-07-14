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
                  <h3><strong>Relatorios</strong></h3>
                  <p class="mb-4"> Historico </p>
                </div>
                <form method="post" action="" id="form" name="form" class="col-10">

            <div class="form-group" style="display:flex; align-items: flex-end;">
               <a href="historicoImc.php" type="" class="btn btn-pill text-white btn-block btn-primary" id="" style ="margin-right:2%;">IMC</a> 
               <a href="historicoPressao.php" type="" class="btn btn-pill text-white btn-block btn-primary" id="">PRESSÃO</a>

            </div>
            <p class="mb-4"> Grafico </p>
            <div class="form-group" style="display:flex; align-items: flex-end;">
               <a href="graficoImc.php" type="" class="btn btn-pill text-white btn-block btn-primary" id="" style ="margin-right:2%;">IMC</a> 
               <a href="graficoPressao.php" type="" class="btn btn-pill text-white btn-block btn-primary" id="">PRESSÃO</a>

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

