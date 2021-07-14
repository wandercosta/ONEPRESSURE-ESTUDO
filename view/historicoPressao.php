<?php
// Conexão
include_once '../model/db_connect.php';
// Header
include_once '../includes/header.php';


include_once 'menu.php';
require_once("../controller/historicoPressao.php");

?>
                      <div class="mb-4">
                  <h3><strong>Histórico Pressão </strong></h3>
                </div>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>PRESSÃO SISTOLICA</th>
                <th>PRESSÃO DIASTOLICA</th>
                <th>PRESSÃO PULSO</th>
                <th>Data</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
            <?php new listarController();  ?>

        </tbody>
    </table>

    <?php
include_once 'botao.php';
// Footer
include_once '../includes/footer.php';
?>