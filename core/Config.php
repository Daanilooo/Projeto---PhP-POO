<?php
    session_start();
    ob_start(); //Limpa o buffer de redirecionamento

    define('URL', 'http://localhost/pooii_aula/');
    define('URLADM', 'http://localhost/pooii_aula/adm/');

    define('CONTROLLER', 'Home');
    define('METODO', 'index');

    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('DBNAME', 'pooii');
    define('PORT', '3306');