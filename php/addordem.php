<?php

include_once '../function/function.php';
include_once "../class/classParceiro.php";
include_once "../class/classColaborador.php";
include_once "../class/classTecnico.php";
include_once "../class/classOS.php";
include_once "../dao/ParceiroDAO.php";
include_once "../dao/Colaborador.php";
include_once "../dao/TecnicoDAO.php";
include_once "../dao/OrdemDAO.php";


$numOS = new Função();
$cliente = new ParceiroDao();
$cliente = $cliente->contratoParceiro();

$colaborador = new Colaborador();
$dado = $colaborador->selectColaborador();


if (isset($_POST['cadastroagenda'])) {

    $ClassOS = new ClassOS();
    $ClassOS->setOS($_POST['nos']);
    $ClassOS->setCliente($_POST['cliente']);
    $ClassOS->setUsuario($_POST['usuario']);
    $ClassOS->setData($_POST['data']);
    $ClassOS->setResumo($_POST['resumo']);
    $ClassOS->setContrato($_POST['contrato']);
    $ClassOS->setHorainicio($_POST['horainicio']);
    $ClassOS->setHorafim($_POST['horafim']);
    $ClassOS->setIntervalo($_POST['Intervalo']);
    $ClassOS->setTranslado($_POST['translado']);
    $ClassOS->setStatus($_POST['status']);
    $ClassOS->setChave($_POST['chave']);
    $ClassOS->setHoraagendada($_POST['horaagendada']);
    $ClassOS->setDetalhe($_POST['detalhe']);

    $Ordem = new OrdemDao();
    $Ordem->insertOS($ClassOS);
}

?>
<br><br>
<div class="card" style="margin-bottom: 20px;">
    <div class="navbar navbar-dark bg-dark navbar-expand-lg" style=" color:#fff; ">
        Ordem de Serviço
    </div>
</div>
<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-agendamento-tab" data-toggle="tab" href="#nav-agendamento" role="tab" aria-controls="nav-agendamento" aria-selected="true" style="color: #FF7F00;">Agendamento</a>
        <a class="nav-item nav-link" id="nav-participante-tab" data-toggle="tab" href="#nav-participante" role="tab" aria-controls="nav-participante" aria-selected="true" style="color: #FF7F00;">Participante</a>
    </div>
</nav>
<br>
<form action="" method="POST">
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-agendamento" role="tabpanel" aria-labelledby="nav-agendamento-tab">

            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for="OS">Número OS</label>
                    <input type="type" class="form-control form-control-sm" name="nos" id="nos" placeholder="" value="<?php $numOS->NumOS(); ?>" readonly style="color:red;">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-5">
                    <label for="cliente">Cliente Agendado <span style="color: red;">*</span></label>
                    <select id="cliente" name="cliente" class="form-control form-control-sm is-invalid">
                        <option value=""></option>
                        <?php
                        foreach ($cliente as $clientes) {

                            echo "<option   value='" . $clientes->getID() . "'>" . $clientes->getNome() . "</option>";
                        }
                        ?>

                    </select>

                </div>
                <div class="form-group col-md-3">
                    <label for="usuario">Técnico/Usuario <span style="color: red;">*</span></label>
                    <select id="usuario" name="usuario" class="form-control form-control-sm is-invalid" required>
                        <option value=""></option>
                        <?php
                        foreach ($dado as $dados) {

                            echo "<option value=' . $dados->getId() . '>" . $dados->getNome() . "</option>";
                        }


                        ?>
                    </select>

                </div>

                <div class="form-group col-md-2">
                    <label for="data">Data Agendamento</label>
                    <input type="date" class="form-control form-control-sm" name="data" id="data" placeholder="" value="<?php echo date("Y-m-d"); ?>">
                </div>
                <div class="form-group col-md-2">
                    <label for="resumo">Resumo</label>
                    <input type="text" class="form-control form-control-sm" name="resumo" id="resumo" placeholder="">
                </div>
            </div>

            <div class="form-row">

                <div class="form-group col-md-4">
                    <label for="contrato">Nº Contrato <span style="color: red;">*</span></label>
                    <select id="contrato" name="contrato" class="form-control form-control-sm is-invalid">
                        <option value=""></option>
                    </select>

                </div>

                <div class="form-group col-md-2">
                    <label for="horainicio">Hora Inicio <span style="color: red;">*</span></label>
                    <input type="time" class="form-control form-control-sm is-invalid" name="horainicio" id="horainicio" placeholder="">
                </div>
                <div class="form-group col-md-2">
                    <label for="horafim">Hora Final <span style="color: red;">*</span></label>
                    <input type="time" class="form-control form-control-sm is-invalid" name="horafim" id="horafim" placeholder="">
                </div>
                <div class="form-group col-md-2">
                    <label for="duracao">Intervalo</label>
                    <input type="time" class="form-control form-control-sm" name="Intervalo" id="Intervalo" placeholder="">
                </div>
                <div class="form-group col-md-2">
                    <label for="duracao">Translado</label>
                    <input type="time" class="form-control form-control-sm" name="translado" id="translado" placeholder="">
                </div>


            </div>
            <div class="form-row">

                <div class="form-group col-md-4">
                    <label for="status">Status</label>
                    <select id="status" name="status" class="form-control form-control-sm">
                        <option selected></option>
                        <option value="G" selected>Geral em aberto</option>
                        <option value="A">Aguardando confirmação</option>
                        <option value="P">Particular ou cancelado</option>
                        <option value="M">Em atentimento</option>
                        <option value="E">Encerrado atendimento</option>
                        <option value="F">Finalizado</option>

                    </select>

                </div>
                <div class="form-group col-md-2">
                    <label for="contato">Hora Agendada</label>
                    <input type="type" class="form-control form-control-sm" name="horaagendada" id="horaagendada" placeholder="" readonly>
                </div>
                <div class="form-group col-md-4">
                    <label for="cliente">Usúario Chave <span style="color: red;">*</span></label>
                    <input type="type" class="form-control form-control-sm is-invalid" name="chave" id="chave" placeholder="">

                </div>

            </div>
            <div class="form-row">

                <div class="form-group col-md-12">
                    <label for="detalhe">Detalhe da OS</label>
                    <textarea class="form-control form-control-sm" name="detalhe" id="detalhe" rows="6"></textarea>
                </div>

            </div>
        </div>
        <!---*******************************************************************************************************************-->
        <div class="tab-pane fade" id="nav-participante" role="tabpanel" aria-labelledby="nav-participante-tab">

            <div class="input-group mb-3 form-group col-md-3">

                <!--   <a class="dropdown-item" class="btn btn-success" href="../pdf/os.php">Usuário</a> -->
            </div>

        </div>
        <div class="text-right">
            <input class="btn btn-success" name="cadastroagenda" type="submit" value="Salvar Agendamento">

        </div>


