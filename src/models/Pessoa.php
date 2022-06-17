<?php

class Pessoa {
    private $nome;
    private $nivel;
    private $email;
    private $senha;

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;

        return $this;
    }

    // public function getCpf() {
    //     return $this->cpf;
    // }

    // public function setCpf($cpf) {
    //     $this->cpf = $cpf;

    //     return $this;
    // }

    public function getNivel() {
        return $this->nivel;
    }

    public function setNivel($nivel) {
        $this->nivel = $nivel;

        return $this;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;

        return $this;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha){
        $this->senha = $senha;

        return $this;
    }
}