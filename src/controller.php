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
                session_write_close();
                header('Location: /controller?action=all-employees');
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
                session_write_close();
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
            $employee = $employee_controller->create($registration, $first_name, $last_name, $email, $phone_number, $salary, $role, $department, $created_by);

            if ($employee) {
                header('Location: /controller?action=all-employees');
            } else {
                header('Location: /employee/register');
            }
            break;
        case 'all-employees':
            session_start();
            $employees = $employee_controller->get_all();
            $_SESSION['employees'] = $employees;
            session_write_close();
            header('Location: /employee');
            break;

        case 'update-employee-form':
            $id = $_GET['id'];
            $employee = $employee_controller->get_by_id($id);
            $_SESSION['employee'] = $employee;
            session_write_close();
            header('Location: /employee/update');
            break;

        case 'update-employee':
            $id = $_POST['employee_id'];
            $registration = $_POST['registration'];
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $email = $_POST['email'];
            $phone_number = $_POST['phone_number'];
            $salary = $_POST['salary'];
            $role = $_POST['role'];
            $department = $_POST['department'];
            $employee = $employee_controller->update($id, $registration, $first_name, $last_name, $email, $phone_number, $salary, $role, $department);
            if ($employee) {
                header('Location: /controller?action=all-employees');
            } else {
                header('Location: /employee/update');
            }
            break;

        case 'delete-employee':
            $id = $_GET['id'];
            $employee = $employee_controller->delete($id);
            if ($employee) {
                header('Location: /controller?action=all-employees');
            } else {
                header('Location: /employee');
            }
            break;
        case 'logout':
            session_destroy();
            header('Location: /');
            break;
    }
}
