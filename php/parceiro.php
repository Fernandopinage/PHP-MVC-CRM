<?php

include_once "../class/classParceiro.php";
include_once "../dao/ParceiroDAO.php";
include_once "../conection/conection.php";

$con = new ConnectFactory();
$con->getConection();

if (isset($_POST['cadastrar'])) {


    $ClassParceiro = new ClassParceiro();
    $ClassParceiro->setPessoa($_POST['pessoa']);
    $ClassParceiro->setOpcao($_POST['option']);
    $ClassParceiro->setNome($_POST['nome']);
    $ClassParceiro->setFantasia($_POST['fantasia']);
    $ClassParceiro->setEmail($_POST['email']);
    $ClassParceiro->setNacionalidade($_POST['nacionalidade']);
    $ClassParceiro->setCpf($_POST['cpf']);
    $ClassParceiro->setRg($_POST['rg']);
    $ClassParceiro->setEstadual($_POST['estadual']);
    $ClassParceiro->setMunicipal($_POST['municipal']);
    $ClassParceiro->setTelefone($_POST['telefone']);
    $ClassParceiro->setNacionalidade($_POST['naturalidade']);
    $ClassParceiro->setSuframa($_POST['suframa']);
    $ClassParceiro->setCnh($_POST['cnh']);
    $ClassParceiro->setAtividade($_POST['atividade']);
    $ClassParceiro->setCep($_POST['cep']);
    $ClassParceiro->setUf($_POST['uf']);
    $ClassParceiro->setNumero($_POST['numero']);
    $ClassParceiro->setMunicipio($_POST['municipio']);
    $ClassParceiro->setEndereco($_POST['endereco']);
    $ClassParceiro->setComplemento($_POST['complemento']);
    $ClassParceiro->setCep2($_POST['cep2']);
    $ClassParceiro->setUf2($_POST['uf2']);
    $ClassParceiro->setNumero2($_POST['numero2']);
    $ClassParceiro->setMunicipio2($_POST['municipio2']);
    $ClassParceiro->setEndereco2($_POST['endereco2']);
    $ClassParceiro->setComplemento2($_POST['complemento2']);
    $ClassParceiro->setOrgao($_POST['orgao']);
    $ClassParceiro->setUfexp($_POST['ufexp']);
    $ClassParceiro->setDataexp($_POST['dataexp']);
    $ClassParceiro->setInss($_POST['inss']);
    $ClassParceiro->setPiss($_POST['piss']);

    $Parceiro = new ParceiroDao();
    $Parceiro->insert($ClassParceiro);
}

?>


<br><br>
<div class="card" style="margin-bottom: 20px;">
    <div class="navbar navbar-dark bg-dark navbar-expand-lg" style=" color:#fff; ">
        PARCEIRO
    </div>
</div>
<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true" style="color: #FF7F00;">Cadastro</a>
        <a class="nav-item nav-link" id="nav-atividade-tab" data-toggle="tab" href="#nav-atividade" role="tab" aria-controls="nav-atividade" aria-selected="false" style="color: #FF7F00;">Ramo Atividade</a>
        <a class="nav-item nav-link" id="nav-endereco-tab" data-toggle="tab" href="#nav-endereco" role="tab" aria-controls="nav-endereco" aria-selected="false" style="color: #FF7F00;">Endereço</a>
        <a class="nav-item nav-link" id="nav-outro-tab" data-toggle="tab" href="#nav-outro" role="tab" aria-controls="nav-outro" aria-selected="false" style="color: #FF7F00;">Outros</a>

    </div>
