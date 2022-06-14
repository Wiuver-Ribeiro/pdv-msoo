<?php
namespace src\controllers;

use \core\Controller;

class ProdutoController extends Controller {

    public function index() {
        $this->render('produtos');
    }

    public function estoqueBaixo() {
        $this->render('estoqueBaixo');
    }



}