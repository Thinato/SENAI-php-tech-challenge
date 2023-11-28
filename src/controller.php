<?php

require __DIR__ . '/main.php';

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'login':
            $username = $_POST['username'];
            $password = $_POST['password'];
            $user = $user_controller->login($username, $password);
            if ($user) {
                $_SESSION['user'] = $user;
                header('Location: /employee');
            } else {
                header('Location: /login');
            }
            break;
        case 'register':
            $username = $_POST['username'];
            $password = $_POST['password'];
            $user = $user_controller->register($username, $password);
            if ($user) {
                $_SESSION['user'] = $user;
                header('Location: /employee');
            } else {
                header('Location: /');
            }
            break;
        case 'logout':
            session_destroy();
            header('Location: /');
            break;
    }
}
