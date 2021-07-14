<?php
// Conexão
include_once '../model/db_connect.php';
// Header
include_once '../includes/header.php';


include_once 'menu.php';
require_once("../controller/graficoImc.php");

?>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Data',  'Peso', 'IMC'],
          <?php new listarController();  ?>
        ]);

        var options = {
          title: 'Acompanhamento de Pressao',
          hAxis: { title: 'Data',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0 }
    
        };

        var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  

    <div id="chart_div" style="width: 100%; height: 500px;"></div>
 
 
    <?php
include_once 'botao.php';
// Footer
include_once '../includes/footer.php';
?>
