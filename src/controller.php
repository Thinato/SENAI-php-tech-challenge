<?php
session_start();
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
        case 'register-employee':
            $registration = $_POST['registration'];
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $email = $_POST['email'];
            $phone_number = $_POST['phone_number'];
            $salary = $_POST['salary'];
            $role = $_POST['role'];
            $department = $_POST['department'];
            $created_by = 1;
            $employee = $employee_controller->create($registration, $first_name, $last_name, $email, $phone_number, $salary, $role, $department, $created_by);

            if ($employee) {
                header('Location: /employee');
            } else {
                header('Location: /employee/register');
            }
            break;
        case 'logout':
            session_destroy();
            header('Location: /');
            break;
    }
}
