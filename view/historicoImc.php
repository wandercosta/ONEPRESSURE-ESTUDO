<?php
// Conexão
include_once '../model/db_connect.php';
// Header
include_once '../includes/header.php';


include_once 'menu.php';
require_once("../controller/historicoImc.php");

?>
                    <div class="mb-4">
                  <h3><strong>Histórico IMC</strong></h3>
                  <p class="mb-4"> Índice de Massa Corpórea</p>
                </div>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>ALTURA</th>
                <th>PESO</th>
                <th>IMC</th>
                <th>DATA</th>
                <th>EXCLUIR</th>
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