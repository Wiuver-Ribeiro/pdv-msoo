<?php

class Caixa {
    private $codigoCaixa;
    private $dataAbertura;
    private $vendido;
    private $quebra;
    private $caixa;
    private $operador;

    public function getCodigoCaixa() {
        return $this->codigoCaixa;
    }

    public function setCodigoCaixa($codigoCaixa){
        $this->codigoCaixa = $codigoCaixa;

        return $this;
    }

    public function getDataAbertura() {
        return $this->dataAbertura;
    }
 
    public function setDataAbertura($dataAbertura) {
        $this->dataAbertura = $dataAbertura;

        return $this;
    }
 
    public function getVendido() {
        return $this->vendido;
    }

    public function setVendido($vendido) {
        $this->vendido = $vendido;

        return $this;
    }

    public function getQuebra() {
        return $this->quebra;
    }

    public function setQuebra($quebra) {
        $this->quebra = $quebra;

        return $this;
    }

    public function getCaixa() {
        return $this->caixa;
    }

    public function setCaixa($caixa) {
        $this->caixa = $caixa;

        return $this;
    }

    public function getOperador() {
        return $this->operador;
    }

    public function setOperador($operador) {
        $this->operador = $operador;

        return $this;
    }
}