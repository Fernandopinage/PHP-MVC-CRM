
<?php

include_once "../dao/DAO.php";
include_once "../class/classOS.php";

Class OrdemDao extends Dao{

    
    public function insertOS(ClassOS $ClassOS){

        $sql = "INSERT INTO `crm_oss`(`CRM_OSS_ID`, `CRM_OSS_NUMERO`, `CRM_OSS_IDEMP`, `CRM_OSS_CODCAD`, `CRM_OSS_CODUSU`, `CRM_OSS_NUMCTR`, `CRM_OSS_STATUS`, `CRM_OSS_DATA`, `CRM_OSS_HORAAGT`, `CRM_OSS_HORAINI`, `CRM_OSS_HORAFIM`, `CRM_OSS_HORATRAN`, `CRM_OSS_HORAINT`, `CRM_OSS_HORATOT`, `CRM_OSS_USERCH`, `CRM_OSS_LOCALIZA`, `CRM_OSS_IDPRJ`, `CRM_OSS_RESUMO`, `CRM_OSS_NOMEARQ`, `CRM_OSS_BLOQ`, `CRM_OSS_CONTROLE`, `CRM_OSS_EXCLUIDO`, `CRM_OSS_FINALIZAR`, `CRM_OSS_MD5`, `CRM_OSS_RESULT`) 
            VALUES (null, :CRM_OSS_NUMERO, :CRM_OSS_IDEMP, :CRM_OSS_CODCAD, :CRM_OSS_CODUSU, :CRM_OSS_NUMCTR, :CRM_OSS_STATUS, :CRM_OSS_DATA, :CRM_OSS_HORAAGT, :CRM_OSS_HORAINI, :CRM_OSS_HORAFIM, :CRM_OSS_HORATRAN, :CRM_OSS_HORAINT, :CRM_OSS_HORATOT, :CRM_OSS_USERCH, :CRM_OSS_LOCALIZA, :CRM_OSS_IDPRJ, :CRM_OSS_RESUMO, :CRM_OSS_NOMEARQ, :CRM_OSS_BLOQ, :CRM_OSS_CONTROLE, :CRM_OSS_EXCLUIDO, :CRM_OSS_FINALIZAR, :CRM_OSS_MD5, :CRM_OSS_RESULT)";

        $insert = $this->con->prepare($sql);
        $insert->bindValue(':CRM_OSS_NUMERO',$ClassOS->getOS());
        $insert->bindValue(":CRM_OSS_CODCAD",$ClassOS->getCliente());
        $insert->bindValue(":CRM_OSS_CODUSU",$ClassOS->getUsuario());
        $insert->bindValue(":CRM_OSS_DATA",$ClassOS->getData());
        $insert->bindValue(":CRM_OSS_RESUMO",$ClassOS->getResumo());
        $insert->bindValue(":CRM_OSS_NUMCTR",$ClassOS->getContrato());
        $insert->bindValue("CRM_OSS_HORAINI",$ClassOS->getHorainicio());
        $insert->bindValue(":CRM_OSS_HORAFIM",$ClassOS->getHorafim());
        $insert->bindValue(":CRM_OSS_HORAINT",$ClassOS->getIntervalo());
        $insert->bindValue(":CRM_OSS_HORATRAN",$ClassOS->getTranslado());
        $insert->bindValue(":CRM_OSS_STATUS",$ClassOS->getStatus());
        $insert->bindValue(":CRM_OSS_USERCH",$ClassOS->getChave());
        $insert->bindValue(":CRM_OSS_HORAAGT",$ClassOS->getHoraagendada());
        $insert->bindValue(":CRM_OSS_RESULT",$ClassOS->getDetalhe());
        $insert->bindValue(":CRM_OSS_IDEMP","");
        $insert->bindValue(":CRM_OSS_HORATOT","");
        $insert->bindValue(":CRM_OSS_LOCALIZA","");
        $insert->bindValue(":CRM_OSS_IDPRJ","");
        $insert->bindValue(":CRM_OSS_NOMEARQ","");
        $insert->bindValue(":CRM_OSS_BLOQ","");
        $insert->bindValue(":CRM_OSS_CONTROLE","");
        $insert->bindValue(":CRM_OSS_EXCLUIDO","");
        $insert->bindValue(":CRM_OSS_EXCLUIDO","");
        $insert->bindValue(":CRM_OSS_FINALIZAR","");
        $insert->bindValue(":CRM_OSS_MD5","");
        $insert->bindValue(":CRM_OSS_RESULT","");
        $insert->execute();    
    }



    public function selectOrdem()
    {

        $sql = "SELECT * FROM `crm_oss` WHERE 1";

        $select = $this->con->prepare($sql);
        $select->execute();

        $array = array();
        while ($row = $select->fetch(PDO::FETCH_ASSOC)) {

            $classOs = new ClassOS();
            $classOs->setOS($row['CRM_OSS_NUMERO']);
            $classOs->setCliente($row['CRM_OSS_CODCAD']);
            $classOs->setUsuario($row['CRM_OSS_CODUSU']);
            $classOs->setResumo($row['CRM_OSS_RESUMO']);
            $classOs->setData($row['CRM_OSS_DATA']);
            $classOs->setHoraagendada($row['CRM_OSS_HORAAGT']);
            $classOs->setHorainicio($row['CRM_OSS_HORAINI']);
            $classOs->setHorafim($row['CRM_OSS_HORAFIM']);
            $array[] = $classOs;
        }
        return $array;
    }

    public function selectCliente($cliente){

        $sql = "SELECT TAB_CAD_NOME FROM `tab_cad` where TAB_CAD_ID ='$cliente'";
        $select = $this->con->prepare($sql);
        $select->execute();
        $row = $select->fetch(PDO::FETCH_ASSOC);
        echo $row['TAB_CAD_NOME'];
    }
    public function selectUsuario($usuario)
    {

        $sql = "SELECT TAB_COL_NOMESOCIAL FROM `tab_col` where TAB_COL_ID ='$usuario'";
        $select = $this->con->prepare($sql);
        $select->execute();
        $row = $select->fetch(PDO::FETCH_ASSOC);
        echo $row['TAB_COL_NOMESOCIAL'];
    }
}


?>