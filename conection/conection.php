<?php

class ConnectFactory{

    
    public static function getConection(){
        
        $host = "mysql:host=localhost;dbname=crm";
        $root = "root";
        $senha = "";
                
    try {
        $con = new PDO($host,$root, $senha);
        //echo "________________________conectou"."<br>";
    } catch (PDOException $exc) {

        echo                      "<br><br><br><br>".$exc->getMessage();
    }

        return $con;
    }

    
}


?>