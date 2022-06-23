<?php
namespace src\controllers;

use \core\Controller;

class ContaController extends Controller{
    public function contas() {
        $this->render('contasAPagar');
    }

    public function movimentacoes() {
        $this->render("movimentacoes");
    }

    public function contasReceber() {
        $this->render('contasAReceber');
    }

    public function contasVencidas() {
        $this->render('contasVencidas');
    }

    public function listaCompra() {
        $this->render('listaCompra');
    }

    public function listaVenda() {
        $this->render('listaVenda');
    }
}