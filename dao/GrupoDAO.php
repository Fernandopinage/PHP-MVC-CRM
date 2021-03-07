<?php 


include_once "../dao/DAO.php";
include_once "../class/classGrupo.php";


    class GrupoDao extends Dao{

        public function insertGrupo(ClassGrupo $ClassGrupo){

           $sql ="INSERT INTO `tab_gde`(`TAB_GDE_COD`, `TAB_GDE_DESCRICAO`) VALUES (:cod,:descr)";
           $insert = $this->con->prepare($sql);
           $insert->bindValue(":cod",$ClassGrupo->getCodigo());
           $insert->bindValue(":descr", $ClassGrupo->getDescricao());
           $insert->execute();
           
        }


    }
?>