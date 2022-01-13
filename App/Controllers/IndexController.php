<?php
namespace App\Controllers;
use MF\Controller\Action;

class IndexController extends Action {    

    public function index() { //Devemos sempre pegar com base a pasta public/ index, já que lá esta tendo um autoload
        $this->view->dados = array ('Sofá', 'Cadeira', 'Cama');
        $this->render('index');
    }
    
    public function sobreNos() {
        $this->view->dados = ['Notbook', 'SmarthFone'];
        $this->render('sobreNos');
    }
}


?>