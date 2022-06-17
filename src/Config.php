<?php
namespace src;

class Config {
    const BASE_DIR = '/pdv-msoo/public';

    const DB_DRIVER = 'mysql'; // Drivers suportados nesta versão [MySQL, PostgreSQL, NoSQL, MongoDB]
    const DB_HOST = 'localhost'; // Usuário padrão [root]
    const DB_DATABASE = 'pdv-msoo';
    CONST DB_USER = 'root';
    const DB_PASS = ''; // Sem senha [por padrão]

    const ERROR_CONTROLLER = 'ErrorController';
    const DEFAULT_ACTION = 'index';
}