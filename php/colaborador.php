
<br><br>
<div class="card" style="margin-bottom: 20px;">
  <div class="navbar navbar-dark bg-dark navbar-expand-lg" style=" color:#fff; ">
    COLABORADOR
  </div>
</div>
<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true" style="color: #FF7F00;">Cadastro</a>
        <a class="nav-item nav-link" id="nav-funcao-tab" data-toggle="tab" href="#nav-funcao" role="tab" aria-controls="nav-funcao" aria-selected="true" style="color: #FF7F00;">Função</a>
        <a class="nav-item nav-link" id="nav-documentos-tab" data-toggle="tab" href="#nav-documentos" role="tab" aria-controls="nav-documentos" aria-selected="false" style="color: #FF7F00;">Documentos</a>
        <a class="nav-item nav-link" id="nav-administrativo-tab" data-toggle="tab" href="#nav-administrativo" role="tab" aria-controls="nav-administrativo" aria-selected="false" style="color: #FF7F00;">Administrativo</a>
        <a class="nav-item nav-link" id="nav-endereco-tab" data-toggle="tab" href="#nav-endereco" role="tab" aria-controls="nav-endereco" aria-selected="false" style="color: #FF7F00;">Endereço</a>
        <a class="nav-item nav-link" id="nav-formacao-tab" data-toggle="tab" href="#nav-formacao" role="tab" aria-controls="nav-formacao" aria-selected="false" style="color: #FF7F00;">Formação Academica</a>
        <a class="nav-item nav-link" id="nav-outro-tab" data-toggle="tab" href="#nav-outro" role="tab" aria-controls="nav-outro" aria-selected="false" style="color: #FF7F00;">Outros</a>
    </div>
</nav>
<br>

