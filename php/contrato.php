<br><br>
<div class="card" style="margin-bottom: 20px;">
    <div class="navbar navbar-dark bg-dark navbar-expand-lg" style=" color:#fff; ">
        CONTRATO
    </div>
</div>
<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-contrato-tab" data-toggle="tab" href="#nav-contrato" role="tab" aria-controls="nav-contrato" aria-selected="true" style="color: #FF7F00;">Contrato</a>
        <a class="nav-item nav-link" id="nav-projeto-tab" data-toggle="tab" href="#nav-projeto" role="tab" aria-controls="nav-projeto" aria-selected="true" style="color: #FF7F00;">Projeto</a>
    </div>
</nav>
<br>

<form action="../telas/add.php" method="POST">
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-contrato" role="tabpanel" aria-labelledby="nav-contrato-tab">

            <div class="form-row">
                <div class="form-group col-md-2">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Projeto
                        </label>
                    </div>
                </div>
            </div><br><br>
            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for="inputEmail4">Número do Contrato</label>
                    <input type="email" class="form-control form-control-sm" name="email" id="nome" placeholder="" readonly>

                </div>

            </div>
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label for="inputState">Cliente Agendado</label>
                    <select id="inputState" class="form-control form-control-sm">
                        <option selected> CLIENTE 01</option>
                        <option> CLIENTE 02</option>
                        <option> CLIENTE 03</option>
                        <option> CLIENTE 04</option>
                    </select>

                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail4">Modalidade</label>
                    <input type="text" class="form-control form-control-sm" name="nome" id="nome" placeholder="">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputEmail4">Data do Contrato</label>
                    <input type="date" class="form-control form-control-sm" name="email" id="nome" placeholder="">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputEmail4">Prazo Validade</label>
                    <input type="date" class="form-control form-control-sm" name="email" id="nome" placeholder="">
                </div>
            </div>

            <div class="form-row">

                <div class="form-group col-md-2">
                    <label for="inputEmail4">Data Inicio</label>
                    <input type="date" class="form-control form-control-sm" name="email" id="nome" placeholder="">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputEmail4">Data Final</label>
                    <input type="date" class="form-control form-control-sm" name="email" id="nome" placeholder="">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputEmail4">Valor do Contrato</label>
                    <input type="email" class="form-control form-control-sm" name="text" id="nome" placeholder="R$">

                </div>
                <div class="form-group col-md-2">
                    <label for="inputEmail4">Hora Contrato</label>
                    <input type="time" class="form-control form-control-sm" name="text" id="nome" placeholder="">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputEmail4">Valor p/ Hora</label>
                    <input type="type" class="form-control form-control-sm" name="text" id="nome" placeholder="R$">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputEmail4">Valor Adicional</label>
                    <input type="type" class="form-control form-control-sm" name="text" id="nome" placeholder="R$">
                </div>



            </div>
            <div class="form-row">

                <div class="form-group col-md-3">
                    <label for="inputState">Tipo de Contrato</label>
                    <select id="inputState" class="form-control form-control-sm">
                        <option selected>COM HORA</option>
                        <option>SEM HORA</option>
                    </select>

                </div>
                <div class="form-group col-md-8">
                    <label for="inputEmail4">Complemento</label>
                    <input type="email" class="form-control form-control-sm" name="email" id="nome" placeholder="">
                </div>
            </div>


        </div>

        <!----------------------------------------- PROJETO ---------------------------------------->
        <div class="tab-pane fade" id="nav-projeto" role="tabpanel" aria-labelledby="nav-projeto-tab">

            <div class="form-row">
                <div class="form-group col-md-5">
                    <label for="inputEmail4">Descrição</label>
                    <input type="text" class="form-control form-control-sm" name="nome" id="nome" placeholder="">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail4">Modalidade</label>
                    <input type="text" class="form-control form-control-sm" name="nome" id="nome" placeholder="">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputEmail4">Data do Contrato</label>
                    <input type="date" class="form-control form-control-sm" name="email" id="nome" placeholder="">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputEmail4">Prazo Validade</label>
                    <input type="date" class="form-control form-control-sm" name="email" id="nome" placeholder="">
                </div>
            </div>

        </div>
        <!----------------------------------------- -------------------------------------------------->
</form>
</div>
<script>
    
</script>