<?php

namespace src\models;
use \src\models\Pessoa;

class Usuario extends Pessoa{
  private $cpf;

  public function getCpf() {
    return $this->cpf;
  }

  public function setCpf($cpf){
    $this->cpf = $cpf;
    return $this;
  }

  public function logar() {
    echo "Logado com sucesso!";
  }
}