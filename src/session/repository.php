<?php

class AuthController
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function registerUser($username, $password)
    {
        $hashedPassowrd = password_hash($password, PASSWORD_DEFAULT);
        $user = $this->db->create($username, $hashedPassowrd);

        return $user;
    }

    public function authenticateUser($username, $password)
    {
        $user = $this->userRepository->getUserByUsername($username);

        $match = password_verify($password, $user->getPassword());

        if ($user && $match) {
            return $user;
        }

        return null;
    }
}