<form action="../telas/add.php" method="POST">
    <div class="tab-content" id="nav-tabContent">

        <!--- ******************************************* Cadastro ************************************************** -->
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for="inputEmail4">Codigo</label>
                    <input type="text" class="form-control" name="email" id="nome" placeholder="Email" required>

                </div>
                <div class="form-group col-md-1">

                </div>

                <div class="form-group col-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pessoa" id="fisica" value="F">
                        <label class="form-check-label" for="pessoa">
                            Pessoa Fisica
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pessoa" id="juridica" value="J">
                        <label class="form-check-label" for="pessoa">
                            Pessoa juridica
                        </label>
                    </div>
                </div>


            </div>
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label for="inputEmail4">Nome Completo</label>
                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail4">Gênero</label>
                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Usúario</label>
                    <input type="email" class="form-control" name="email" id="nome" placeholder="Email" required>
                </div>
            </div>

            <div class="form-row">

                <div class="form-group col-md-3">
                    <label for="inputEmail4">Data Nascimento</label>
                    <input type="date" class="form-control" name="email" id="nome" placeholder="Email" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Estato Civil</label>
                    <input type="email" class="form-control" name="text" id="nome" placeholder="Email" required>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputEmail4">UF Natal</label>
                    <input type="email" class="form-control" name="text" id="nome" placeholder="Email" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail4">Cidade Natal</label>
                    <input type="email" class="form-control" name="text" id="nome" placeholder="Email" required>
                </div>

            </div>
            <div class="form-row">

                <div class="form-group col-md-4">
                    <label for="inputEmail4">Naturalidade</label>
                    <input type="email" class="form-control" name="email" id="nome" placeholder="Email" required>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputEmail4">Cor Racial</label>
                    <input type="email" class="form-control" name="text" id="nome" placeholder="Email" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail4">Telefone</label>
                    <input type="email" class="form-control" name="text" id="nome" placeholder="Email" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail4">Celular</label>
                    <input type="email" class="form-control" name="text" id="nome" placeholder="Email" required>
                </div>
            </div>

            <div class="form-row">

                <div class="form-group col-md-6">
                    <label for="inputEmail4">Nome Mãe</label>
                    <input type="email" class="form-control" name="email" id="nome" placeholder="Email" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Nome Pai</label>
                    <input type="email" class="form-control" name="text" id="nome" placeholder="Email" required>
                </div>


            </div>

        </div>
        <!--- ********************************************************************************************************* -->
        <div class="tab-pane fade" id="nav-funcao" role="tabpanel" aria-labelledby="nav-funcao-tab">

            <div class="form-row">

                <div class="form-group col-md-4">
                    <label for="inputEmail4">Departamento</label>
                    <input type="email" class="form-control" name="email" id="nome" placeholder="Email" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Função</label>
                    <input type="email" class="form-control" name="email" id="nome" placeholder="Email" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Meio de Transporte</label>
                    <input type="email" class="form-control" name="text" id="nome" placeholder="Email" required>
                </div>

            </div>


        </div>
        <!--- ********************************************************************************************************* -->
        <!--- ******************************************* Documentos ************************************************** -->
        <div class="tab-pane fade" id="nav-documentos" role="tabpanel" aria-labelledby="nav-documentos-tab">
            <p class="text-white bg-secondary text-center">RG</p>
            <div class="form-row">

                <div class="form-group col-md-4">
                    <label for="inputEmail4">Nº RG</label>
                    <input type="email" class="form-control" name="email" id="nome" placeholder="Atividade" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail4">Data Emissão</label>
                    <input type="date" class="form-control" name="email" id="nome" placeholder="Cep" required>
                </div>
                <div class="form-group col-md-1">
                    <label for="inputEmail4">UF</label>
                    <input type="email" class="form-control" name="email" id="nome" placeholder="Nº" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Órgão de Emissão</label>
                    <input type="email" class="form-control" name="email" id="nome" placeholder="UF" required>
                </div>

            </div>
            <br><br><p class="text-white bg-secondary text-center">Titulo Eleitor</p>
            <div class="form-row">

                <div class="form-group col-md-4">
                    <label for="inputEmail4">Nº Documento</label>
                    <input type="email" class="form-control" name="email" id="nome" placeholder="Atividade" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail4">Zone Eleitoral</label>
                    <input type="type" class="form-control" name="email" id="nome" placeholder="Cep" required>
                </div>
                <div class="form-group col-md-1">
                    <label for="inputEmail4">UF</label>
                    <input type="email" class="form-control" name="email" id="nome" placeholder="Nº" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Municipios</label>
                    <input type="type" class="form-control" name="email" id="nome" placeholder="UF" required>
                </div>

            </div>
            <br><br><p class="text-white bg-secondary text-center">CNH</p>
            <div class="form-row">

                <div class="form-group col-md-3">
                    <label for="inputEmail4">Nº Documento</label>
                    <input type="email" class="form-control" name="email" id="nome" placeholder="Atividade" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail4">Categoria</label>
                    <input type="type" class="form-control" name="email" id="nome" placeholder="Cep" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail4">Data de Emissão</label>
                    <input type="date" class="form-control" name="email" id="nome" placeholder="UF" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail4">Data de Validade</label>
                    <input type="date" class="form-control" name="email" id="nome" placeholder="UF" required>
                </div>
            </div>


        </div>
        <!--- ********************************************************************************************************* -->
        <!--- ********************************************** administrativo ******************************************** -->
        <div class="tab-pane fade" id="nav-administrativo" role="tabpanel" aria-labelledby="nav-administrativo-tab">

            <p class="text-white bg-secondary text-center">INFORMAÇÔES</p>
            <div class="form-row">

                <div class="form-group col-md-3">
                    <label for="inputEmail4">Data Inicio</label>
                    <input type="date" class="form-control" name="email" id="nome" placeholder="Atividade" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail4">Status</label>
                    <input type="type" class="form-control" name="email" id="nome" placeholder="Atividade" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail4">Data Rescisão</label>
                    <input type="date" class="form-control" name="email" id="nome" placeholder="UF" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail4">Motivo</label>
                    <input type="type" class="form-control" name="email" id="nome" placeholder="UF" required>
                </div>
            </div>
            <br><br><p class="text-white bg-secondary text-center">DADOS BANCARIOS</p>
            <div class="form-row">

                <div class="form-group col-md-3">
                    <label for="inputEmail4">Salario</label>
                    <input type="type" class="form-control" name="email" id="nome" placeholder="Atividade" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail4">Banco</label>
                    <input type="type" class="form-control" name="email" id="nome" placeholder="Atividade" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail4">Agêcia</label>
                    <input type="type" class="form-control" name="email" id="nome" placeholder="UF" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail4">Conta</label>
                    <input type="type" class="form-control" name="email" id="nome" placeholder="UF" required>
                </div>
            </div>



        </div>
        <!--- ********************************************************************************************************* -->

        <!--- ********************************************** Endereço ******************************************** -->
        <div class="tab-pane fade" id="nav-endereco" role="tabpanel" aria-labelledby="nav-endereco-tab">
        <p class="text-white bg-secondary text-center">ENDEREÇO</p>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="inputEmail4">CEP</label>
                    <input type="email" class="form-control" name="email" id="nome" placeholder="Cep" required>
                </div>
                <div class="form-group col-md-1">
                    <label for="inputEmail4">UF</label>
                    <input type="email" class="form-control" name="email" id="nome" placeholder="UF" required>
                </div>
                <div class="form-group col-md-1">
                    <label for="inputEmail4">Nº</label>
                    <input type="email" class="form-control" name="email" id="nome" placeholder="Nº" required>
                </div>
                <div class="form-group col-md-7">
                    <label for="inputEmail4">Municipio</label>
                    <input type="email" class="form-control" name="email" id="nome" placeholder="Endereço" required>
                </div>
                <div class="form-group col-md-12">
                    <label for="inputEmail4">Complemento</label>
                    <input type="email" class="form-control" name="email" id="nome" placeholder="Complemento" required>
                </div>


            </div>
        </div>
        <!--- ********************************************************************************************************* -->

        <!--- ************************************************ Formação Academica *********************************************** -->
        <div class="tab-pane fade" id="nav-formacao" role="tabpanel" aria-labelledby="nav-formacao-tab">
        <p class="text-white bg-secondary text-center">FORMAÇÂO ACADÊMICA</p>
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label for="inputEmail4">Instituto de Ensino</label>
                    <input type="email" class="form-control" name="email" id="nome" placeholder="UF" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail4">Escolaridade</label>
                    <input type="email" class="form-control" name="email" id="nome" placeholder="Cep" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail4">Curso</label>
                    <input type="email" class="form-control" name="email" id="nome" placeholder="Nº" required>
                </div>

                <div class="form-group col-md-3">
                    <label for="inputEmail4">Data de Conclusão</label>
                    <input type="date" class="form-control" name="email" id="nome" placeholder="Complemento" required>
                </div>


            </div>
        </div>

        <!--- ********************************************************************************************************* -->
        <!--- ************************************************ Outros *********************************************** -->

        <div class="tab-pane fade" id="nav-outro" role="tabpanel" aria-labelledby="nav-outro-tab">
        <p class="text-white bg-secondary text-center">OUTROS</p>
            <div class="form-row">

                <div class="form-group col-md-1">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sim" id="" value="S">
                        <label class="form-check-label" for="pessoa">
                            Sim
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="nao" id="" value="N">
                        <label class="form-check-label" for="pessoa">
                            Não
                        </label>
                    </div>
                </div>
                                
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Tipo PCD</label>
                    <input type="type" class="form-control" name="email" id="nome" placeholder="Cep" required>
                </div>
            </div>
            <div class="form-row">
                

                    <div class="form-group col-md-7">
                        <label for="inputEmail4">Observação</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
                    </div>

            </div>
        </div>
        <!--- ********************************************************************************************************* -->
</form>
</div>