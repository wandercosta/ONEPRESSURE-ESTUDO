<link href='../includes/css/core/main.min.css' rel='stylesheet' />
<link href='../includes/css/daygrid/main.min.css' rel='stylesheet' />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="../includes/css/personalizado.css">


<?php
// Conexão
include_once '../model/conexao.php';
// Header
include_once '../includes/header.php';
// Message
include_once '../includes/message.php';

include_once 'menu.php';

?>



    <div id='calendar'></div>

    <div class="modal fade" id="visualizar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detalhes do Lembrete</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="visevent">
                        <dl class="row">
                            <dt class="col-sm-3">ID do Lembrete</dt>
                            <dd class="col-sm-9" id="id"></dd>

                            <dt class="col-sm-3">Título do Lembrete</dt>
                            <dd class="col-sm-9" id="title"></dd>

                            <dt class="col-sm-3">Início do Lembrete</dt>
                            <dd class="col-sm-9" id="start"></dd>

                            <dt class="col-sm-3">Fim do Lembrete</dt>
                            <dd class="col-sm-9" id="end"></dd>
                        </dl>
                        <button class="btn btn-warning btn-canc-vis">Editar</button>
                        <a href="" id="apagar_lembrete" class="btn btn-danger">Apagar</a>
                    </div>
                    <div class="formedit">
                        <span id="msg-edit"></span>
                        <form id="editevent" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id" id="id">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Título</label>
                                <div class="col-sm-10">
                                    <input type="text" name="title" class="form-control" id="title"
                                        placeholder="Título do lembrete">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Color</label>
                                <div class="col-sm-10">
                                    <select name="color" class="form-control" id="color">
                                        <option value="">Selecione</option>
                                        <option style="color:#FFD700;" value="#FFD700">Amarelo</option>
                                        <option style="color:#0071c5;" value="#0071c5">Azul Turquesa</option>
                                        <option style="color:#FF4500;" value="#FF4500">Laranja</option>
                                        <option style="color:#8B4513;" value="#8B4513">Marrom</option>
                                        <option style="color:#1C1C1C;" value="#1C1C1C">Preto</option>
                                        <option style="color:#436EEE;" value="#436EEE">Royal Blue</option>
                                        <option style="color:#A020F0;" value="#A020F0">Roxo</option>
                                        <option style="color:#40E0D0;" value="#40E0D0">Turquesa</option>
                                        <option style="color:#228B22;" value="#228B22">Verde</option>
                                        <option style="color:#8B0000;" value="#8B0000">Vermelho</option>
                                       
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Início do Lembrete</label>
                                <div class="col-sm-10">
                                    <input type="text" name="start" class="form-control" id="start"
                                        onkeypress="DataHora(event, this)">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Final do Lembrete</label>
                                <div class="col-sm-10">
                                    <input type="text" name="end" class="form-control" id="end"
                                        onkeypress="DataHora(event, this)">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <button type="button" class="btn btn-primary btn-canc-edit">Cancelar</button>
                                    <button type="submit" name="CadEvent" id="CadEvent" value="CadEvent"
                                        class="btn btn-warning">Salvar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="cadastrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cadastrar Lembrete</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <span id="msg-cad"></span>
                    <form id="addevent" method="POST" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Título</label>
                            <div class="col-sm-10">
                                <input type="text" name="title" class="form-control" id="title"
                                    placeholder="Título do evento">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Cor</label>
                            <div class="col-sm-10">
                                <select name="color" class="form-control" id="color">
                                    <option value="">Selecione</option>
                                    <option style="color:#FFD700;" value="#FFD700">&#9648; Amarelo</option>
                                    <option style="color:#0071c5;" value="#0071c5">&#9648; Azul Turquesa</option>
                                    <option style="color:#FF4500;" value="#FF4500">&#9648; Vermelho</option>
                                    <option style="color:#8B4513;" value="#8B4513">&#9648; Marrom</option>
                                    <option style="color:#1C1C1C;" value="#1C1C1C">&#9648; Preto</option>
                                    <option style="color:#436EEE;" value="#436EEE">&#9648; Royal Blue</option>
                                    <option style="color:#A020F0;" value="#A020F0">&#9648; Roxo</option>
                                    <option style="color:#40E0D0;" value="#40E0D0">&#9648; Turquesa</option>
                                    <option style="color:#228B22;" value="#228B22">&#9648; Verde</option>
                                    <option style="color:#8B0000;" value="#8B0000">&#9648; Vinho</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Início:</label>
                            <div class="col-sm-10">
                                <input type="text" name="start" class="form-control" id="start"
                                    onkeypress="DataHora(event, this)">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Final:</label>
                            <div class="col-sm-10">
                                <input type="text" name="end" class="form-control" id="end"
                                    onkeypress="DataHora(event, this)">
                            </div>
                        </div>

                        <!-- <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Recorrencia</label>
                            <div class="col-sm-10">
                                <select name="=" class="form-control" id="">
                                    <option value="0">Nunca</option>
                                    <option value="1">Diaria</option>
                                    <option value="7">Semanal</option>
                                    <option value="30">Mensal</option>
                                    <option value="365">Anal</option>
                                </select>
                            </div>
                        </div> -->

                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" name="CadEvent" id="CadEvent" value="CadEvent"
                                    class="btn btn-success">Cadastrar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<script src='../includes/js/core/main.min.js'></script>
<script src='../includes/js/interaction/main.min.js'></script>
<script src='../includes/js/daygrid/main.min.js'></script>
<script src='../includes/js/core/locales/pt-br.js'></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="../includes/js/personalizado.js"></script> 
    <?php
// Footer
include_once '../includes/footer.php';
?>