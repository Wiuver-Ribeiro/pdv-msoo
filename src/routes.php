<?php

use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/painel-adm', 'HomeController@painelAdministrativo');
$router->get('/painel-tesoureiro', 'HomeController@painelTesoureiro');
$router->get('/logout', 'HomeController@logout');
$router->get('/contasAPagar', 'ContaController@contas');
$router->get('/contasAReceber', 'ContaController@contasReceber');
$router->get('/contasVencidas', 'ContaController@contasVencidas');
$router->get('/listaCompra', 'ContaController@listaCompra');
$router->get('/listaVenda', 'ContaController@listaVenda');



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
