<?php

namespace App\Controllers;
//Recursos do miniframework (MF)
use MF\Controller\Action;
use MF\Model\Container;


class IndexController extends Action {    

    public function index() { 
        //Pegar com base

        $this->view->dados = $produtos;

        $this->render('index');
    }
}


?>