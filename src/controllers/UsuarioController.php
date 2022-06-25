<?php
namespace src\controllers;


//CONTROLLERS
use \core\Controller;


//MODELS
use \src\models\Usuario;

class UsuarioController extends Controller {

    public function index() {
        $this->render('usuarios');
    }


    public function logarController() {
     $usuario = new Usuario();
     $usuario->logar();
     $this->redirect('/');
    }


}