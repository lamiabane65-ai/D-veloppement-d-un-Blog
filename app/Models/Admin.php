<?php
namespace App\Models;

class Admin extends Reader {

    public function role() {
        return 'admin';
    }

    public function getAllUsers() {
        $stmt = $this->db->query("SELECT * FROM users");
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}
