<br><br>
<div class="card" style="margin-bottom: 20px;">
    <div class="navbar navbar-dark bg-dark navbar-expand-lg" style=" color:#fff; ">
        USUÁRIO
    </div>
</div>
<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-usuario-tab" data-toggle="tab" href="#nav-usuario" role="tab" aria-controls="nav-usuario" aria-selected="true" style="color: #FF7F00;">Usuário</a>
        <a class="nav-item nav-link" id="nav-acesso-tab" data-toggle="tab" href="#nav-acesso" role="tab" aria-controls="nav-acesso" aria-selected="false" style="color: #FF7F00;">Acesso</a>
        <a class="nav-item nav-link" id="nav-aplicacao-tab" data-toggle="tab" href="#nav-aplicacao" role="tab" aria-controls="nav-aplicacao" aria-selected="false" style="color: #FF7F00;">Aplicação</a>
    </div>
</nav>

<div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-usuario" role="tabpanel" aria-labelledby="nav-usuario-tab">
        <p class="text-white bg-secondary text-center">DADOS DO USUÁRIO</p>
        <div class="text-right">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Nova Função
            </button>

        </div>

        <form action="" method="$_POST">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputNome" id="nome">Nome Completo</label>
                    <input type="text" class="form-control form-control-sm" name="nome" id="nome" placeholder="">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputEmail4" id="email">Email</label>
                    <input type="text" class="form-control form-control-sm" name="email" id="email" placeholder="">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputFoto" id="foto">Foto</label>
                    <input type="file" class="form-control form-control-sm" id="foto" name="foto" placeholder="">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="inputSenha" id="senha">Senha</label>
                    <input type="password" class="form-control form-control-sm" name="senha" id="senha" placeholder="">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputNovasenha" id="novasenha">Confirmar senha</label>
                    <input type="password" class="form-control form-control-sm" name="novasenha" id="novasenha" placeholder="">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputState" id="funcao">Função</label>
                    <select id="funcao" name="funcao" class="form-control form-control-sm">
                        <option selected></option>
                        <option></option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail4" id="data">Data de Cadastro</label>
                    <input type="date" class="form-control form-control-sm" name="data" id="data" placeholder="">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputEmail4" id="option">Tempo de Expiração</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="option" id="option" value="m">
                        <label class="form-check-label" for="exampleRadios1">
                            1 Mês
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="option" id="option" value="s">
                        <label class="form-check-label" for="exampleRadios2">
                            6 Mêses
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="option" id="option" value="a">
                        <label class="form-check-label" for="exampleRadios2">
                            1 Anos
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="option" id="option" value="n" CHECKED>
                        <label class="form-check-label" for="exampleRadios2">
                            Senha nunca expira
                        </label>
                    </div>
                </div>
            </div>
    </div>
    <!--********************************************************************************************************* --->
    <!-- ****************************************** Aplicação ************************************************** -->
    <div class="tab-pane fade" id="nav-acesso" role="tabpanel" aria-labelledby="nav-acesso-tab">
        <p class="text-white bg-secondary text-center">ACESSO</p>
        <div class="form-row">

        </div>

    </div>
    <!-- **************************************************************************************************** -->
    <!-- ****************************************** Aplicação ************************************************** -->
    <div class="tab-pane fade" id="nav-aplicacao" role="tabpanel" aria-labelledby="nav-aplicacao-tab">
        <p class="text-white bg-secondary text-center">APLICAÇÃO</p>
        <div class="form-row">
            <div class="text-right">
                <input  class="btn btn-success" type="submit" value="Salvar registro">
            </div>
        </div>

    </div>
    <!-- **************************************************************************************************** -->

    </form>
</div>

<!--************************************ Modal Nova Funçao ****************************************************-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nova Função</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Código</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Sigla:</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Descrição:</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Sair</button>
                <button type="button" class="btn btn-primary">Salvar</button>
            </div>
        </div>
    </div>
</div>
<!-- **************************************************************************************************** -->