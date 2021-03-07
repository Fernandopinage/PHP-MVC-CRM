<?php 

class ClassGrupo{


    private $codigo = null;
    private $descricao = null;


    public function setCodigo($codigo){
        $this->codigo = $codigo;

    }
    public function getCodigo(){

        return $this->codigo;
    }

    public function setDescricao($descricao){

        $this->descricao = $descricao;
    }
    public function getDescricao(){

        return $this->descricao;
    }

}