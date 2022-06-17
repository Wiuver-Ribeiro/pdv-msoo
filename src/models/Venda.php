<?php

class Venda {
    private $codigoVenda;
    private $status;
    private $dataVenda;
    private $operador;
    private $formaPagamento;
    

    public function getCodigoVenda() {
        return $this->codigoVenda;
    }

    public function setCodigoVenda($codigoVenda) {
        $this->codigoVenda = $codigoVenda;

        return $this;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;

        return $this;
    }

    public function getDataVenda() {
        return $this->dataVenda;
    }

    public function setDataVenda($dataVenda) {
        $this->dataVenda = $dataVenda;

        return $this;
    }

    public function getOperador() {
        return $this->operador;
    }

    public function setOperador($operador) {
        $this->operador = $operador;

        return $this;
    }

    public function getFormaPagamento() {
        return $this->formaPagamento;
    }

    public function setFormaPagamento($formaPagamento) {
        $this->formaPagamento = $formaPagamento;

        return $this;
    }
}