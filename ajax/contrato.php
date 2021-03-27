<?php


include_once "../dao/ContratoDao.php";

if(isset($_GET['id'])){

    $id = $_GET['id'];

    $contrato = new ContratoDao();
    $contrato->AgendaTecnicoContrato($id);


}
