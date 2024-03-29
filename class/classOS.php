<?php

Class ClassOS
{

    private $numOS;
    private $cliente;
    private $usuario;
    private $data;
    private $resumo;
    private $contrato;
    private $horainicio;
    private $horafim;
    private $Intervalo;
    private $translado;
    private $status;
    private $chave;
    private $horaagendada;
    private $detalhe;


    public function getOS()
    {
        return $this->numOS;
    }

    public function getCliente()
    {
        return $this->cliente;
    }

    public function getUsuario()
    {
        return $this->usuario;
    }

    public function getData()
    {
        return $this->data;
    }

    public function getResumo()
    {
        return $this->resumo;
    }

    public function getContrato()
    {
        return $this->contrato;
    }

    public function getHorainicio()
    {
        return $this->horainicio;
    }

    public function getHorafim()
    {
        return $this->horafim;
    }

    public function getIntervalo()
    {
        return $this->Intervalo;
    }

    public function getTranslado()
    {
        return $this->translado;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getChave()
    {
        return $this->chave;
    }

    public function getHoraagendada()
    {
        return $this->horaagendada;
    }

    public function getDetalhe()
    {
        return $this->detalhe;
    }


    /****** */
    public function setOS($numOS)
    {

        $this->numOS = $numOS;
    }

    public function setCliente($cliente)
    {

        $this->cliente = $cliente;
    }

    public function setUsuario($usuario)
    {

        $this->usuario = $usuario;
    }

    public function setData($data)
    {

        $this->data = $data;
    }

    public function setResumo($resumo)
    {

        $this->resumo = $resumo;
    }

    public function setContrato($Contrato)
    {

        $this->Contrato = $Contrato;
    }

    public function setHorainicio($horainicio)
    {

        $this->horainicio = $horainicio;
    }

    public function setHorafim($horafim)
    {

        $this->horafim = $horafim;
    }

    public function setIntervalo($Intervalo)
    {

        $this->Intervalo = $Intervalo;
    }

    public function setTranslado($translado)
    {

        $this->translado = $translado;
    }

    public function setStatus($status)
    {

        $this->status = $status;
    }

    public function setChave($chave)
    {

        $this->chave = $chave;
    }

    public function setHoraagendada($horaagendada)
    {

        $this->horaagendada = $horaagendada;
    }

    public function setDetalhe($detalhe)
    {

        $this->detalhe = $detalhe;
    }
}
