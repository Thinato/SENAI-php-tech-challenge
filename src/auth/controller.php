<?php

class AuthController {
    private $userRepository;

    public function __construct(UserRepository $userRepository) {
        $this->userRepository = $userRepository;
    }

    public function registerUser($username, $password) {
        $hashedPassowrd = password_hash($password, PASSWORD_DEFAULT);
        $user = $this->userRepository->createUser($username, $hashedPassowrd);

        return $user;
    }

    public function authenticateUser($username, $password) {
        $user = $this->userRepository->getUserByUsername($username);

        $match = password_verify($password, $user->getPassword());

        if ($user && $match) {
            return $user;
        }

        return null;
    }
}
