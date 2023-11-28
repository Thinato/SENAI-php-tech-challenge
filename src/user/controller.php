<?php

class UserController
{
    private UserDomain $domain;

    public function __construct(UserDomain $domain)
    {
        $this->domain = $domain;
    }

    public function login($username, $password)
    {
        $user = $this->domain->login_usecase($username, $password);
        return $user;
    }

    public function register($username, $password)
    {
        $user = $this->domain->register_usecase($username, $password);
        return $user;
    }
}
