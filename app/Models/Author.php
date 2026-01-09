<?php
namespace App\Models;

class Author extends Reader {

    public function role() {
        return 'author';
    }

    public function getArticles() {
        $stmt = $this->db->prepare("SELECT * FROM articles WHERE author_id = :id");
        $stmt->execute(['id' => $this->id]);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}
