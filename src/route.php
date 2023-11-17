<?php
$request = $_SERVER['REQUEST_URI'];

$viewDir = '/../view/';

switch ($request) {
    case '':
    case '/':
        require __DIR__ . $viewDir . 'home.php';
        break;
    case '/login':
        require __DIR__ . $viewDir . 'login.php';
        break;
    case '/employee':
        require __DIR__ . $viewDir . 'employee.php';
    break;
    case '/NovoUsuario':
        require __DIR__. $viewDir . 'new_user.php' ;
        break;
    case '/CadastroFuncionario':
        require __DIR__ . $viewDir . 'employee.php';
        break;
}
