<?php 

namespace MF\Controller;

abstract class Action {

    protected $view; //Esta disponivel em qualquer objeto de IndexController

    public function __construct() {
        $this->view = new \stdClass(); //Podemos criar objetos vázios que podem ser compostos de atributos
    }

    protected function render($view) {
        $classAtual = get_class($this); //Pegamos o diretorio da onde esta o Controller = App/Controller/IndexController

        $classAtual = str_replace('App\\Controllers\\', '', $classAtual); //Tiramos o path e deixamos somente o nome da classe

        $classAtual = strtolower(str_replace('Controller', '', $classAtual)); //Tiramos o "Controller" por ser um nome comum em todos os controllers

        require_once "../App/Views/index/{$view}.phtml";
    }
}


?>