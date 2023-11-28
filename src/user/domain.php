<?php

class UserDomain
{
    private $repository;

    public function __construct($repository)
    {
        $this->repository = $repository;
    }

    public function login_usecase(string $username, string $password)
    {
        if (empty($username) || empty($password)) {
            return null;
        }

        $user = $this->repository->get_user_by_username($username);

        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }

        return null;
    }

    public function register_usecase(string $username, string $password)
    {
        if (empty($username) || empty($password)) {
            return null;
        }

        $hashedPassowrd = password_hash($password, PASSWORD_DEFAULT);

        $user = $this->repository->create($username, $hashedPassowrd);

        return $user;
    }

}
