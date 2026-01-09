<?php
namespace App\Models;

class Commentaire extends Model {

    public function getAllByArticle($article_id) {
        $stmt = $this->db->prepare("SELECT * FROM commentaire WHERE article_id = :id");
        $stmt->execute(['id' => $article_id]);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function create($data) {
        $stmt = $this->db->prepare("INSERT INTO commentaire (content, article_id, user_id) VALUES (:content, :article_id, :user_id)");
        return $stmt->execute([
            'content' => $data['content'],
            'article_id' => $data['article_id'],
            'user_id' => $data['user_id']
        ]);
    }
}
