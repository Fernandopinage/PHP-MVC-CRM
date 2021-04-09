<?php 
include_once "../dao/DAO.php";
include_once "../class/classTecnico.php";


class Tecnico extends Dao{


public function insertAgendaTecnico (ClassTecnico $ClassTecnico){


    
    $sql = "INSERT INTO `crm_agt`(`CRM_AGT_IDEMP`, `CRM_AGT_HORA`, `CRM_AGT_CODCAD`, `CRM_AGT_GRUPOPART`, `CRM_AGT_RESUMO`, `CRM_AGT_RESUMO2`, `CRM_AGT_DETALHETEC`, `CRM_AGT_DURACAO`, `CRM_AGT_INCPOR`, `CRM_AGT_STATUS`, `CRM_AGT_EVENTO`, `CRM_AGT_OK`, `CRM_AGT_DTENVIO`, `CRM_AGT_CONTATO`, `CRM_AGT_BLOQ`, `CRM_AGT_CONTROLE`, `CRM_AGT_EXCLUIDO`, `CRM_AGT_DTENVTEC`, `CRM_AGT_HORA2`, `CRM_AGT_NUMCTR`, `CRM_AGT_ID`, `CRM_AGT_CODUSU`, `CRM_AGT_DATA`, `CRM_AGT_IDPRJ`, `CRM_AGT_DETALHECLI`) 
    VALUES (:CRM_AGT_IDEMP, :CRM_AGT_HORA, :CRM_AGT_CODCAD, :CRM_AGT_GRUPOPART, :CRM_AGT_RESUMO, :CRM_AGT_RESUMO2, CRM_AGT_DETALHETEC, :CRM_AGT_DURACAO, :CRM_AGT_INCPOR, :CRM_AGT_STATUS, :CRM_AGT_EVENTO, :CRM_AGT_OK, :CRM_AGT_DTENVIO, :CRM_AGT_CONTATO, :CRM_AGT_BLOQ, :CRM_AGT_CONTROLE, :CRM_AGT_EXCLUIDO, :CRM_AGT_DTENVTEC, :CRM_AGT_HORA2, :CRM_AGT_NUMCTR,  :CRM_AGT_ID, :CRM_AGT_CODUSU, :CRM_AGT_DATA, :CRM_AGT_IDPRJ, :CRM_AGT_DETALHECLI)";

    $insert = $this->con->prepare($sql);
    $insert->bindValue(":CRM_AGT_IDEMP",'');
    $insert->bindValue(":CRM_AGT_HORA",'');
    $insert->bindValue(":CRM_AGT_CODCAD",'');
    $insert->bindValue(":CRM_AGT_GRUPOPART",'');
    $insert->bindValue(":CRM_AGT_RESUMO",'');
    $insert->bindValue(":CRM_AGT_RESUMO2",'');
    $insert->bindValue(":CRM_AGT_DETALHETEC",'');
    $insert->bindValue(":CRM_AGT_DURACAO",'');
    $insert->bindValue(":CRM_AGT_INCPOR",'');
    $insert->bindValue(":CRM_AGT_STATUS",'');
    $insert->bindValue(":CRM_AGT_EVENTO",'');
    $insert->bindValue(":CRM_AGT_OK",'');
    $insert->bindValue(":CRM_AGT_DTENVIO",'');
    $insert->bindValue(":CRM_AGT_CONTATO",'');
    $insert->bindValue(":CRM_AGT_BLOQ",'');
    $insert->bindValue(":CRM_AGT_CONTROLE",'');
    $insert->bindValue(":CRM_AGT_EXCLUIDO",'');
    $insert->bindValue(":CRM_AGT_DTENVTEC",'');
    $insert->bindValue(":CRM_AGT_HORA2",'');
    $insert->bindValue(":CRM_AGT_NUMCTR",'');
    $insert->bindValue(":CRM_AGT_ID",'');
    $insert->bindValue(":CRM_AGT_CODUSU",'');
    $insert->bindValue(":CRM_AGT_DATA",'');
    $insert->bindValue(":CRM_AGT_IDPRJ",'');
    $insert->bindValue(":CRM_AGT_DETALHECLI",'');
    $insert->execute();
    
    echo "<pre>";
    var_dump($ClassTecnico);
    echo "</pre>";

}

    
}



?>