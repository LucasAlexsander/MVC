<?php 

namespace App;
use MF\Init\Bootstrap;

class Route extends Bootstrap {   

    protected function initRoutes() {

        //Dados de exemplo

        $routes['home'] = array (
            'route' => '/', //Rota
            'controller' => 'indexController', //Controller usado para a rota
            'action' => 'index' //Ação
        );

        $routes['excluir'] = array (
            'route' => '/excluir',
            'controller' => 'IndexController',
            'action' => 'excluir'
        );

        $this->setRoutes($routes);
    }
  
}
?>