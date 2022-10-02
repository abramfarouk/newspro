<?php

namespace MVC\controllers;

use MVC\core\controller;

class adminpostcontroller extends controller{


    public function index(){

        $this->view('back/index', ['title'=>'admin']);
    }
}






?>