<?php

namespace App\Controllers;

use Core\Controller;
use App\Models\Article; // Assure-toi que le model existe

class HomeController extends Controller {

    public function index() {
        // Option 1 : temporaire, pour tester les vues sans BD
        $articles = [
            ['title' => 'Premier article', 'content' => 'Ceci est le contenu du premier article.'],
            ['title' => 'Deuxième article', 'content' => 'Ceci est le contenu du deuxième article.']
        ];

        // Option 2 : si tu as créé la table articles, tu peux utiliser le model
        // $articleModel = new Article();
        // $articles = $articleModel->getAll();

        $this->render('home', ['articles' => $articles]);
    }
}
