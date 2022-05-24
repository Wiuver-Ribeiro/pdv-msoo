<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/usuarios', 'UsuarioController@index');
$router->get('/fornecedores', 'FornecedorController@index');
$router->get('/sobre/{nome}', 'HomeController@sobreP');
$router->get('/sobre', 'HomeController@sobre');