<?php
namespace App\Models;

class Categorie extends Model {

    public function getAll() {
        $stmt = $this->db->query("SELECT * FROM categorie");
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function find($id) {
        $stmt = $this->db->prepare("SELECT * FROM categorie WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }
}
