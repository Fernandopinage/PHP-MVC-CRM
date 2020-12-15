
<br><br>
<div class="card" style="margin-bottom: 20px;">
  <div class="navbar navbar-dark bg-dark navbar-expand-lg" style=" color:#fff; ">
    CONTRATO
  </div>
</div>
<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-contrato-tab" data-toggle="tab" href="#nav-contrato" role="tab" aria-controls="nav-contrato" aria-selected="true" style="color: #FF7F00;">Contrato</a>

    </div>
</nav>
<br>

<form action="../telas/add.php" method="POST">
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-contrato" role="tabpanel" aria-labelledby="nav-contrato-tab">

            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for="inputEmail4">Número do Contrato</label>
                    <input type="email" class="form-control" name="email" id="nome" placeholder="Email" required readonly>

                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label for="inputEmail4">Cliente</label>
                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail4">Modalidade</label>
                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" required>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputEmail4">Data do Contrato</label>
                    <input type="date" class="form-control" name="email" id="nome" placeholder="Email" required>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputEmail4">Prazo Validade</label>
                    <input type="date" class="form-control" name="email" id="nome" placeholder="Email" required>
                </div>
            </div>

            <div class="form-row">

                <div class="form-group col-md-2">
                    <label for="inputEmail4">Data Inicio</label>
                    <input type="date" class="form-control" name="email" id="nome" placeholder="Email" required>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputEmail4">Data Final</label>
                    <input type="date" class="form-control" name="email" id="nome" placeholder="Email" required>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputEmail4">Valor do Contrato</label>
                    <input type="email" class="form-control" name="text" id="nome" placeholder="Email" required>

                </div>
                <div class="form-group col-md-2">
                    <label for="inputEmail4">Hora Contrato</label>
                    <input type="time" class="form-control" name="text" id="nome" placeholder="Email" required>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputEmail4">Valor p/ Hora</label>
                    <input type="type" class="form-control" name="text" id="nome" placeholder="Email" required>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputEmail4">Valor Adicional</label>
                    <input type="type" class="form-control" name="text" id="nome" placeholder="Email" required>
                </div>



            </div>
            <div class="form-row">

                <div class="form-group col-md-3">
                    <label for="inputState">Tipo de Contrato</label>
                    <select id="inputState" class="form-control" >
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                    
                </div>
                <div class="form-group col-md-8">
                    <label for="inputEmail4">Complemento</label>
                    <input type="email" class="form-control" name="email" id="nome" placeholder="Email" required>
                </div>
            </div>


        </div>

</form>
</div>