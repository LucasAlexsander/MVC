<?php 

namespace App;
use MF\Init\Bootstrap;

class Route extends Bootstrap {   

    protected function initRoutes() {
        $routes['home'] = array (
            'route' => '/', //Rota
            'controller' => 'indexController', //Controller usado para a rota
            'action' => 'index' //Ação
        );

        $routes['sobre_nos'] = array (
            'route' => '/sobre_nos', 
            'controller' => 'indexController',
            'action' => 'sobreNos'
        );

        $this->setRoutes($routes);
    }
  
}
?>