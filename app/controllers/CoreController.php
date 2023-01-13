<?php

namespace App\Controllers;

class CoreController
{
    public function show($viewName, $viewData = [])
    {
        // on rajoute global $router pour pouvoir accéder à AltoRouter & générer des URLs avec $router->generate()
        global $router;

        // on regarde si BASE_URI est défini : si oui -> $absoluteURL = BASE_URI
        $absoluteURL = $_SERVER['BASE_URI'] ?? '';

        // on va charger nos vues (header + viewName + footer)
        // $viewData est disponible dans chaque fichier de vue
        require_once __DIR__ . '/../views/header.tpl.php';
        require_once __DIR__ . '/../views/' . $viewName . '.tpl.php';
        require_once __DIR__ . '/../views/footer.tpl.php';
    }
}