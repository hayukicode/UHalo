<?php

namespace App\Controllers;

use Core\BaseController;
use Core\Container;


class HomeController extends BaseController{ 

    
    public function index() {  

        $this->setPageTitle('Pagina Inicial');
        $this->renderView('home/index', 'layout/header');
    }

}
