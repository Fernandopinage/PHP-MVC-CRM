<?php

include_once "../class/classParceiro.php";
include_once "../dao/ParceiroDAO.php";


$cliente = new ParceiroDao();
$cliente = $cliente->contratoParceiro();




if (isset($_POST['agendamento'])) {

    $_POST['cliente'];
    $_POST['data'];
    $_POST['resumo'];
    $_POST['contrato'];
    $_POST['horainicio'];
    $_POST['horafim'];
    $_POST['duracao'];
    $_POST['evento'];
    $_POST['projeto'];
    $_POST['contato'];
    $_POST['detalhe'];
}


?>


<br><br>
<div class="card" style="margin-bottom: 20px;">
    <div class="navbar navbar-dark bg-dark navbar-expand-lg" style=" color:#fff; ">
        AGENDAMENTO TÉCNICO
    </div>
</div>
<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-agendamento-tab" data-toggle="tab" href="#nav-agendamento" role="tab" aria-controls="nav-agendamento" aria-selected="true" style="color: #FF7F00;">Agendamento</a>
        <a class="nav-item nav-link" id="nav-participante-tab" data-toggle="tab" href="#nav-participante" role="tab" aria-controls="nav-participante" aria-selected="true" style="color: #FF7F00;">Participante</a>
    </div>
</nav>
<br>
<hr><br>
<form action="../telas/add.php" method="POST">
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-agendamento" role="tabpanel" aria-labelledby="nav-agendamento-tab">

            <div class="form-row">
                <div class="form-group col-md-5">
                    <label for="cliente">Cliente Agendado</label>
                    <select id="cliente" name="cliente" class="form-control">
                        <option selected></option>
                        <?php
                        foreach ($cliente as $clientes) {

                            echo "<option value='".$clientes->getID()."'>" . $clientes->getNome() . "</option>";
                        }


                        ?>

                    </select>

                </div>

                <div class="form-group col-md-2">
                    <label for="data">Data Agendamento</label>
                    <input type="date" class="form-control" name="data" id="data" placeholder="">
                </div>
                <div class="form-group col-md-5">
                    <label for="resumo">Resumo</label>
                    <input type="text" class="form-control" name="resumo" id="resumo" placeholder="">
                </div>
            </div>

            <div class="form-row">

                <div class="form-group col-md-4">
                    <label for="contrato">Nº Contrato</label>
                    <select id="contrato" name="contrato" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>

                </div>

                <div class="form-group col-md-2">
                    <label for="horainicio">Hora Inicio</label>
                    <input type="time" class="form-control" name="horainicio" id="horainicio" placeholder="">
                </div>
                <div class="form-group col-md-2">
                    <label for="horafim">Hora Final</label>
                    <input type="time" class="form-control" name="horafim" id="horafim" placeholder="">
                </div>
                <div class="form-group col-md-2">
                    <label for="duracao">Duração</label>
                    <input type="time" class="form-control" name="duracao" id="duracao" placeholder="">
                </div>
                <div class="form-group col-md-2">
                    <label for="cliente">Evento</label>
                    <select id="cliente" name="evento" class="form-control">
                        <option selected value="com hora">Com Hora</option>
                        <option value="sem hora">Sem Hora</option>
                    </select>

                </div>

            </div>
            <div class="form-row">

                <div class="form-group col-md-4">
                    <label for="projeto">Projeto</label>
                    <select id="projeto" name="projeto" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>

                </div>
                <div class="form-group col-md-4">
                    <label for="contato">Contato do Cliente</label>
                    <input type="type" class="form-control" name="contato" id="contato" placeholder="">
                </div>

            </div>
            <div class="form-row">

                <div class="form-group col-md-12">
                    <label for="detalhe">Detalhe</label>
                    <textarea class="form-control" name="detalhe" id="detalhe" rows="6"></textarea>
                </div>

            </div>
        </div>
        <!---*******************************************************************************************************************-->
        <div class="tab-pane fade" id="nav-participante" role="tabpanel" aria-labelledby="nav-participante-tab">

            <div class="input-group mb-3 form-group col-md-3">
                <div class="text-right">
                    <input class="btn btn-success" name="agendamento" type="submit" value="Salvar Agendamento">
                </div>
            </div>

        </div>




</form>
</div>

<script>

$("#cliente").change(function(){

    var a = document.getElementById('cliente').value
    console.log(a)
});

</script>