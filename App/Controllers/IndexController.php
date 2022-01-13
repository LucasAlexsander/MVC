<?php

namespace App\Controllers;

//Recursos do miniframework (MF)
use MF\Controller\Action;
use MF\Model\Container;
//Os models
use App\Models\Produto;
use App\Models\Info;

class IndexController extends Action {    

    public function index() { //Devemos sempre pegar com base a pasta public/ index, já que lá esta tendo um autoload
        //$this->view->dados = array ('Sofá', 'Cadeira', 'Cama'); //Manda a variável para a página atribuida no render.

        $produto = Container::getModel('Produto'); //Busca o Model desejado

        $produtos = $produto->getProdutos();

        $this->view->dados = $produtos;

        $this->render('index'); //Recebe como parametro a página que vc quer ir e o seu layout (opcional), respectivamente;
    }
    
    public function sobreNos() {     
        
        $info = Container::getModel('Info');

        $this->view->dados = $info->getInfo();


        $this->render('sobreNos', 'layout2'); 
    }

    public function excluir() {
        $this->render('excluir');
    }
}


?>