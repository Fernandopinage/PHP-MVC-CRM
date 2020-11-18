<br><br>
<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Cadastro</a>
        <a class="nav-item nav-link" id="nav-funcao-tab" data-toggle="tab" href="#nav-funcao" role="tab" aria-controls="nav-funcao" aria-selected="true">Função</a>
        <a class="nav-item nav-link" id="nav-documentos-tab" data-toggle="tab" href="#nav-documentos" role="tab" aria-controls="nav-documentos" aria-selected="false">Documentos</a>
        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Outros</a>
        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contratos</a>
    </div>
</nav>
<br>
<hr><br>
<form action="../telas/add.php" method="POST">
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for="inputEmail4">Codigo</label>
                    <input type="email" class="form-control" name="email" id="nome" placeholder="Email" required>
                    
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
        <div class="tab-pane fade" id="nav-funcao" role="tabpanel" aria-labelledby="nav-funcao-tab">...</div>
<!--- ********************************************************************************************************* -->
        <div class="tab-pane fade" id="nav-documentos" role="tabpanel" aria-labelledby="nav-documentos-tab">

            <div class="form-row">

                <div class="form-group col-md-12">
                    <label for="inputEmail4">Ramo de Atividade</label>
                    <input type="email" class="form-control" name="email" id="nome" placeholder="Atividade" required>
                </div>
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
                    <label for="inputEmail4">Endereço</label>
                    <input type="email" class="form-control" name="email" id="nome" placeholder="Endereço" required>
                </div>
                <div class="form-group col-md-12">
                    <label for="inputEmail4">Complemento</label>
                    <input type="email" class="form-control" name="email" id="nome" placeholder="Complemento" required>
                </div>


            </div>

        </div>


        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>

</form>
</div>