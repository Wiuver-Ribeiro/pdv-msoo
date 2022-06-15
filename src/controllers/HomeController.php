<?php
namespace src\controllers;

use \core\Controller;

class HomeController extends Controller {

    public function index() {
        $this->render('login');
    }

    public function home() {
        $this->render('home');
    }
    public function logout() {
        $this->render('logout');
    }

}