<?php

namespace App;


use SON\Init\Boostrap;

class Routes extends Boostrap
{
    protected function initRoutes()
    {
        $routes['index']     = array('route'=>'/','controller'=>'indexController','action'=>'index');
        $routes['quem_somos'] = array('route'=>'/quem_somos','controller'=>'indexController','action'=>'quem_somos');
        $routes['missao']    = array('route'=>'/missao','controller'=>'indexController','action'=>'missao');
        $routes['contato']   = array('route'=>'/contato','controller'=>'indexController','action'=>'contato');
        $this->setRoutes($routes);
    }
}