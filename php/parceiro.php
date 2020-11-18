<br><br>
<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Cadastro</a>
        <a class="nav-item nav-link" id="nav-endereco-tab" data-toggle="tab" href="#nav-endereco" role="tab" aria-controls="nav-endereco" aria-selected="false">Endereço</a>
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
                <div class="form-group col-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="option" id="exampleRadios1" value="fornecedor">
                        <label class="form-check-label" for="exampleRadios1">
                            Fornecedor
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="option" id="exampleRadios2" value="cliente">
                        <label class="form-check-label" for="exampleRadios2">
                            Cliente
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="option" id="exampleRadios2" value="ambos">
                        <label class="form-check-label" for="exampleRadios2">
                            Ambos For/CLi
                        </label>
                    </div>
                </div>

            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Nome Completo</label>
                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Nome Fantasia</label>
                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" required>
                </div>
            </div>

            <div class="form-row">

                <div class="form-group col-md-4">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" name="email" id="nome" placeholder="Email" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Nacionalidade</label>
                    <input type="email" class="form-control" name="text" id="nome" placeholder="Email" required>
                </div>

            </div>
            <div class="form-row">

                <div class="form-group col-md-4">
                    <label for="inputEmail4">CPF</label>
                    <input type="email" class="form-control" name="email" id="nome" placeholder="Email" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Incrição Estadual</label>
                    <input type="email" class="form-control" name="text" id="nome" placeholder="Email" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Incrição Municipal</label>
                    <input type="email" class="form-control" name="text" id="nome" placeholder="Email" required>
                </div>

            </div>

            <div class="form-row">

                <div class="form-group col-md-4">
                    <label for="inputEmail4">Telefone</label>
                    <input type="email" class="form-control" name="email" id="nome" placeholder="Email" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Naturalidade</label>
                    <input type="email" class="form-control" name="text" id="nome" placeholder="Email" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Suframa</label>
                    <input type="email" class="form-control" name="text" id="nome" placeholder="Email" required>
                </div>

            </div>

        </div>
        
        <div class="tab-pane fade" id="nav-endereco" role="tabpanel" aria-labelledby="nav-endereco-tab">

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