<?php
// Conexão
include_once '../model/db_connect.php';
// Header
include_once '../includes/header.php';
// Message
include_once '../includes/message.php';

include_once 'menu.php';


?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.2.0/css/ionicons.min.css" integrity="sha256-F3Xeb7IIFr1QsWD113kV2JXaEbjhsfpgrKkwZFGIA4E=" crossorigin="anonymous" />

<div class="container-fluid">
    <!-- Row -->
    <div class="row">
        <div class="col-xl-12 pa-0">
      
            <div class="container mt-sm-60 mt-30">
                <div class="hk-row">

                    <div class="col-xl-8">
                        <div class="card card-lg">
                            <h3 class="card-header border-bottom-0">
                            Dicas e Dúvidas
                                        </h3>
                            <div class="accordion accordion-type-2 accordion-flush" id="accordion_2">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between activestate">
                                        <a role="button" data-toggle="collapse" href="#collapse_1i" aria-expanded="true">Oque é Hipertensão</a>
                                    </div>
                                    <div id="collapse_1i" class="collapse show" data-parent="#accordion_2" role="tabpanel">
                                        <div class="card-body pa-15">A pressão arterial é responsável por empurrar o sangue bombeado pelo coração, pelas artérias, levando o suprimento necessário aos demais órgãos. Quando a pressão está alta, o coração faz mais força para bombear o sangue, porque com a idade as artérias ficam menos complacentes e oferecem mais resistência à sua passagem.</div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_2i" aria-expanded="false">Tipos de Hipertensão</a>
                                    </div>
                                    <div id="collapse_2i" class="collapse" data-parent="#accordion_2">
                                        <div class="card-body pa-15">A hipertensão é dividida em três tipos, conforme os estágios classificados pelos níveis de pressão arterial. O estágio I corresponde à pressão acima de 140/90 e abaixo de 160/100. O estágio II ocorre acima de 160/100 e abaixo de 180/110. Já o estágio III é marcado pela pressão acima de 180/110.

A pressão elevada, combinada com condições como AVC, obesidade ou diabetes, determina se o risco de morte é leve, moderado, alto ou altíssimo. Portanto, vale destacar que quanto maior é a hipertensão arterial, maiores são as chances de o paciente precisar de medicação.</div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_3i" aria-expanded="false">Quais são os principais sintomas da  hipertensão?</a>
                                    </div>
                                    <div id="collapse_3i" class="collapse" data-parent="#accordion_2">
                                        <div class="card-body pa-15">Em muitos indivíduos hipertensos, a doença é assintomática. Quando a hipertensão se manifesta, podem ocorrer sintomas incômodos como dores no peito, tontura, dor de cabeça, visão turva, zumbido no ouvido, formigamento nos membros e dificuldade de respirar</div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_4i" aria-expanded="false">Como prevenir e tratar a hipertensão?</a>
                                    </div>
                                    <div id="collapse_4i" class="collapse" data-parent="#accordion_2">
                                        <div class="card-body pa-15">A melhor dica para evitar a hipertensão é adotar hábitos saudáveis, como se alimentar de maneira saudável, abandonar o alcoolismo e tabagismo, manter o peso ideal, não abusar do sal e praticar exercícios físicos regularmente.

Se mesmo adotando esses cuidados, você não conseguir se livrar da doença e for diagnosticado com pressão alta, fique tranquilo. O problema tem tratamento e a hipertensão pode ser controlada. O médico indicará o melhor tratamento, que pode incluir uma dieta especial, mudança no estilo de vida e prescrição de medicamentos.</div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_5i" aria-expanded="false">Oque é IMC e como é calculado</a>
                                    </div>
                                    <div id="collapse_5i" class="collapse" data-parent="#accordion_2">
                                        <div class="card-body pa-15">O IMC é reconhecido como padrão internacional para avaliar o grau de sobrepeso e obesidade. É calculado dividindo o peso (em kg) pela altura ao quadrado (em metros).

Peso ÷ (Altura × Altura)

Exemplo de como calcular o IMC:

IMC = 80 kg ÷ (1,80 m × 1,80 m) = 24,69 kg/m2 (Peso ideal)</div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Row -->
</div>


<?php
include_once 'botao.php';
// Footer
include_once '../includes/footer.php';
?>