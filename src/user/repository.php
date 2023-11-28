<?php

class UserRepository
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function create(string $username, string $password)
    {
        $sql = "INSERT INTO users (username, password) VALUES ( '" . $username . "', '" . $password . "')";

        $this->db->query($sql);
    }

    public function get_user_by_id(int $id)
    {
        $sql = "SELECT * FROM users WHERE id = " . $id;

        $result = $this->db->query($sql);

        return $result->fetch_assoc();
    }

    public function get_user_by_username(string $username)
    {
        $sql = "SELECT * FROM users WHERE username = '" . $username . "'";

        $result = $this->db->query($sql);

        return $result->fetch_assoc();
    }
}
