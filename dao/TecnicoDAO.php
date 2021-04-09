<?php 
include_once "../dao/DAO.php";
include_once "../class/classTecnico.php";


class Tecnico extends Dao{


public function insertAgendaTecnico (ClassTecnico $ClassTecnico){


    
    $sql = "INSERT INTO `crm_agt`(`CRM_AGT_IDEMP`, `CRM_AGT_HORA`, `CRM_AGT_CODCAD`, `CRM_AGT_GRUPOPART`, `CRM_AGT_RESUMO`, `CRM_AGT_RESUMO2`, `CRM_AGT_DETALHETEC`, `CRM_AGT_DURACAO`, `CRM_AGT_INCPOR`, `CRM_AGT_STATUS`, `CRM_AGT_EVENTO`, `CRM_AGT_OK`, `CRM_AGT_DTENVIO`, `CRM_AGT_CONTATO`, `CRM_AGT_BLOQ`, `CRM_AGT_CONTROLE`, `CRM_AGT_EXCLUIDO`, `CRM_AGT_DTENVTEC`, `CRM_AGT_HORA2`, `CRM_AGT_NUMCTR`, `CRM_AGT_ID`, `CRM_AGT_CODUSU`, `CRM_AGT_DATA`, `CRM_AGT_IDPRJ`, `CRM_AGT_DETALHECLI`) 
    VALUES (:CRM_AGT_IDEMP, :CRM_AGT_HORA, :CRM_AGT_CODCAD, :CRM_AGT_GRUPOPART, :CRM_AGT_RESUMO, :CRM_AGT_RESUMO2, CRM_AGT_DETALHETEC, :CRM_AGT_DURACAO, :CRM_AGT_INCPOR, :CRM_AGT_STATUS, :CRM_AGT_EVENTO, :CRM_AGT_OK, :CRM_AGT_DTENVIO, :CRM_AGT_CONTATO, :CRM_AGT_BLOQ, :CRM_AGT_CONTROLE, :CRM_AGT_EXCLUIDO, :CRM_AGT_DTENVTEC, :CRM_AGT_HORA2, :CRM_AGT_NUMCTR,  :CRM_AGT_ID, :CRM_AGT_CODUSU, :CRM_AGT_DATA, :CRM_AGT_IDPRJ, :CRM_AGT_DETALHECLI)";

    $insert = $this->con->prepare($sql);
    $insert->bindValue(":CRM_AGT_IDEMP",'');
    $insert->bindValue(":CRM_AGT_HORA",$ClassTecnico->getHorainicio());
    $insert->bindValue(":CRM_AGT_CODCAD",$ClassTecnico->getCliente());
    $insert->bindValue(":CRM_AGT_GRUPOPART",'');
    $insert->bindValue(":CRM_AGT_RESUMO",$ClassTecnico->getResumo());
    $insert->bindValue(":CRM_AGT_RESUMO2",'');
    $insert->bindValue(":CRM_AGT_DETALHETEC",$ClassTecnico->getDetalhe());
    $insert->bindValue(":CRM_AGT_DURACAO",$ClassTecnico->getDuracao());
    $insert->bindValue(":CRM_AGT_INCPOR",'');
    $insert->bindValue(":CRM_AGT_STATUS",'');
    $insert->bindValue(":CRM_AGT_EVENTO",$ClassTecnico->getEvento());
    $insert->bindValue(":CRM_AGT_OK",'');
    $insert->bindValue(":CRM_AGT_DTENVIO",'');
    $insert->bindValue(":CRM_AGT_CONTATO",$ClassTecnico->getContato());
    $insert->bindValue(":CRM_AGT_BLOQ",'');
    $insert->bindValue(":CRM_AGT_CONTROLE",'');
    $insert->bindValue(":CRM_AGT_EXCLUIDO",'');
    $insert->bindValue(":CRM_AGT_DTENVTEC",'');
    $insert->bindValue(":CRM_AGT_HORA2",$ClassTecnico->getHorafim());
    $insert->bindValue(":CRM_AGT_NUMCTR",$ClassTecnico->getContrato());
    $insert->bindValue(":CRM_AGT_ID",'');
    $insert->bindValue(":CRM_AGT_CODUSU", $ClassTecnico->getUsuario());
    $insert->bindValue(":CRM_AGT_DATA",$ClassTecnico->getData());
    $insert->bindValue(":CRM_AGT_IDPRJ",'');
    $insert->bindValue(":CRM_AGT_DETALHECLI",'');
    $insert->execute();
    
   

}

    
}



?>