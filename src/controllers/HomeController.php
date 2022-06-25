<?php
namespace src\controllers;

use \core\Controller;

class HomeController extends Controller {

    public function index() {
        $this->render('links');
    }

    public function login() {
       $this->render('login');
    }
    public function painelAdministrativo() {
        $this->render('painel-adm');
    }

    public function painelTesoureiro() {
        $this->render('painel-tesoureiro');
    }

    public function home() {
        $this->render('home');
    }
    public function logout() {
        $this->render('logout');
    }

    public function registrar() {
        $this->render('registrar');
    }

}