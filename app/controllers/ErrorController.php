<?php

namespace App\Controllers;
use App\Controllers\CoreController;

class ErrorController extends CoreController
{
    public function error404()
    {
        $this->show('404');
    }
}