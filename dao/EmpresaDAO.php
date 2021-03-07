<?php 


include_once "../dao/DAO.php";
include_once "../class/classEmpresa.php";


    class EmpresaDao extends Dao{

        public function insertEmpresa(ClassEmpresa $classEmpresa){

           $sql ="INSERT INTO `tab_gde`(`TAB_GDE_COD`, `TAB_GDE_DESCRICAO`) VALUES (:cod,:descr)";
           $insert = $this->con->prepare($sql);
           $insert->bindValue(":cod",$classEmpresa->getCodigo());
           $insert->bindValue(":descr", $classEmpresa->getDescricao());
           $insert->execute();
        }


    }
?>