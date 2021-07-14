<?php
// Conexão
include_once '../model/db_connect.php';
// Header
include_once '../includes/header.php';


include_once 'menu.php';
require_once("../controller/graficoPressao.php");

?>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
google.charts.load('current', {
    'packages': ['corechart', 'bar']
});
google.charts.setOnLoadCallback(drawStuff);

function drawStuff() {

    var button = document.getElementById('change-chart');
    var chartDiv = document.getElementById('chart_div');

    var data = google.visualization.arrayToDataTable([
        ['Dia / Mês', 'Sistolica', 'Diastolica', 'Pressao'],
        <?php new listarController();  ?>
    ]);

    var materialOptions = {
    
  
        series: {
            0: {
                axis: 'distance'
            }, // Bind series 0 to an axis named 'distance'.
            1: {
                axis: 'brightness'
            } // Bind series 1 to an axis named 'brightness'.
        },
        axes: {
            y: {
                distance: {
                    label: 'mmHg'
                }, // Left y-axis.
                brightness: {
                    side: 'right',
                    label: 'mmHg'
                } // Right y-axis.
            }
        }
    };

    var classicOptions = {
       
        series: {
            0: {
                targetAxisIndex: 0
            },
            1: {
                targetAxisIndex: 1
            }
        },
        vAxes: {
            // Adds titles to each axis.
            0: {
                title: 'mmHg '
            },
            1: {
                title: 'mmHg '
            }
        }
    };

    function drawMaterialChart() {
        var materialChart = new google.charts.Bar(chartDiv);
        materialChart.draw(data, google.charts.Bar.convertOptions(materialOptions));
        button.innerText = 'Alterar para  Grafico de Linha';
        button.onclick = drawClassicChart;

    }

    function drawClassicChart() {


        var classicChart = new google.visualization.AreaChart(chartDiv);
        classicChart.draw(data, classicOptions);
        button.innerText = 'Alterar para  Grafico de Barra';
        button.onclick = drawMaterialChart;

    }

    drawMaterialChart();
};
</script>



<div class="content" style="width:100%;">
    <div class="container">
        <div class="row justify-content-center">
            <div class=" contents" style=width:100%;>
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="form-block">
                            <div class="mb-4">
                                <h3><strong>Grafico Pressão</strong></h3>
                            </div>
                       
                            <div id="chart_div" style="width: 100%; height: 500px;"></div>
                            <div>
                            <button id="change-chart" class="btn btn-pill text-white btn-block btn-primary" style="width: 30%;">
                                Mudar Grafico</button>
                            </div>

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