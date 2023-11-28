<?php

$request = $_SERVER['REQUEST_URI'];
$viewDir = '/../view/';

$request = explode("?", $request)[0];

switch ($request) {
    case '':
    case '/':
        require __DIR__ . $viewDir . 'home.php';
        break;
    case '/login':
        require __DIR__ . $viewDir . 'login.php';
        break;
    case '/register':
        require __DIR__ . $viewDir . 'register.php';
        break;
    case '/employee':
        require __DIR__ . $viewDir . 'employee-form.php';
        break;
    case '/employee/register':
        require __DIR__ . $viewDir . 'employee-form.php';
        break;
    case '/controller':
        require __DIR__ . '/controller.php';
        break;
}
