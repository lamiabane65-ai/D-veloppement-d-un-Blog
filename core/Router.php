<?php
namespace Core;

class Router {

    public function dispatch($uri) {
        echo "Routing OK : " . $uri;
    }

}

$db = Database::getInstance();
echo "Connexion BD ok";

?>