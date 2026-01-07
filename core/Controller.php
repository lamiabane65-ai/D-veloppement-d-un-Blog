<?php

namespace Core ;
abstract class Controller {
    public function render($views,$data =[]){
        extract($data);

        require __DIR__ . '/../app/Views/layout/header.php';
        require __DIR__ . '/../app/Views/' . $view . '.php';
        require __DIR__ . '/../app/Views/layout/footer.php';
    }
}