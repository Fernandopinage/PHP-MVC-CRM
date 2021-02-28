
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
                    <label for="inputState">Cliente Agendado</label>
                    <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>

                </div>

                <div class="form-group col-md-2">
                    <label for="inputEmail4">Data Agendamento</label>
                    <input type="date" class="form-control" name="email" id="nome" placeholder="" >
                </div>
                <div class="form-group col-md-5">
                    <label for="inputEmail4">Resumo</label>
                    <input type="text" class="form-control" name="email" id="nome" placeholder="" >
                </div>
            </div>

            <div class="form-row">

                <div class="form-group col-md-2">
                    <label for="inputEmail4">Evento</label>
                    <input type="text" class="form-control" name="email" id="nome" placeholder="" >
                </div>
                <div class="form-group col-md-2">
                    <label for="inputEmail4">Hora Inicio</label>
                    <input type="time" class="form-control" name="email" id="nome" placeholder="" >
                </div>
                <div class="form-group col-md-2">
                    <label for="inputEmail4">Hora Final</label>
                    <input type="time" class="form-control" name="email" id="nome" placeholder="" >
                </div>
                <div class="form-group col-md-2">
                    <label for="inputEmail4">Duração</label>
                    <input type="time" class="form-control" name="email" id="nome" placeholder="" >
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">Nº Contrato</label>
                    <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>

                </div>

            </div>
            <div class="form-row">

                <div class="form-group col-md-4">
                    <label for="inputState">Projeto</label>
                    <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>

                </div>
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Contato do Cliente</label>
                    <input type="email" class="form-control" name="email" id="nome" placeholder="" >
                </div>

            </div>
            <div class="form-row">

                <div class="form-group col-md-12">
                <label for="inputEmail4">Resumo</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
                </div>

            </div>
        </div>
   
        


        <div class="tab-pane fade" id="nav-participante" role="tabpanel" aria-labelledby="nav-participante-tab">

            <div class="input-group mb-3 form-group col-md-3">
                <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="btn-group-toggle" data-toggle="buttons">
                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal">
                        ♣
                    </button>
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

    </div>
    
  


</form>
</div>