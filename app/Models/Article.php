<?php
namespace App\Models;

class Article extends Model {

    public function getAll() {
        $stmt = $this->db->query("SELECT * FROM articles");
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function find($id) {
        $stmt = $this->db->prepare("SELECT * FROM articles WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function create($data) {
        $stmt = $this->db->prepare("INSERT INTO articles (title, content, author_id) VALUES (:title, :content, :author_id)");
        return $stmt->execute([
            'title' => $data['title'],
            'content' => $data['content'],
            'author_id' => $data['author_id']
        ]);
    }

    public function update($id, $data) {
        $stmt = $this->db->prepare("UPDATE articles SET title = :title, content = :content WHERE id = :id");
        return $stmt->execute([
            'title' => $data['title'],
            'content' => $data['content'],
            'id' => $id
        ]);
    }

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM articles WHERE id = :id");
        return $stmt->execute(['id' => $id]);
    }
}
