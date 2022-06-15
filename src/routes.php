<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/dashboard', 'HomeController@home');
$router->get('/logout', 'HomeController@logout');


$router->get('/usuarios', 'UsuarioController@index');
$router->get('/fornecedores', 'FornecedorController@index');
$router->get('/pagamentos', 'FormaPagamentoController@index');
$router->get('/categorias', 'CategoriaController@index');
$router->get('/compras', 'CompraController@index');
$router->get('/produtos', 'ProdutoController@index');
$router->get('/vendas', 'VendaController@index');
$router->get('/caixas', 'CaixaController@index');
$router->get('/estoque', 'ProdutoController@estoqueBaixo');
$router->get('/sobre/{nome}', 'HomeController@sobreP');
$router->get('/sobre', 'HomeController@sobre');