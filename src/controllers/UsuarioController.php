<?php
namespace src\controllers;

use \core\Controller;

class UsuarioController extends Controller {

    public function index() {
        $this->render('usuarios');
    }



}