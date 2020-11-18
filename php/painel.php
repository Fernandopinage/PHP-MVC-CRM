<?php include_once "../layout/head.php"; ?>

<div class="container">

    <?php

    @$pagina = $_GET['p'];

    switch ($pagina) {
        case 'home':
            include_once "../php/home.php";
            break;

        case 'parceiro':
            include_once "../php/parceiro.php";
            break;


        case 'colaborador':
            include_once "../php/colaborador.php";
            break;

        case 'contrato':
            include_once "../php/contrato.php";
            break;

        case 'projeto':
            include_once "../php/projeto.php";
            break;


        default:
            # code...
            break;
    }

    ?>

</div>

<?php include_once "../layout/footer.php"; ?>