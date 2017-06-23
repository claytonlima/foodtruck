<?php
namespace App\Controllers;

use SON\Controller\Action;
use SON\DI\Container;

class IndexController extends Action
{
    public function index()
    {
        $this->render("index");
    }

    public function home()
    {
        $this->render("home");
    }

    public function quem_somos()
    {
        $this->render("quem_somos");
    }

    public function missao()
    {
        $this->render("missao");
    }

    public function contato()
    {
        $this->render("contato");
    }
}