</nav>
<br>
<hr><br>
<form action="parceiro.php" method="POST">
    <div class="tab-content" id="nav-tabContent">

        <!-- ******************************* Cadastro ***************************************************-->
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

            <div class="form-row">
                <div class="form-group col-md-4">
                    <div class="form-check">
                        <input class="pessoa" type="radio" name="pessoa" id="fisica" value="F">
                        <label class="form-check-label" for="pessoa" id="Fisica">
                            Pessoa Fisica
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="pessoa" type="radio" name="pessoa" id="juridica" value="J">
                        <label class="form-check-label" for="pessoa" id="juridica">
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
                <div class="form-group col-md-5">
                    <label for="inputEmail4" id="nome">Nome Completo</label>
                    <input type="text" class="form-control form-control-sm" name="nome" id="nome" placeholder="Nome">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputEmail4" id="CPF-CNPJ">CPF</label>
                    <input type="email" class="form-control form-control-sm" name="cpf" id="nome" placeholder="CPF">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail4" id="nascimento-label">Data Nascimento</label>
                    <input type="date" class="form-control form-control-sm" name="datanasc" id="nome" placeholder="Data Nascimento">
                </div>

            </div>
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control form-control-sm" name="email" id="nome" placeholder="Email">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputEmail4" id="">Nacionalidade</label>
                    <input type="email" class="form-control form-control-sm" name="nacionalidade" id="nacionalidade" placeholder="Nacionalidade">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail4" id="fantasia-label">Nome Fantasia</label>
                    <input type="text" class="form-control form-control-sm" name="fantasia" id="fantasia" placeholder="Fantasia">
                </div>
            </div>
            <div class="form-row">

                <div class="form-group col-md-4">
                    <label for="inputEmail4">Naturalidade</label>
                    <input type="email" class="form-control form-control-sm" name="naturalidade" id="nome" placeholder="Naturalidade">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Telefone</label>
                    <input type="email" class="form-control form-control-sm" name="telefone" id="nome" placeholder="Telefone">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Celular</label>
                    <input type="email" class="form-control form-control-sm" name="celular" id="nome" placeholder="Celular">
                </div>

            </div>

            <div class="div-fisico">


            </div>
            
            <div class="div-juridico">


            </div>


        </div>
        <!-- **************************************************************************************************** -->

        <!-- *************************************** Ramo de Atividade *************************************************** -->
        <div class="tab-pane fade" id="nav-atividade" role="tabpanel" aria-labelledby="nav-atividade-tab">

            <div class="form-row">

                <div class="form-group col-md-12">
                    <label for="inputEmail4">Ramo de Atividade</label>
                    <input type="email" class="form-control form-control-sm" name="atividade" id="nome" placeholder="Atividade">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputEmail4">CEP</label>
                    <input type="email" class="form-control form-control-sm" name="cep2" id="nome" placeholder="Cep">
                </div>
                <div class="form-group col-md-1">
                    <label for="inputEmail4">UF</label>
                    <input type="email" class="form-control form-control-sm" name="uf2" id="nome" placeholder="UF">
                </div>
                <div class="form-group col-md-1">
                    <label for="inputEmail4">Nº</label>
                    <input type="email" class="form-control form-control-sm" name="numero2" id="nome" placeholder="Nº">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail4">Municipio</label>
                    <input type="email" class="form-control form-control-sm" name="municipio2" id="nome" placeholder="Municipio">
                </div>
                <div class="form-group col-md-5">
                    <label for="inputEmail4">Endereço</label>
                    <input type="email" class="form-control form-control-sm" name="endereco2" id="nome" placeholder="Endereço">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Bairro</label>
                    <input type="email" class="form-control form-control-sm" name="bairro2" id="nome" placeholder="Bairro">
                </div>
                <div class="form-group col-md-8">
                    <label for="inputEmail4">Complemento</label>
                    <input type="email" class="form-control form-control-sm" name="complemento2" id="nome" placeholder="Complemento">
                </div>


            </div>

        </div>
        <!-- **************************************************************************************************** -->

        <!-- *************************************** Endereço *************************************************** -->
        <div class="tab-pane fade" id="nav-endereco" role="tabpanel" aria-labelledby="nav-endereco-tab">

            <div class="form-row">

                <div class="form-group col-md-2">
                    <label for="inputEmail4">CEP</label>
                    <input type="email" class="form-control form-control-sm" name="cep" id="nome" placeholder="Cep">
                </div>
                <div class="form-group col-md-1">
                    <label for="inputEmail4">UF</label>
                    <input type="email" class="form-control form-control-sm" name="uf" id="nome" placeholder="UF">
                </div>
                <div class="form-group col-md-1">
                    <label for="inputEmail4">Nº</label>
                    <input type="email" class="form-control form-control-sm" name="numero" id="nome" placeholder="Nº">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail4">Municipio</label>
                    <input type="email" class="form-control form-control-sm" name="municipio" id="nome" placeholder="Municipio">
                </div>
                <div class="form-group col-md-5">
                    <label for="inputEmail4">Endereço</label>
                    <input type="email" class="form-control form-control-sm" name="endereco" id="nome" placeholder="Endereço">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Bairro</label>
                    <input type="email" class="form-control form-control-sm" name="bairro" id="nome" placeholder="Bairro">
                </div>
                <div class="form-group col-md-8">
                    <label for="inputEmail4">Complemento</label>
                    <input type="email" class="form-control form-control-sm" name="complemento" id="nome" placeholder="Complemento">
                </div>


            </div>

        </div>
        <!-- **************************************************************************************************** -->

        <!-- ****************************************** Outros ************************************************** -->
        <div class="tab-pane fade" id="nav-outro" role="tabpanel" aria-labelledby="nav-outro-tab">

            <div class="form-row">

                <div class="form-group col-md-3">
                    <label for="inputEmail4">Órgão Expedidor</label>
                    <input type="email" class="form-control form-control-sm" name="orgao" id="nome" placeholder="Órgão Expedidor">
                </div>
                <div class="form-group col-md-1">
                    <label for="inputEmail4">UF exp</label>
                    <input type="email" class="form-control form-control-sm" name="ufexp" id="nome" placeholder="UF">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputEmail4">Data Expedição</label>
                    <input type="date" class="form-control form-control-sm" name="dataexp" id="nome" placeholder="Data Expedição">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail4">Iscrição INSS/CEI</label>
                    <input type="email" class="form-control form-control-sm" name="inss" id="nome" placeholder="INSS/CEI">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail4">Nº PISS</label>
                    <input type="email" class="form-control form-control-sm" name="piss" id="nome" placeholder="PISS">
                </div>
                <input type="submit" class="btn btn-primary" value="cadastrar" name="cadastrar">


            </div>

        </div>
        <!-- **************************************************************************************************** -->

        <script>
            $(document).ready(function() {
                $(".pessoa").change(function() {
                    if ($(this).val() === 'F') {
                        $('#nome').html('<label for="inputEmail4"  id="nome">Nome Completo</label>');
                        $('#CPF-CNPJ').html('<label for="inputEmail4"  id="CPF-CNPJ">CPF</label>');
                        $('#nascimento-label').html('<label for="inputEmail4"  id="CPF-CNPJ">Data Nascimento</label>');
                        $('.div-juritico').hide(); /** */
                        $('.div-fisico').show();
                        $('.div-juridico').hide();
                        $('.div-fisico').html('<div class="form-row"> <div class="form-group col-md-4"> <label for="inputEmail4">RG</label> <input type="text" class="form-control form-control-sm" name="rg" id="rg" placeholder="RG"></div><div class="form-group col-md-4"><label for="inputEmail4">CNH</label><input type="text" class="form-control form-control-sm" name="cnh" id="nome" placeholder="CNH"></div></div>');
                        $('#fantasia-label').hide();
                        $('#fantasia').hide();
                    }
                    if ($(this).val() === 'J') {
                        $('#nome').html('<label for="inputEmail4" id="nome">Razão Social</label>');
                        $('#CPF-CNPJ').html('<label for="inputEmail4"  id="CPF-CNPJ">CNPJ</label>');
                        $('#nascimento-label').html('<label for="inputEmail4"  id="CPF-CNPJ">Data Função</label>');
                        $('#fantasia').show();
                        $('#fantasia-label').show();
                        $('.div-juridico').show();
                        $('.div-fisico').hide();
                        $('.div-juridico').html('<div class="form-row"><div class="form-group col-md-2"> <label for="inputEmail4">Suframa</label> <input type="email" class="form-control form-control-sm" name="suframa" id="nome" placeholder="Suframa"></div><div class="form-group col-md-4"><label for="inputEmail4">Incrição Estadual</label> <input type="email" class="form-control form-control-sm" name="estadual" id="nome" placeholder="Inscrição Estatual"></div><div class="form-group col-md-4"> <label for="inputEmail4">Incrição Municipal</label> <input type="email" class="form-control form-control-sm" name="municipal" id="nome" placeholder="Inscrição Municipal"></div></div>');

                    }
                });

            });
        </script>


</form>
</div>