</form>
</div>


<!-- Função responsavel por preencher o campo do contrato de acordo com a consulta do cliente -->

<script>
    $("#cliente").change(function() {

        var id = document.getElementById('cliente').value

        $('#contrato').html('');

        $.ajax({

            type: 'POST', // Formado de envio
            url: '../ajax/contrato.php', // URL para onde vai ser enviados
            data: {
                id: id
            },
            success: function(data) {
                $('#contrato').html(data);
            }


        });
        return false;


    });
</script>

<!----------------- Função responsavel por informa se campo já está preenchido -------------------------------->
<script>
    $("#cliente").change(function() {

        if (document.getElementById('cliente').value != "") {
            $('#cliente').removeClass("form-control form-control-sm is-invalid").addClass("form-control form-control-sm is-valid");
            $('#contrato').removeClass("form-control form-control-sm is-invalid").addClass("form-control form-control-sm is-valid");
        } else {
            $('#cliente').removeClass("form-control form-control-sm is-valid").addClass("form-control form-control-sm is-invalid");
            $('#contrato').removeClass("form-control form-control-sm is-valid").addClass("form-control form-control-sm is-invalid");
        }

    });
    $("#usuario").change(function() {

        if (document.getElementById('usuario').value != "") {
            $('#usuario').removeClass("form-control form-control-sm is-invalid").addClass("form-control form-control-sm is-valid");

        } else {
            $('#usuario').removeClass("form-control form-control-sm is-valid").addClass("form-control form-control-sm is-invalid");
        }
    });
    $("#contrato").change(function() {

        if (document.getElementById("contrato").value != "") {
            $('#contrato').removeClass("form-control form-control-sm is-invalid").addClass("form-control form-control-sm is-valid");

        } else {
            $('#contrato').removeClass("form-control form-control-sm is-valid").addClass("form-control form-control-sm is-invalid");
        }
    });
    $("#horainicio").change(function() {

        if (document.getElementById("horainicio").value != "") {

            $('#horainicio').removeClass("form-control form-control-sm is-invalid").addClass("form-control form-control-sm is-valid");

        } else {
            $('#horainicio').removeClass("form-control form-control-sm is-valid").addClass("form-control form-control-sm is-invalid");
        }

    });
    $("#horafim").change(function() {

        if (document.getElementById("horafim").value != "") {
            $('#horafim').removeClass("form-control form-control-sm is-invalid").addClass("form-control form-control-sm is-valid");

        } else {
            $('#horafim').removeClass("form-control form-control-sm is-valid").addClass("form-control form-control-sm is-invalid");
        }

    });
</script>
<!-- --------------------------------------------------------------------------------------------------------------->




<!-- -------------------------------------------------------------------------------------- -->