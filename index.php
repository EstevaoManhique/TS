<?php

if(!isset($_SESSION)){
    session_start();
}

require_once './Controllers/UsuarioController.php';
// Para saber mais sobre a função parse_url: https://www.php.net/manual/pt_BR/function.parse-url.php
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
// Para saber mais estrutura switch, leia: https://www.php.net/manual/pt_BR/control-structures.switch.php
switch($url)
{
    case '/':
        $uc = new UsuarioController;
        $uc->index();
    break;
    case '/user/login':
        $uc = new UsuarioController;
        $uc->login();
    break;

    case '/pessoa/form':
        //PessoaController::form();
    break;

    case '/pessoa/form/save':
        //PessoaController::save();
    break;

    case '/pessoa/delete':
        //PessoaController::delete();
    break;

    default:
        echo "Erro 404";
    break;
}