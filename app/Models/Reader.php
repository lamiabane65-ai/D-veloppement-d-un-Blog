<?php
namespace App\Models;

class Reader extends User {

    public function role() {
        return 'reader';
    }

    public function getAllReaders() {
        $stmt = $this->db->query("SELECT * FROM reader");
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}
