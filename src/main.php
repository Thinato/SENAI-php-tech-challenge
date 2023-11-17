<?php

require __DIR__ . '/database.php';
require __DIR__ . '/route.php';

// Auth
require_once __DIR__ . '/auth/controller.php';

// User
require_once __DIR__ . '/user/domain.php';
require_once __DIR__ . '/user/repository.php';
require_once __DIR__ . '/user/controller.php';

// Employee
require_once __DIR__ . '/employee/domain.php';
require_once __DIR__ . '/employee/repository.php';
require_once __DIR__ . '/employee/controller.php';

$user = new User();
$userRepository = new UserRepository($db);
$authController = new AuthController($userRepository);

