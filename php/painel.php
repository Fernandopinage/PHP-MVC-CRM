<?php include_once "../layout/head.php"; ?>

<div class="container">

    <?php

    @$pagina = $_GET['page'];

    switch ($pagina) {
        case 'home/':
            include_once "../php/calendario.php";
            break;

        case 'parceiro/':
            include_once "../php/parceiro.php";
            break;


        case 'colaborador/':
            include_once "../php/colaborador.php";
            break;

        case 'contrato/':
            include_once "../php/contrato.php";
            break;
        case 'tecnico/':
            include_once "../php/tecnico.php";
            break;

        default:
            # code...
            break;
    }

    ?>

</div>
<br><br><br>
<?php include_once "../layout/footer.php"; ?>