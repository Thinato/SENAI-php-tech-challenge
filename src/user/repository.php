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
        $sql = "INSERT INTO users (username, password) VALUES ('" . $username . "', " . $password . ")";

        $this->db->query($sql, [$username, $password]);
    }

    public function get_user_by_id(int $id)
    {
        $sql = "SELECT * FROM users WHERE id = ?";

        $this->db->query($sql, [$id]);

        $result = $this->db->fetch();

        return $result;
    }

    public function get_user_by_username(string $username)
    {
        $sql = "SELECT * FROM users WHERE username = ?";

        $this->db->query($sql, [$username]);

        $result = $this->db->fetch();

        return $result;
    }
}
