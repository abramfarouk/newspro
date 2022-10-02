<?php

namespace MVC\controllers;

use MVC\core\controller;
use MVC\models\category;


  class homecontroller extends controller  {



    public function index(){
      $category= new category();
      $data= $category->Getallcategory();
      $this->view("home/index", ["title"=>"home" ,'data'=>$data]);
    }


    public function details(){
      $this->view("home/details", ["title"=>"details"]);


    }
 

}


