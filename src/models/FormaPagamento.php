<?php
class FormaPagamento {
    private $codigoPagamento;
    private $formaPagamento;
    

    public function getCodigoPagamento() {
        return $this->codigoPagamento;
    }

    public function setCodigoPagamento($codigoPagamento) {
        $this->codigoPagamento = $codigoPagamento;

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