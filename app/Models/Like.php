<?php
namespace App\Models;

class Like extends Model {

    public function countByArticle($article_id) {
        $stmt = $this->db->prepare("SELECT COUNT(*) as total FROM `like` WHERE article_id = :id");
        $stmt->execute(['id' => $article_id]);
        return $stmt->fetch(\PDO::FETCH_ASSOC)['total'];
    }

    public function add($user_id, $article_id) {
        $stmt = $this->db->prepare("INSERT INTO `like` (user_id, article_id) VALUES (:user_id, :article_id)");
        return $stmt->execute(['user_id' => $user_id, 'article_id' => $article_id]);
    }
}
