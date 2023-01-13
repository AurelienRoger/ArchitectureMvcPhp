<?php

namespace App\Controllers;

class MainController extends CoreController
{
    public function home()
    {


        // on prépare les données à envoyer
        $viewData = [];

        // on délègue l'affichage, tout en envoyant des données à la vue
        $this->show('home', $viewData);
    }
}