<?php

class UserRepository {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function create($id, $username, $password) {
        $user = new User($id, $username, $password);
        
        $sql = "INSERT INTO users (id, username, password) VALUES (?, ?, ?)";

        return $db->query($sql, [$user->id, $user->username, $user->password]);
    }

    public function getUserById($id) {
        $sql = "SELECT * FROM users WHERE id = ?";

        $db->query($sql, [$id]);

        $result = $db->fetch();

        return $result;
    }

    public function getUserByUsername($username) {
        
    }
}
