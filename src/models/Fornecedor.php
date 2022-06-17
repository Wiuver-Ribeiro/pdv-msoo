<?php

class Fornecedor extends Pessoa{
    private $tipoPessoa;
    private $cnpj;
    private $telefone;

 
    public function getCnpj() {
        return $this->cnpj;
    }

    public function setCnpj($cnpj) {
        $this->cnpj = $cnpj;

        return $this;
    }


    public function getTelefone() {
        return $this->telefone;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;

        return $this;
    }  

    public function getTipoPessoa() {
        return $this->tipoPessoa;
    }

    public function setTipoPessoa($tipoPessoa) {
        $this->tipoPessoa = $tipoPessoa;
        
        return $this;
    }
}