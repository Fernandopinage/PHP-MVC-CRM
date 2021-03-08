<?php 


class ClassEmpresa{

    private $grupo;
    private $codigo;
    private $descricao;
    private $razao;
    private $tipo;
    private $foto;
    private $inscricao;
    private $barra;
    private $suframa;
    private $cep;
    private $uf;
    private $logradouro;
    private $bairro;
    private $complemento; 

    public function setGrupo($grupo){
        $this->grupo = $grupo;
    }
    public function getGrupo(){
        return $this->grupo;
    }
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
    public function setRazao($razao){
        $this->razao = $razao;
    }
    public function getRazao(){
        return $this->razao;
    }
    public function setTipo($tipo){
        $this->tipo = $tipo;
    }
    public function getTipo(){
        return $this->tipo;
    }
    public function setFoto($foto){
        $this->foto = $foto;
    }
    public function getFoto(){
        return $this->foto;
    }
    public function setInscricao($inscricao){
        $this->inscricao = $inscricao;
    }
    public function getInscricao(){
        return $this->inscricao;
    }
    public function setBarrao($barra){
        $this->barra = $barra;
    }
    public function getBarra(){
        return $this->barra;
    }
    public function setSuframa($suframa){
        $this->suframa = $suframa;
    }
    public function getSuframa(){
        return $this->suframa;
    }
    public function setCep($cep){
        $this->cep = $cep;
    }
    public function getCep(){
        return $this->cep;
    }
    public function setUf($uf){
        $this->uf = $uf;
    }
    public function getUf(){
        return $this->uf;
    }
    public function setLogradouro($logradouro){
        $this->logradouro = $logradouro;
    }
    public function getLogradouro(){
        return $this->logradouro;
    }
    public function setBairro($bairro){
        $this->bairro = $bairro;
    }
    public function getBairro(){
        return $this->bairro;
    }
    public function setComplemento($complemento){
        $this->complemento = $complemento;
    }
    public function getComplemento(){
        return $this->complemento;
    }
    
}

?>