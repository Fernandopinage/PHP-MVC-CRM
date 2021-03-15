<?php 


class ClassTecnico{

    private $cliente;
    private $data;
    private $resumo;
    private $contrato;
    private $horainicio;
    private $horafim;
    private $duracao;
    private $evento;
    private $projeto;
    private $contato;
    private $detalhe;


    public function setCliente($cliente){
        $this->cliente = $cliente;
    }
    
    public function getCliente(){
        return $this->cliente;      
    }
    public function setData($data){
        $this->data = $data;
    }
    
    public function getData(){
        return $this->data;  
    }
    public function setResumo($resumo){
        $this->resumo = $resumo;
    }
    
    public function getResumo(){
        return $this->resumo;  
    }
    public function setContrato($contrato){
        $this->contrato = $contrato;
    }
    
    public function getContrato(){
        return $this->contrato;  
    }
    public function setHorainicio($horainicio){
        $this->horainicio = $horainicio;
    }
    
    public function getHorainicio(){
        return $this->horainicio;  
    }
    public function setHorafim($horafim){
        $this->horafim = $horafim;
    }
    
    public function getHorafim(){
        return $this->horafim;  
    }
    public function setDuracao($duracao){
        $this->duracao = $duracao;
    }
    
    public function getDuracao(){
        return $this->duracao;  
    }
    public function setEvento($evento){
        $this->evento = $evento;
    }
    
    public function getEvento(){
        return $this->evento;  
    }
    public function setProjeto($projeto){
        $this->projeto = $projeto;
    }
    
    public function getProjeto(){
        return $this->projeto;  
    }
    public function setContato($contato){
        $this->contato = $contato;
    }
    
    public function getContato(){
        return $this->contato;  
    }
    public function setDetalhe($detalhe){
        $this->detalhe = $detalhe;
    }
    
    public function getDetalhe(){
        return $this->detalhe;  
    }

}
