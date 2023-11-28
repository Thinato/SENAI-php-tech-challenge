<?php

require __DIR__ . '/database.php';

// Auth
// require_once __DIR__ . '/auth/controller.php';

// User
require_once __DIR__ . '/user/domain.php';
require_once __DIR__ . '/user/repository.php';
require_once __DIR__ . '/user/controller.php';

// Employee
require_once __DIR__ . '/employee/domain.php';
require_once __DIR__ . '/employee/repository.php';
require_once __DIR__ . '/employee/controller.php';

$user_repository = new UserRepository($db);
$user_domain = new UserDomain($user_repository);
$user_controller = new UserController($user_domain);

$employee_repository = new EmployeeRepository($db);
$employee_domain = new EmployeeDomain($employee_repository);
$employee_controller = new EmployeeController($employee_domain);
