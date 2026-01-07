<?php
namespace Core;

abstract class Controller {

    public function render($view, $data = []) {

        // extraire les variables pour les views
        extract($data);

        // chemin complet
        $viewFile = __DIR__ . '/../app/Views/' . $view . '.php';

        // vérifier si le fichier existe
        if(file_exists($viewFile)) {
            require __DIR__ . '/../app/Views/layout/header.php';
            require $viewFile;
            require __DIR__ . '/../app/Views/layout/footer.php';
        } else {
            echo "Erreur : La view '$view' n'existe pas !";
        }

    }

}
?>
